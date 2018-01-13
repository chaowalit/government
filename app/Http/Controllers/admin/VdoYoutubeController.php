<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\VdoYoutube;

class VdoYoutubeController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['information'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['information'][0]['menu_name'];
    }

	public function index(){
		$VdoYoutube = new VdoYoutube;
		$VdoYoutube = $VdoYoutube->getVdoYoutubeAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'vdo_youtube' => $VdoYoutube,
		);

		$this->render_view('admin/vdo_youtube/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/vdo_youtube/form', $data, $this->menu_nav, 1);
	}

	public function edit($id = ''){
		$VdoYoutube = new VdoYoutube;
		$result = $VdoYoutube->getDataById($id);

		$data = array(
			'menu_name' => $this->menu_name,
			'result' => $result,
			'type_form' => 'edit',
		);

		$this->render_view('admin/vdo_youtube/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		try {
			$edit_id = $Requests->get('edit_id', '');

			//---- save ----//
			$post_date = "";
			if(!empty($Requests->get('post_date', ''))){
				$temp = explode('-', $Requests->get('post_date', ''));
				$post_date = $temp[2].'-'.$temp[1].'-'.$temp[0].' 00:00:00';
			}
			if($edit_id == ""){
				$data = array(
					"title" => $Requests->get('title', ''),
					"post_date" => $post_date,
					"detail1" => $Requests->get('detail1', ''),
					"file_path" => $Requests->get('file_path', ''),
					"active" => $Requests->get('active', ''),
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$VdoYoutube = new VdoYoutube;
				$VdoYoutube->save_data($data);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/vdo_youtube/form');
			}else{
				$data = array(
					"title" => $Requests->get('title', ''),
					"post_date" => $post_date,
					"detail1" => $Requests->get('detail1', ''),
					"file_path" => $Requests->get('file_path', ''),
					"active" => $Requests->get('active', ''),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$VdoYoutube = new VdoYoutube;
				$VdoYoutube->save_data($data, $edit_id);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/vdo_youtube/edit/'.$edit_id);
			}
		} catch (\Exception $e){
			echo $e->getMessage();
		}

	}

	public function delete($id = ''){
		$VdoYoutube = new VdoYoutube;
		$result = $VdoYoutube->getDataById($id);

		if(file_exists(base_path($result[0]->file_path))){
			@unlink(base_path($result[0]->file_path));
		}

		$VdoYoutube->delete_row($id);

		return redirect('admin/vdo_youtube');
	}
}
?>

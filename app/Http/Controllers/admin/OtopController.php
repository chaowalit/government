<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\Otop;

class OtopController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['information'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['information'][0]['menu_name'];
    }

	public function index(){
		$Otop = new Otop;
		$Otop = $Otop->getOtopAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'otop' => $Otop,
		);

		$this->render_view('admin/otop/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/otop/form', $data, $this->menu_nav, 1);
	}

	public function edit($id = ''){
		$Otop = new Otop;
		$result = $Otop->getDataById($id);

		$data = array(
			'menu_name' => $this->menu_name,
			'result' => $result,
			'type_form' => 'edit',
		);

		$this->render_view('admin/otop/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		try {
			$edit_id = $Requests->get('edit_id', '');
			$file_path = $Requests->get('img_old', '');
			$files = $Requests->file('file_path');
			if($files[0] != NULL){
				if(empty($file_path) || $file_path == ''){
					$file_path = 'otop-'.time();
				}
				$destinationPath = public_path('uploads/news/'.$file_path);
				if (!file_exists($destinationPath)) {
				    \File::makeDirectory($destinationPath, $mode = 0777, true, true);
				}

				foreach($files as $file){
		            $fileName = time().'-'.rand (100,999).'.'.$file->getClientOriginalExtension();
		            $file->move($destinationPath, $fileName);
		        }
			}

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
					"file_path" => $file_path,
					"active" => $Requests->get('active', ''),
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$Otop = new Otop;
				$Otop->save_data($data);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/otop/form');
			}else{
				$data = array(
					"title" => $Requests->get('title', ''),
					"post_date" => $post_date,
					"detail1" => $Requests->get('detail1', ''),
					"file_path" => $file_path,
					"active" => $Requests->get('active', ''),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$Otop = new Otop;
				$Otop->save_data($data, $edit_id);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/otop/edit/'.$edit_id);
			}
		} catch (\Exception $e){
			echo $e->getMessage();
		}

	}

	public function delete($id = '', $folder = '', $filename = ''){
		$Otop = new Otop;
		$result = $Otop->getDataById($id);

		if($folder == '' && $filename == ''){
			$path = public_path('uploads/news/'.$result[0]->file_path);
			foreach(glob($path.'/*.*') as $file) {
	    		@\File::delete($file);
			}

			$Otop->delete_row($id);

			return redirect('admin/otop');
		}else{
			$path = public_path('uploads/news/'.$folder.'/'.$filename);
			@\File::delete($path);
			return redirect('admin/otop/edit/'.$id);
		}
	}

	public function select($id = '', $filename = ''){
		$data = array(
			'show_img' => $filename
		);
		$Otop = new Otop;
		$Otop->save_data($data, $id);

		return redirect('admin/otop/edit/'.$id);
	}
}
?>

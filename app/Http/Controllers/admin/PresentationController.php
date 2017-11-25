<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\Presentation;

class PresentationController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['information'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['information'][0]['menu_name'];
    }

	public function index(){
		$Presentation = new Presentation;
		$Presentation = $Presentation->getPresentationAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'presentation' => $Presentation,
		);

		$this->render_view('admin/presentation/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/presentation/form', $data, $this->menu_nav, 1);
	}

	public function edit($id = ''){
		$ActivityNews = new ActivityNews;
		$result = $ActivityNews->getDataById($id);

		$data = array(
			'menu_name' => $this->menu_name,
			'result' => $result,
			'type_form' => 'edit',
		);

		$this->render_view('admin/activity_news/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		try {
			$edit_id = $Requests->get('edit_id', '');
			$file_path = $Requests->get('img_old', '');
			$files = $Requests->file('file_path');
			if($files[0] != NULL){
				if(empty($file_path) || $file_path == ''){
					$file_path = 'activity-'.time();
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
				$ActivityNews = new ActivityNews;
				$ActivityNews->save_data($data);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/activity_news/form');
			}else{
				$data = array(
					"title" => $Requests->get('title', ''),
					"post_date" => $post_date,
					"detail1" => $Requests->get('detail1', ''),
					"file_path" => $file_path,
					"active" => $Requests->get('active', ''),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$ActivityNews = new ActivityNews;
				$ActivityNews->save_data($data, $edit_id);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/activity_news/edit/'.$edit_id);
			}
		} catch (\Exception $e){
			echo $e->getMessage();
		}

	}

	public function delete($id = '', $folder = '', $filename = ''){
		$ActivityNews = new ActivityNews;
		$result = $ActivityNews->getDataById($id);

		if($folder == '' && $filename == ''){
			$path = public_path('uploads/news/'.$result[0]->file_path);
			foreach(glob($path.'/*.*') as $file) {
	    		@\File::delete($file);
			}

			$ActivityNews->delete_row($id);

			return redirect('admin/activity_news');
		}else{
			$path = public_path('uploads/news/'.$folder.'/'.$filename);
			@\File::delete($path);
			return redirect('admin/activity_news/edit/'.$id);
		}
	}

	public function select($id = '', $filename = ''){
		$data = array(
			'show_img' => $filename
		);
		$ActivityNews = new ActivityNews;
		$ActivityNews->save_data($data, $id);

		return redirect('admin/activity_news/edit/'.$id);
	}
}
?>

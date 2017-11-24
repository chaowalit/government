<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\ActivityNews;

class ActivityNewsController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['information'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['information'][0]['menu_name'];
    }

	public function index(){
		$ActivityNews = new ActivityNews;
		$ActivityNews = $ActivityNews->getActivityNewsAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'activity_news' => $ActivityNews,
		);

		$this->render_view('admin/activity_news/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/activity_news/form', $data, $this->menu_nav, 1);
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

		exit;
		$file_path = "";
		if($Requests->file('file_path')){
			$file = $Requests->file('file_path');
			$destinationPath = public_path('uploads/news');
			$fileName = time().'.'.$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$file_path = 'public/uploads/news/'.$fileName;
		}else{
			$file_path = $Requests->get('img_old', '');
		}

		$post_date = "";
		if(!empty($Requests->get('post_date', ''))){
			$temp = explode('-', $Requests->get('post_date', ''));
			$post_date = $temp[2].'-'.$temp[1].'-'.$temp[0].' 00:00:00';
		}
		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"title" => $Requests->get('title', ''),
				"post_date" => $post_date,
				"detail1" => $Requests->get('detail1', ''),
				"file_path" => $file_path,
				"active" => $Requests->get('active', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$ResolutionOfMeeting = new ResolutionOfMeeting;
			$ResolutionOfMeeting->save_data($data);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/resolution_of_meeting/form');
		}else {
			$data = array(
				"title" => $Requests->get('title', ''),
				"post_date" => $post_date,
				"detail1" => $Requests->get('detail1', ''),
				"file_path" => $file_path,
				"active" => $Requests->get('active', ''),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$ResolutionOfMeeting = new ResolutionOfMeeting;
			$ResolutionOfMeeting->save_data($data, $Requests->get('edit_id', ''));

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/resolution_of_meeting/edit/'.$Requests->get('edit_id', ''));
		}

	}

	public function delete($id = ''){
		$ActivityNews = new ActivityNews;
		$result = $ActivityNews->getDataById($id);

		$path = public_path('uploads/news/'.$result[0]->file_path);
		foreach(glob($path.'/*.*') as $file) {
    		@\File::delete($file);
		}

		$ActivityNews->delete_row($id);

		return redirect('admin/activity_news');
	}
}
?>

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\PopupBanner;

class PopupBannerController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['popup_banner'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['popup_banner'][0]['menu_name'];
    }

	public function index(){
		$PopupBanner = new PopupBanner;
		$PopupBanner = $PopupBanner->getPopupBannerAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'popup_banner' => $PopupBanner,
		);

		$this->render_view('admin/popup_banner/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/popup_banner/form', $data, $this->menu_nav, 1);
	}

	public function edit($id = ''){
		$PopupBanner = new PopupBanner;
		$result = $PopupBanner->getDataById($id);

		$data = array(
			'menu_name' => $this->menu_name,
			'result' => $result,
			'type_form' => 'edit',
		);

		$this->render_view('admin/popup_banner/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		try {
			$edit_id = $Requests->get('edit_id', '');
			$image_popup = '';
			if($Requests->file('image_popup')){
				$file = $Requests->file('image_popup');
				$destinationPath = public_path('uploads/banner');
				$fileName = time().'.'.$file->getClientOriginalExtension();
				$file->move($destinationPath, $fileName);
				$image_popup = 'public/uploads/banner/'.$fileName;
			}else{
				$image_popup = $Requests->get('img_old', '');
			}

			//---- save ----//
			$start_date = "";
			if(!empty($Requests->get('start_date', ''))){
				$temp = explode('-', $Requests->get('start_date', ''));
				$start_date = $temp[2].'-'.$temp[1].'-'.$temp[0].' 00:00:00';
			}
			$end_date = "";
			if(!empty($Requests->get('end_date', ''))){
				$temp = explode('-', $Requests->get('end_date', ''));
				$end_date = $temp[2].'-'.$temp[1].'-'.$temp[0].' 23:59:59';
			}

			if($edit_id == ""){
				$data = array(
					"image_popup" => $image_popup,
					"show_every" => $Requests->get('show_every', ''),
					"start_date" => $start_date,
					"end_date" => $end_date,
					"active" => $Requests->get('active', ''),
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$PopupBanner = new PopupBanner;
				$PopupBanner->save_data($data);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/popup_banner/form');
			}else{
				$data = array(
					"image_popup" => $image_popup,
					"show_every" => $Requests->get('show_every', ''),
					"start_date" => $start_date,
					"end_date" => $end_date,
					"active" => $Requests->get('active', ''),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$PopupBanner = new PopupBanner;
				$PopupBanner->save_data($data, $edit_id);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('admin/popup_banner/edit/'.$edit_id);
			}
		} catch (\Exception $e){
			echo $e->getMessage();
		}

	}

	public function delete($id = ''){
		$PopupBanner = new PopupBanner;
		$result = $PopupBanner->getDataById($id);

		if(file_exists(base_path($result[0]->image_popup))){
			@unlink(base_path($result[0]->image_popup));
		}

		$PopupBanner->delete_row($id);

		return redirect('admin/popup_banner');
	}
}
?>

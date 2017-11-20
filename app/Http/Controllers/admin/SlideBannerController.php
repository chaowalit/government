<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\SlideBanner;

class SlideBannerController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['slide_banner'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['slide_banner'][0]['menu_name'];
    }

	public function index(){
		$SlideBanner = new SlideBanner;
		$slide_banner = $SlideBanner->getSlideBannerAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'slide_banner' => $slide_banner,
		);

		$this->render_view('admin/slide_banner/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/slide_banner/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		$img_banner = '';
		if($Requests->file('img_banner')){
			$file = $Requests->file('img_banner');
			$destinationPath = public_path('uploads/banner');
			$fileName = time().'.'.$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$img_banner = 'public/uploads/banner/'.$fileName;
		}else{
			$img_banner = $Requests->get('img_old', '');
		}

		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"img_banner" => $img_banner,
				"text1" => $Requests->get('text1', ''),
				"text2" => $Requests->get('text2', ''),
				"active" => $Requests->get('active', ''),
				"order_number" => $Requests->get('order_number', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$SlideBanner = new SlideBanner;
			$SlideBanner->save_data($data);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/slide_banner/form');
		}else {
			$data = array(
				"img_banner" => $img_banner,
				"text1" => $Requests->get('text1', ''),
				"text2" => $Requests->get('text2', ''),
				"active" => $Requests->get('active', ''),
				"order_number" => $Requests->get('order_number', ''),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$SlideBanner = new SlideBanner;
			$SlideBanner->save_data($data, $Requests->get('edit_id', ''));

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/slide_banner/edit/'.$Requests->get('edit_id', ''));
		}
	}

	public function edit($id = ''){
		$SlideBanner = new SlideBanner;
		$result = $SlideBanner->getDataById($id);
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'edit',
			'result' => $result,
		);

		$this->render_view('admin/slide_banner/form', $data, $this->menu_nav, 1);
	}

	public function delete($id = ''){
		$SlideBanner = new SlideBanner;
		$result = $SlideBanner->getDataById($id);
		if(file_exists(base_path($result[0]->img_banner))){
			@unlink(base_path($result[0]->img_banner));
		}
		$SlideBanner->delete_row($id);

		return redirect('admin/slide_banner');
	}
}
?>

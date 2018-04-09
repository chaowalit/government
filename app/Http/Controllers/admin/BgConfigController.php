<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;

class BgConfigController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['bg_config'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['bg_config'][0]['menu_name'];
    }

	public function index(){
		$data = array(
			'menu_name' => $this->menu_name,
		);

		$this->render_view('admin/bg_config/main', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		if($Requests->file('image_body')){
			if(file_exists(base_path('public/fn/demo1/images/bg_winter.jpg'))){
				@unlink(base_path('public/fn/demo1/images/bg_winter.jpg'));
			}
			$file = $Requests->file('image_body');
			$destinationPath = public_path('fn/demo1/images');
			$fileName = 'bg_winter'.'.'.'jpg'; //$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$image_body = 'public/fn/demo1/images/'.$fileName;
		}

		if($Requests->file('image_footer')){
			if(file_exists(base_path('public/fn/demo1/images/bg-footer.png'))){
				@unlink(base_path('public/fn/demo1/images/bg-footer.png'));
			}
			$file = $Requests->file('image_footer');
			$destinationPath = public_path('fn/demo1/images');
			$fileName = 'bg-footer'.'.'.'png'; //$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$image_footer = 'public/fn/demo1/images/'.$fileName;
		}

		
		$Requests->session()->flash('bg_color', 'success');
		$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
		return redirect('admin/bg_config');
	}
}
?>

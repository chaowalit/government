<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\User;

class UsersController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['user'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['user'][0]['menu_name'];
    }

	public function index(){
		$User = new User;
		$user = $User->getUserAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'user' => $user,
		);

		$this->render_view('admin/user/main', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		$email = $Requests->get('email', '');
		$password = $Requests->get('password', '');
		$user_id = $Requests->get('user_id', '');

		if(trim($email) != '' && trim($password) != ''){
			$data = array(
				"email" => $email,
				"password" => bcrypt($password),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$User = new User;
			$User->save_data($data, $user_id);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/user');
		}else{
			$Requests->session()->flash('bg_color', 'warning');
			$Requests->session()->flash('msg', "ไม่สามารถทำรายการบันทึกข้อมูลได้");
			return redirect('admin/user');
		}
	}
}
?>

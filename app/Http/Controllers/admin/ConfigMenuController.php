<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;

class ConfigMenuController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['config_menu'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['config_menu'][0]['menu_name'];
    }

	public function index(){
		$data = array(
			'menu_name' => $this->menu_name,
		);

		$this->render_view('admin/config_menu/main', $data, $this->menu_nav, 1);
	}
}
?>

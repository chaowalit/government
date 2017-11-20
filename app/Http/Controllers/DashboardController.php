<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\QwcAdminController;

class DashboardController extends QwcAdminController{
	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
    }

	public function index(){
		$data = array(

		);

		$this->render_view('dashboard/dashboard', $data, 'dashboard');
	}
}
?>

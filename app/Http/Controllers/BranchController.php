<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\QwcAdminController;
use App\Models\QwcBranch;

class BranchController extends QwcAdminController{
	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
    }

	public function index(){
		$QwcBranch = new QwcBranch;
		$result = $QwcBranch->getQwcBranchAll();

		$branch = array();
		foreach($result as $val){
			$param = [
				"password" => getPasswordApiV1(),
			];
			$url = $val->url_branch . 'public/api/v1/getCompanyInfo';

			$result = curlPost($url, $param); //json_decode($server_output, true);
			$res = json_decode($result, true);

			if($res['header']['code'] == 200){
				foreach($res['data']['item'] as $val_2){
					$val_2['url_branch'] = $val->url_branch;
					$branch[] = $val_2;
				}
			}
		}

		$data = array(
			"branch" => $branch,
		);
		$this->render_view('branch/main_branch', $data, 'branch');
	}
	public function show_edit_branch(Request $request){

		$data = array(
			"branch" => $request->all(),
		);
		$this->render_view('branch/form_update_branch', $data, 'branch', 1, 2);
	}
	public function update_edit_branch(Request $request){
		$param = [
			"password" => getPasswordApiV1(),
			"id" => $request->get('id', ''),
			"company_name" => $request->get('company_name', ''),
			"branch_no" => $request->get('branch_no', ''),
			"branch_name" => $request->get('branch_name', ''),
			"first_name" => $request->get('first_name', ''),
			"last_name" => $request->get('last_name', ''),
			"address" => $request->get('address', ''),
			"tel" => $request->get('tel', ''),
			"comment" => $request->get('comment', ''),

		];
		$url = $request->get('url_branch', '') . "public/api/v1/updateCompanyInfo";
		$result = curlPost($url, $param);
		$res = json_decode($result, true);

		if($res['header']['code'] == 200){
			$request->session()->flash('status', 200);
			$request->session()->flash('msg', 'ระบบได้ทำการอัพเดตข้อมูลสาขาที่ url : '.$request->get('url_branch', '').'public');
			return redirect('branch');
		}else{
			$request->session()->flash('status', 400);
			$request->session()->flash('msg', 'ระบบไม่สามารถทำการอัพเดตข้อมูลสาขาที่ url : '.$request->get('url_branch', '').'public กรุณาลองใหม่อีกครั้ง');
			return redirect('branch');
		}
	}
	public function update_login_branch(Request $request){
		$param = [
			"password" => getPasswordApiV1(),
			"id" => $request->get('id', ''),
			"email" => $request->get('email', ''),
			"new_password" => $request->get('new_password', ''),
			"set_password_transection" => $request->get('set_password_transection', '0'),
		];
		$url = $request->get('url_branch', '') . "public/api/v1/changePasswordCompany";
		$result = curlPost($url, $param);
		$res = json_decode($result, true);

		if($res['header']['code'] == 200){
			$request->session()->flash('status', 200);
			$request->session()->flash('msg', 'ระบบได้ทำการอัพเดตข้อมูลสาขาที่ url : '.$request->get('url_branch', '').'public');
			return redirect('branch');
		}else{
			$request->session()->flash('status', 400);
			$request->session()->flash('msg', 'ระบบไม่สามารถทำการอัพเดตข้อมูลสาขาที่ url : '.$request->get('url_branch', '').'public กรุณาลองใหม่อีกครั้ง');
			return redirect('branch');
		}
	}
}
?>

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\HistoryDetail;

class HistoryDetailController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['history_detail'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['history_detail'][0]['menu_name'];
    }

	public function index(){
		$HistoryDetail = new HistoryDetail;
		$history_detail = $HistoryDetail->getHistoryDetailAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'history_detail' => $history_detail,
		);

		$this->render_view('admin/history_detail/main', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		$logo_img = '';
		if($Requests->file('logo_img')){
			$file = $Requests->file('logo_img');
			$destinationPath = public_path('uploads/logo');
			$fileName = time().'.'.$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$logo_img = 'public/uploads/logo/'.$fileName;
		}else{
			$logo_img = $Requests->get('logo_old', '');
		}

		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"logo" => $logo_img,
				"detail1" => $Requests->get('detail1', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$HistoryDetail = new HistoryDetail;
			$HistoryDetail->save_data($data);
		}else {
			$data = array(
				"logo" => $logo_img,
				"detail1" => $Requests->get('detail1', ''),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$HistoryDetail = new HistoryDetail;
			$HistoryDetail->save_data($data, $Requests->get('edit_id', ''));
		}

		return redirect('about/history_detail');
	}
}
?>

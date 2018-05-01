<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\ComplainRequest;

class ComplaintController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['complaint'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['complaint'][0]['menu_name'];
    }

	public function index(){
		$ComplainRequest = new ComplainRequest;
		$ComplainRequest = $ComplainRequest->getComplainRequestAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'ComplainRequest' => $ComplainRequest,
		);

		$this->render_view('admin/complaint/main', $data, $this->menu_nav, 1);
	}

	public function delete(Request $Requests, $id = ''){
		$ComplainRequest = new ComplainRequest;
		$ComplainRequest->delete_row($id);
		
		$Requests->session()->flash('bg_color', 'success');
		$Requests->session()->flash('msg', "ทำรายการลบข้อมูล สำเร็จแล้ว");
		return redirect('admin/complaint');
	}
}
?>

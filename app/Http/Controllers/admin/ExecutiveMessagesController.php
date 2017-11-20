<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\ExecutiveMessages;

class ExecutiveMessagesController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['executive_messages'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['executive_messages'][0]['menu_name'];
    }

	public function index(){
		$ExecutiveMessages = new ExecutiveMessages;
		$executive_messages = $ExecutiveMessages->getExecutiveMessagesAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'executive_messages' => $executive_messages,
		);

		$this->render_view('admin/executive_messages/main', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){

		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"detail1" => $Requests->get('detail1', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$ExecutiveMessages = new ExecutiveMessages;
			$ExecutiveMessages->save_data($data);
		}else {
			$data = array(
				"detail1" => $Requests->get('detail1', ''),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$ExecutiveMessages = new ExecutiveMessages;
			$ExecutiveMessages->save_data($data, $Requests->get('edit_id', ''));
		}

		return redirect('about/executive_messages');
	}
}
?>

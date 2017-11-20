<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\ContactUs;

class ContactUsController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['contact_us'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['contact_us'][0]['menu_name'];
    }

	public function index(){
		$ContactUs = new ContactUs;
		$contact_us = $ContactUs->getContactUsAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'contact_us' => $contact_us,
		);

		$this->render_view('admin/contact_us/main', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){

		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"location_name" => $Requests->get('location_name', ''),
				"address" => $Requests->get('address', ''),
				"tel" => $Requests->get('tel', ''),
				"facebook_url" => $Requests->get('facebook_url', ''),
				"email" => $Requests->get('email', ''),
				"fax" => $Requests->get('fax', ''),
				"longitude" => $Requests->get('longitude', ''),
				"latitude" => $Requests->get('latitude', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$ContactUs = new ContactUs;
			$ContactUs->save_data($data);
		}else {
			$data = array(
				"location_name" => $Requests->get('location_name', ''),
				"address" => $Requests->get('address', ''),
				"tel" => $Requests->get('tel', ''),
				"facebook_url" => $Requests->get('facebook_url', ''),
				"email" => $Requests->get('email', ''),
				"fax" => $Requests->get('fax', ''),
				"longitude" => $Requests->get('longitude', ''),
				"latitude" => $Requests->get('latitude', ''),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$ContactUs = new ContactUs;
			$ContactUs->save_data($data, $Requests->get('edit_id', ''));
		}

		return redirect('admin/contact_us');
	}
}
?>

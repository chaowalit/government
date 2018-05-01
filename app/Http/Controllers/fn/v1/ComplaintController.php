<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\ComplainRequest;

class ComplaintController extends FrontMsgController{


	private $contact_us = array();
	private $menu_government_online = array();
	private $staff_structure = array();
	public function __construct()
    {
        parent::__construct();
        $this->contact_us = $this->getContactUs();
        $this->menu_government_online = $this->getMenuNewsGovernmentOnline();
        $this->staff_structure = $this->getMenuStaffStructure();
    }

	public function index(){
		$ContactUs = new ContactUs;
		$contact_us = $ContactUs->getContactUsAll();

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['complaint'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
		);

		return view('fn/'.$this->template.'/complaint/form', $data);
	}

	public function save(Request $Requests){
		$data = array(
				"full_name" => $Requests->get('full_name', ''),
				"thai_id" => $Requests->get('thai_id', ''),
				"age" => $Requests->get('age', ''),
				"sex" => $Requests->get('sex', ''),
				"career" => $Requests->get('career', ''),
				"tel" => $Requests->get('tel', ''),
				"fax" => $Requests->get('fax', ''),
				"email" => $Requests->get('email', ''),
				"address" => $Requests->get('address', ''),
				"title" => $Requests->get('title', ''),
				"detail" => $Requests->get('detail', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
		$ComplainRequest = new ComplainRequest;
		$ComplainRequest->save_data($data);

		$Requests->session()->flash('bg_color', 'success');
		$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
		return redirect('complaint');
	}
}
?>

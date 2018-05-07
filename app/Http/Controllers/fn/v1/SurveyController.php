<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\Survey;

class SurveyController extends FrontMsgController{


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
			'menu_nav' => $this->menu_nav['news_government'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
		);

		return view('fn/'.$this->template.'/survey/form', $data);
	}

	public function save(Request $Requests){
		// echo "<pre>";print_r($_POST);die;
		// validate the user-entered Captcha code when the form is submitted
	    // $code = $Requests->input('CaptchaCode');
	    // $isHuman = captcha_validate($code);

	    // if ($isHuman) {
	      	$data = array(
					"sex" => $Requests->get('sex', ''),
					"age" => $Requests->get('age', ''),
					"career" => $Requests->get('career', ''),
					"data_info_do" => serialize($Requests->get('data_info_do', '')),
					"data_info_at9" => serialize($Requests->get('data_info_at9', '')),
					"data_info_other" => serialize($Requests->get('data_info_other', '')),
					"easy_data" => $Requests->get('easy_data', ''),
					"correct_data" => $Requests->get('correct_data', ''),
					"use_data" => $Requests->get('use_data', ''),
					"people_service" => $Requests->get('people_service', ''),
					"location_easy_use" => $Requests->get('location_easy_use', ''),
					"overview_data" => $Requests->get('overview_data', ''),
					"comments_open_data" => $Requests->get('comments_open_data', ''),
					"comments_other" => $Requests->get('comments_other', ''),
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
			$Survey = new Survey;
			$Survey->save_data($data);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('survey');
	  //   } else {
	  //     	$Requests->session()->flash('bg_color', 'warning');
			// $Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล ไม่สำเร็จ โปรดลองอีกครั้ง");
			// return redirect('complaint');
	  //   }
	}
}
?>

<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\Survey;

class SurveySummaryController extends FrontMsgController{


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

		$Survey = new Survey;
		$temp = $Survey->getComplainRequestFN();
		$summary_survey = array(
			'easy_data' => array(
					'_5' => 0,
					'_4' => 0,
					'_3' => 0,
					'_2' => 0,
					'_1' => 0,
			),
			'correct_data' => array(
					'_5' => 0,
					'_4' => 0,
					'_3' => 0,
					'_2' => 0,
					'_1' => 0,
			),
			'use_data' => array(
					'_5' => 0,
					'_4' => 0,
					'_3' => 0,
					'_2' => 0,
					'_1' => 0,
			),
			'overview_data' => array(
					'_5' => 0,
					'_4' => 0,
					'_3' => 0,
					'_2' => 0,
					'_1' => 0,
			),
			'total' => 0
		);
		foreach ($temp as $key => $value) {
			if(is_int($value->easy_data)){
				$summary_survey['easy_data']['_5'] = $value->easy_data == 5? ++$summary_survey['easy_data']['_5'] : $summary_survey['easy_data']['_5'];
				$summary_survey['easy_data']['_4'] = $value->easy_data == 4? ++$summary_survey['easy_data']['_4'] : $summary_survey['easy_data']['_4'];
				$summary_survey['easy_data']['_3'] = $value->easy_data == 3? ++$summary_survey['easy_data']['_3'] : $summary_survey['easy_data']['_3'];
				$summary_survey['easy_data']['_2'] = $value->easy_data == 2? ++$summary_survey['easy_data']['_2'] : $summary_survey['easy_data']['_2'];
				$summary_survey['easy_data']['_1'] = $value->easy_data == 1? ++$summary_survey['easy_data']['_1'] : $summary_survey['easy_data']['_1'];
			}
			if(is_int($value->correct_data)){
				$summary_survey['correct_data']['_5'] = $value->correct_data == 5? ++$summary_survey['correct_data']['_5'] : $summary_survey['correct_data']['_5'];
				$summary_survey['correct_data']['_4'] = $value->correct_data == 4? ++$summary_survey['correct_data']['_4'] : $summary_survey['correct_data']['_4'];
				$summary_survey['correct_data']['_3'] = $value->correct_data == 3? ++$summary_survey['correct_data']['_3'] : $summary_survey['correct_data']['_3'];
				$summary_survey['correct_data']['_2'] = $value->correct_data == 2? ++$summary_survey['correct_data']['_2'] : $summary_survey['correct_data']['_2'];
				$summary_survey['correct_data']['_1'] = $value->correct_data == 1? ++$summary_survey['correct_data']['_1'] : $summary_survey['correct_data']['_1'];
			}
			if(is_int($value->use_data)){
				$summary_survey['use_data']['_5'] = $value->use_data == 5? ++$summary_survey['use_data']['_5'] : $summary_survey['use_data']['_5'];
				$summary_survey['use_data']['_4'] = $value->use_data == 4? ++$summary_survey['use_data']['_4'] : $summary_survey['use_data']['_4'];
				$summary_survey['use_data']['_3'] = $value->use_data == 3? ++$summary_survey['use_data']['_3'] : $summary_survey['use_data']['_3'];
				$summary_survey['use_data']['_2'] = $value->use_data == 2? ++$summary_survey['use_data']['_2'] : $summary_survey['use_data']['_2'];
				$summary_survey['use_data']['_1'] = $value->use_data == 1? ++$summary_survey['use_data']['_1'] : $summary_survey['use_data']['_1'];
			}
			if(is_int($value->overview_data)){
				$summary_survey['overview_data']['_5'] = $value->overview_data == 5? ++$summary_survey['overview_data']['_5'] : $summary_survey['overview_data']['_5'];
				$summary_survey['overview_data']['_4'] = $value->overview_data == 4? ++$summary_survey['overview_data']['_4'] : $summary_survey['overview_data']['_4'];
				$summary_survey['overview_data']['_3'] = $value->overview_data == 3? ++$summary_survey['overview_data']['_3'] : $summary_survey['overview_data']['_3'];
				$summary_survey['overview_data']['_2'] = $value->overview_data == 2? ++$summary_survey['overview_data']['_2'] : $summary_survey['overview_data']['_2'];
				$summary_survey['overview_data']['_1'] = $value->overview_data == 1? ++$summary_survey['overview_data']['_1'] : $summary_survey['overview_data']['_1'];
			}

			$summary_survey['total'] = ++$summary_survey['total'];
		}
		// echo "<pre>";print_r($summary_survey);die;

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['news_government'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,

			'summary_survey' => $summary_survey,
		);

		return view('fn/'.$this->template.'/survey/summary', $data);
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

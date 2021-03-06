<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\Survey;
use App\Models\ContactUs;

class SurveyController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';
	private $contact_us = array();

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['survey'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['survey'][0]['menu_name'];

        $ContactUs = new ContactUs;
		$this->contact_us = $ContactUs->getContactUsAll();
    }

	public function index(){
		$start_date = isset($_GET['start_date'])? $_GET['start_date'] : date("d-m-Y", strtotime("-1 month"));
		$end_date = isset($_GET['end_date'])? $_GET['end_date'] : date("d-m-Y");
		$summary_survey = $this->summary_survey($start_date, $end_date);
		// echo "<pre>";print_r($summary_survey);
//echo "<pre>";print_r($summary_survey);die;
		$data = array(
			'menu_name' => $this->menu_name,
			'summary_survey' => $summary_survey,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'contact_us' => $this->contact_us,
		);
// echo "<pre>";print_r($this->contact_us);die;
		$this->render_view('admin/survey/main', $data, $this->menu_nav, 1);
	}

	public function export_excel(){
		$start_date = isset($_POST['start_date'])? $_POST['start_date'] : date("d-m-Y", strtotime("-1 month"));
		$end_date = isset($_POST['end_date'])? $_POST['end_date'] : date("d-m-Y");

		$contact_us = $this->contact_us;
		$summary_survey = $this->summary_survey($start_date, $end_date);
		$file_name = 'summary_survey';
		return \Excel::create($file_name, function($excel)
								use($summary_survey, $contact_us){

					$excel->sheet('_1', function($sheet)
					    			use($summary_survey, $contact_us){
					    	$data = array(
					    		// "header" => $header,
					    		"summary_survey" => $summary_survey,
					    		"contact_us" => $contact_us,
				    		);
					        $sheet->loadView('admin.survey.summary_survey', $data);
					    });

				})->download('xls');
	}

	public function summary_survey($start_date = '', $end_date = ''){
		$summary_survey = array(
			'sex' => array(
				'male' => 0,
				'female' => 0,
			),
			'age' => array(
				'<20' => 0,
				'20-30' => 0,
				'30-40' => 0,
				'40>' => 0,
			),
			'career' => array(
				'career_1' => 0,
				'career_2' => 0,
				'career_3' => 0,
				'career_4' => 0,
				'career_5' => 0,
			),
			'data_info_do' => array(
				'data_info_do_1' => 0,
				'data_info_do_2' => 0,
			),
			'data_info_at9' => array(
				'data_info_at9_1' => 0,
				'data_info_at9_2' => 0,
				'data_info_at9_3' => 0,
				'data_info_at9_4' => 0,
				'data_info_at9_5' => 0,
				'data_info_at9_6' => 0,
				'data_info_at9_7' => 0,
				'data_info_at9_8' => 0,
			),
			'data_info_other' => array(
				'data_info_other_1' => 0,
				'data_info_other_2' => 0,
				'data_info_other_3' => 0,
				'data_info_other_4' => 0,
				'data_info_other_5' => 0,
			),
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
			'people_service' => array(
					'_5' => 0,
					'_4' => 0,
					'_3' => 0,
					'_2' => 0,
					'_1' => 0,
			),
			'location_easy_use' => array(
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
		$Survey = new Survey;
		$temp = $Survey->getSurveyAll($start_date, $end_date);
		foreach ($temp as $key => $value) {
			$summary_survey['sex']['male'] = $value->sex == 'male'? ++$summary_survey['sex']['male'] : $summary_survey['sex']['male'];
			$summary_survey['sex']['female'] = $value->sex == 'female'? ++$summary_survey['sex']['female'] : $summary_survey['sex']['female'];

			$summary_survey['age']['<20'] = $value->age == '<20'? ++$summary_survey['age']['<20'] : $summary_survey['age']['<20'];
			$summary_survey['age']['20-30'] = $value->age == '20-30'? ++$summary_survey['age']['20-30'] : $summary_survey['age']['20-30'];
			$summary_survey['age']['30-40'] = $value->age == '30-40'? ++$summary_survey['age']['30-40'] : $summary_survey['age']['30-40'];
			$summary_survey['age']['40>'] = $value->age == '40>'? ++$summary_survey['age']['40>'] : $summary_survey['age']['40>'];

			$summary_survey['career']['career_1'] = $value->career == 'career_1'? ++$summary_survey['career']['career_1'] : $summary_survey['career']['career_1'];
			$summary_survey['career']['career_2'] = $value->career == 'career_2'? ++$summary_survey['career']['career_2'] : $summary_survey['career']['career_2'];
			$summary_survey['career']['career_3'] = $value->career == 'career_3'? ++$summary_survey['career']['career_3'] : $summary_survey['career']['career_3'];
			$summary_survey['career']['career_4'] = $value->career == 'career_4'? ++$summary_survey['career']['career_4'] : $summary_survey['career']['career_4'];
			$summary_survey['career']['career_5'] = $value->career == 'career_5'? ++$summary_survey['career']['career_5'] : $summary_survey['career']['career_5'];

			if(is_array(unserialize($value->data_info_do))){
				$temp = unserialize($value->data_info_do);
				foreach ($temp as $k => $v) {
					if($v == 'data_info_do_1'){
						$summary_survey['data_info_do']['data_info_do_1'] = ++$summary_survey['data_info_do']['data_info_do_1'];
					}else if($v == 'data_info_do_2'){
						$summary_survey['data_info_do']['data_info_do_2'] = ++$summary_survey['data_info_do']['data_info_do_2'];
					}
				}
			}

			if(is_array(unserialize($value->data_info_at9))){
				$temp = unserialize($value->data_info_at9);
				foreach ($temp as $k => $v) {
					if($v == 'data_info_at9_1'){
						$summary_survey['data_info_at9']['data_info_at9_1'] = ++$summary_survey['data_info_at9']['data_info_at9_1'];
					}else if($v == 'data_info_at9_2'){
						$summary_survey['data_info_at9']['data_info_at9_2'] = ++$summary_survey['data_info_at9']['data_info_at9_2'];
					}else if($v == 'data_info_at9_3'){
						$summary_survey['data_info_at9']['data_info_at9_3'] = ++$summary_survey['data_info_at9']['data_info_at9_3'];
					}else if($v == 'data_info_at9_4'){
						$summary_survey['data_info_at9']['data_info_at9_4'] = ++$summary_survey['data_info_at9']['data_info_at9_4'];
					}else if($v == 'data_info_at9_5'){
						$summary_survey['data_info_at9']['data_info_at9_5'] = ++$summary_survey['data_info_at9']['data_info_at9_5'];
					}else if($v == 'data_info_at9_6'){
						$summary_survey['data_info_at9']['data_info_at9_6'] = ++$summary_survey['data_info_at9']['data_info_at9_6'];
					}else if($v == 'data_info_at9_7'){
						$summary_survey['data_info_at9']['data_info_at9_7'] = ++$summary_survey['data_info_at9']['data_info_at9_7'];
					}else if($v == 'data_info_at9_8'){
						$summary_survey['data_info_at9']['data_info_at9_8'] = ++$summary_survey['data_info_at9']['data_info_at9_8'];
					}
				}
			}

			if(is_array(unserialize($value->data_info_other))){
				$temp = unserialize($value->data_info_other);
				foreach ($temp as $k => $v) {
					if($v == 'data_info_other_1'){
						$summary_survey['data_info_other']['data_info_other_1'] = ++$summary_survey['data_info_other']['data_info_other_1'];
					}else if($v == 'data_info_other_2'){
						$summary_survey['data_info_other']['data_info_other_2'] = ++$summary_survey['data_info_other']['data_info_other_2'];
					}else if($v == 'data_info_other_3'){
						$summary_survey['data_info_other']['data_info_other_3'] = ++$summary_survey['data_info_other']['data_info_other_3'];
					}else if($v == 'data_info_other_4'){
						$summary_survey['data_info_other']['data_info_other_4'] = ++$summary_survey['data_info_other']['data_info_other_4'];
					}else if($v == 'data_info_other_5'){
						$summary_survey['data_info_other']['data_info_other_5'] = ++$summary_survey['data_info_other']['data_info_other_5'];
					}
				}
			}


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
			if(is_int($value->people_service)){
				$summary_survey['people_service']['_5'] = $value->people_service == 5? ++$summary_survey['people_service']['_5'] : $summary_survey['people_service']['_5'];
				$summary_survey['people_service']['_4'] = $value->people_service == 4? ++$summary_survey['people_service']['_4'] : $summary_survey['people_service']['_4'];
				$summary_survey['people_service']['_3'] = $value->people_service == 3? ++$summary_survey['people_service']['_3'] : $summary_survey['people_service']['_3'];
				$summary_survey['people_service']['_2'] = $value->people_service == 2? ++$summary_survey['people_service']['_2'] : $summary_survey['people_service']['_2'];
				$summary_survey['people_service']['_1'] = $value->people_service == 1? ++$summary_survey['people_service']['_1'] : $summary_survey['people_service']['_1'];
			}
			if(is_int($value->location_easy_use)){
				$summary_survey['location_easy_use']['_5'] = $value->location_easy_use == 5? ++$summary_survey['location_easy_use']['_5'] : $summary_survey['location_easy_use']['_5'];
				$summary_survey['location_easy_use']['_4'] = $value->location_easy_use == 4? ++$summary_survey['location_easy_use']['_4'] : $summary_survey['location_easy_use']['_4'];
				$summary_survey['location_easy_use']['_3'] = $value->location_easy_use == 3? ++$summary_survey['location_easy_use']['_3'] : $summary_survey['location_easy_use']['_3'];
				$summary_survey['location_easy_use']['_2'] = $value->location_easy_use == 2? ++$summary_survey['location_easy_use']['_2'] : $summary_survey['location_easy_use']['_2'];
				$summary_survey['location_easy_use']['_1'] = $value->location_easy_use == 1? ++$summary_survey['location_easy_use']['_1'] : $summary_survey['location_easy_use']['_1'];
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
		return $summary_survey;
	}
}
?>

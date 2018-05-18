<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\Survey;

class SurveyController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['survey'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['survey'][0]['menu_name'];
    }

	public function index(){
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
		$temp = $Survey->getSurveyAll();
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
		echo "<pre>";print_r($summary_survey);die;

		$data = array(
			'menu_name' => $this->menu_name,
		);

		$this->render_view('admin/survey/main', $data, $this->menu_nav, 1);
	}

	
}
?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\QwcAdminController;
use App\Models\QwcBranch;

class ReportController extends QwcAdminController{
	private $text_month = array(
			"01" => "มกราคม",
			"02" => "กุมภาพันธ์",
			"03" => "มีนาคม",
			"04" => "เมษายน",
			"05" => "พฤษภาคม",
			"06" => "มิถุนายน",
			"07" => "กรกฎาคม",
			"08" => "สิงหาคม",
			"09" => "กันยายน",
			"10" => "ตุลาคม",
			"11" => "พฤศจิกายน",
			"12" => "ธันวาคม",
	);
	private $type_report = array(
			"credit" => "แบบวงเงิน",
			"debit" => "แบบรายคอร์ส",
	);

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
    }
    public function show_month(){
    	$data = array();
		$this->render_view('report/show_month', $data, 'report', 1);
    }
    public function show_year(){
    	$data = array();
		$this->render_view('report/show_year', $data, 'report', 2);
    }

    public function gen_report_month(Request $request){
    	$month_report = $this->text_month[$request->get('month_report', '')];
		$year_report = $request->get('year_report', '');
		$type_report = $this->type_report[$request->get('type_report', '')];

    	$QwcBranch = new QwcBranch;
		$result_branch = $QwcBranch->getQwcBranchAll();

		$branch = array();
		foreach($result_branch as $val){
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

		if($request->get("type_report", "") == "credit"){
			$file_name = "รายงานการตัดคอร์สแบบวงเงิน ประจำเดือน ". $month_report ." ".$year_report . " รวมทุกสาขา";
			return \Excel::create($file_name, function($excel)
								use($branch, $month_report, $year_report, $type_report, $request){
					foreach ($branch as $key => $value) {
						$excel->sheet($value['branch_name'], function($sheet)
					    			use($month_report, $year_report, $type_report, $request, $key, $value){

					       $header = "รายงานการตัดคอร์สแบบวงเงิน ประจำเดือน ". $month_report ." ".$year_report . " รวมทุกสาขา";

					       $url = $value['url_branch'].'api/v1/req_report_for_month_by_credit?month_report='.$request->get('month_report', '').'&year_report='.$year_report;
					       
					       $result_get = curlGet($url); //json_decode($server_output, true);
							$res_report = json_decode($result_get, true);
					       if($res_report['header']['code'] == 200){
					       		$res = isset($res_report['data']['item'])? $res_report['data']['item']:[];
					       }else{
					       		$res = [];
					       }
					    	//dd($res);
					    	$data = array(
					    		"header" => $header,
					    		"res" => $res,
				    		);
					        $sheet->loadView('report.template_credit', $data);
					    });
					}

				})->download('xls');
		}else if($request->get("type_report", "") == "debit"){
			//dd($request->all());
			$file_name = "รายงานการตัดคอร์สแบบรายคอร์ส ประจำเดือน ". $month_report ." ".$year_report . " รวมทุกสาขา";
			return \Excel::create($file_name, function($excel)
								use($branch, $month_report, $year_report, $type_report, $request){
					foreach ($branch as $key => $value) {
						$excel->sheet($value['branch_name'], function($sheet)
					    			use($month_report, $year_report, $type_report, $request, $key, $value){

					       $header = "รายงานการตัดคอร์สแบบรายคอร์ส ประจำเดือน ". $month_report ." ".$year_report . " รวมทุกสาขา";

					       $url = $value['url_branch'].'api/v1/req_report_for_month_by_debit?month_report='.$request->get('month_report', '').'&year_report='.$year_report;
					       
					       $result_get = curlGet($url); //json_decode($server_output, true);
							$res_report = json_decode($result_get, true);
					       if($res_report['header']['code'] == 200){
					       		$res = isset($res_report['data']['item'])? $res_report['data']['item']:[];
					       }else{
					       		$res = [];
					       }
					    	//dd($res);
					    	$data = array(
					    		"header" => $header,
					    		"res" => $res,
				    		);
					        $sheet->loadView('report.template_debit', $data);
					    });
					}

				})->download('xls');
		}else{
			echo "Error";
		}

    }
    public function gen_report_year(Request $request){
    	//$month_report = $this->text_month[$request->get('month_report', '')];
		$year_report = $request->get('year_report', '');
		$type_report = $this->type_report[$request->get('type_report', '')];

    	$QwcBranch = new QwcBranch;
		$result_branch = $QwcBranch->getQwcBranchAll();

		$branch = array();
		foreach($result_branch as $val){
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

		if($request->get("type_report", "") == "credit"){
			$file_name = "รายงานการตัดคอร์สแบบวงเงิน ประจำปี " ." ".$year_report . " รวมทุกสาขา";
			return \Excel::create($file_name, function($excel)
								use($branch, $year_report, $type_report, $request){
					foreach ($branch as $key => $value) {
						$excel->sheet($value['branch_name'], function($sheet)
					    			use($year_report, $type_report, $request, $key, $value){

					       $header = "รายงานการตัดคอร์สแบบวงเงิน ประจำปี " ." ".$year_report . " รวมทุกสาขา";

					       $url = $value['url_branch'].'api/v1/req_report_for_year_by_credit?year_report='.$year_report;
					       
					       $result_get = curlGet($url); //json_decode($server_output, true);
							$res_report = json_decode($result_get, true);
					       if($res_report['header']['code'] == 200){
					       		$res = isset($res_report['data']['item'])? $res_report['data']['item']:[];
					       }else{
					       		$res = [];
					       }
					    	//dd($res);
					    	$data = array(
					    		"header" => $header,
					    		"res" => $res,
				    		);
					        $sheet->loadView('report.template_credit', $data);
					    });
					}

				})->download('xls');
		}else if($request->get("type_report", "") == "debit"){
			$file_name = "รายงานการตัดคอร์สแบบรายคอร์ส ประจำปี "." ".$year_report . " รวมทุกสาขา";
			return \Excel::create($file_name, function($excel)
								use($branch, $year_report, $type_report, $request){
					foreach ($branch as $key => $value) {
						$excel->sheet($value['branch_name'], function($sheet)
					    			use($year_report, $type_report, $request, $key, $value){

					       $header = "รายงานการตัดคอร์สแบบรายคอร์ส ประจำปี " ." ".$year_report . " รวมทุกสาขา";

					       $url = $value['url_branch'].'api/v1/req_report_for_year_by_debit?year_report='.$year_report;
					       
					       $result_get = curlGet($url); //json_decode($server_output, true);
							$res_report = json_decode($result_get, true);
					       if($res_report['header']['code'] == 200){
					       		$res = isset($res_report['data']['item'])? $res_report['data']['item']:[];
					       }else{
					       		$res = [];
					       }
					    	//dd($res);
					    	$data = array(
					    		"header" => $header,
					    		"res" => $res,
				    		);
					        $sheet->loadView('report.template_debit', $data);
					    });
					}

				})->download('xls');
		}else{
			echo "Error";
		}
    }
}
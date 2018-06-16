<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\ComplainRequest;

class SummaryComplaintController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['summary_complaint'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['summary_complaint'][0]['menu_name'];
    }

	public function index(){

		$start_date = isset($_GET['start_date'])? $_GET['start_date'] : date("d-m-Y", strtotime("-1 month"));
		$end_date = isset($_GET['end_date'])? $_GET['end_date'] : date("d-m-Y");

		$ComplainRequest = $this->summary_complaint($start_date, $end_date);
		$data = array(
			'menu_name' => $this->menu_name,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'ComplainRequest' => $ComplainRequest,
		);

		$this->render_view('admin/summary_complaint/main', $data, $this->menu_nav, 1);
	}

	public function summary_complaint($start_date, $end_date){
		$summary_complaint = array(
			'sex' => array(
				'male' => 0,
				'female' => 0,
			),
			'total' => 0
		);
		$ComplainRequest = new ComplainRequest;
		$ComplainRequest = $ComplainRequest->getSearchComplainRequestAll($start_date, $end_date);
		
		foreach ($ComplainRequest as $key => $value) {
			$summary_complaint['sex']['male'] = $value->sex == 'ชาย'? ++$summary_complaint['sex']['male'] : $summary_complaint['sex']['male'];
			$summary_complaint['sex']['female'] = $value->sex == 'หญิง'? ++$summary_complaint['sex']['female'] : $summary_complaint['sex']['female'];

			$summary_complaint['total'] = ++$summary_complaint['total'];
		}

		// echo "<pre>";print_r($summary_complaint);die;
		return $summary_complaint;
	}

}
?>

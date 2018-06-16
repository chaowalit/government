<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\StatisticWebsite;

class StatisticController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['statistic'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['statistic'][0]['menu_name'];
    }

	public function index(){
		$start_date = isset($_GET['start_date'])? $_GET['start_date'] : date("d-m-Y", strtotime("-1 month"));
		$end_date = isset($_GET['end_date'])? $_GET['end_date'] : date("d-m-Y");

		$StatisticWebsite = new StatisticWebsite;
		$visit_website = $StatisticWebsite->getStatisticWebsiteAll($start_date, $end_date);

		$data = array(
			'menu_name' => $this->menu_name,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'visit_website' => $visit_website,
		);

		$this->render_view('admin/statistic/main', $data, $this->menu_nav, 1);
	}

	function get_visitor_ip() {
	    $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	        $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	 
	    return $ipaddress;
	}

}
?>

<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\Information;

class SearchController extends FrontMsgController{

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
		$result = array();
		$search = trim($_GET['search']);
		if(!empty($search)){
			$Information = new Information;
			$info = $Information->getInformationSearchFN($search);
			$result['information'] = $info;
		}

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'contact_us' => $this->contact_us,
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'result' => $result,
		);

		return view('fn/'.$this->template.'/main/result_search', $data);
	}
}
?>

<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\MissionVision;

class MissionVisionController extends FrontMsgController{

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

		$MissionVision = new MissionVision;
		$missio_vision = $MissionVision->getMissionVisionAll();

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['about'],
			'menu_l1' => '2',
			'menu_l2' => '1',
			'contact_us' => $this->contact_us,
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'missio_vision' => $missio_vision,
		);

		return view('fn/'.$this->template.'/about/mission_vision', $data);
	}
}
?>

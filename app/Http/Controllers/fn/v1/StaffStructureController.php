<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\StaffStructure;
use App\Models\StaffStructureInfo;

class StaffStructureController extends FrontMsgController{


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

	public function show($id = ''){
		$StaffStructure = new StaffStructure;
		$head_name = $StaffStructure->getDataById($id)[0]->sub_menu_name;
		$role = $StaffStructure->getDataById($id)[0]->role;
		$StaffStructureInfo = new StaffStructureInfo;
		$staff_structure_info = $StaffStructureInfo->getDataByStaffStructureId($id);

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['about'],
			'menu_l1' => '4',
			'menu_l2' => $id,
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'head_name' => $head_name,
			'role' => $role,
			'staff_structure_info' => $staff_structure_info,
		);

		return view('fn/'.$this->template.'/staff_structure/main', $data);
	}
}
?>

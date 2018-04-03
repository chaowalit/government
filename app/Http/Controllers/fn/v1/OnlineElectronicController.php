<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\OnlineDataSection7;
use App\Models\OnlineDataSection7Info;
use App\Models\OnlineDataSection9;
use App\Models\OnlineDataSection9Info;
use App\Models\OnlineContractOther;
use App\Models\OnlineContractOtherInfo;
use App\Models\OnlineDocumentOtherNeccessary;
use App\Models\OnlineDocumentOtherNeccessaryInfo;
use App\Models\OnlineDocumentInteresting;
use App\Models\OnlineDocumentInterestingInfo;

class OnlineElectronicController extends FrontMsgController{


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

		$OnlineDataSection7 = new OnlineDataSection7;
		$Section7 = $OnlineDataSection7->getInfoOnlineDataSection7All();
		$OnlineDataSection7Info = new OnlineDataSection7Info;
		$Section7Info = $OnlineDataSection7Info->getOnlineDataSection7InfoAll();

		$OnlineDataSection9 = new OnlineDataSection9;
		$Section9 = $OnlineDataSection9->getInfoOnlineDataSection9All();
		$OnlineDataSection9Info = new OnlineDataSection9Info;
		$Section9Info = $OnlineDataSection9Info->getOnlineDataSection9InfoAll();

		$OnlineContractOther = new OnlineContractOther;
		$ContractOther = $OnlineContractOther->getInfoOnlineContractOtherAll();
		$OnlineContractOtherInfo = new OnlineContractOtherInfo;
		$ContractOtherInfo = $OnlineContractOtherInfo->getOnlineContractOtherInfoAll();

		$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
		$OtherNeccessary = $OnlineDocumentOtherNeccessary->getInfoOnlineDocumentOtherNeccessaryAll();
		$OnlineDocumentOtherNeccessaryInfo = new OnlineDocumentOtherNeccessaryInfo;
		$OtherNeccessaryInfo = $OnlineDocumentOtherNeccessaryInfo->getOnlineDocumentOtherNeccessaryInfoAll();

		$OnlineDocumentInteresting = new OnlineDocumentInteresting;
		$DocumentInteresting = $OnlineDocumentInteresting->getInfoOnlineDocumentInterestingAll();
		$OnlineDocumentInterestingInfo = new OnlineDocumentInterestingInfo;
		$DocumentInterestingInfo = $OnlineDocumentInterestingInfo->getOnlineDocumentInterestingInfoAll();

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['news_government'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'Section7' => $Section7,
			'Section7Info' => $Section7Info,
			'Section9' => $Section9,
			'Section9Info' => $Section9Info,
			'ContractOther' => $ContractOther,
			'ContractOtherInfo' => $ContractOtherInfo,
			'OtherNeccessary' => $OtherNeccessary,
			'OtherNeccessaryInfo' => $OtherNeccessaryInfo,
			'DocumentInteresting' => $DocumentInteresting,
			'DocumentInterestingInfo' => $DocumentInterestingInfo,
		);

		return view('fn/'.$this->template.'/news_government/online_electronic', $data);
	}

	public function sub_online_electronic($type = '', $id = ''){
		if($type == 'online_data_section_7'){
			$OnlineDataSection7 = new OnlineDataSection7;
			$Section7 = $OnlineDataSection7->getInfoOnlineDataSection7All();
			$OnlineDataSection7Info = new OnlineDataSection7Info;
			$Section7Info = $OnlineDataSection7Info->getOnlineDataSection7InfoAll();

			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['news_government'],
				'menu_l1' => '2',
				'menu_l2' => $id,
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,
				'news_online_type' => $Section7,
				'news_online_info' => $Section7Info,
				'id_selected' => $id,
				'main_menu_name' => \Config::get('config_memu.main_4.level_2'),//"ข้อมูลข่าวสารตามมาตรา 7",
			);
		}else if($type == 'online_data_section_9'){
			$OnlineDataSection9 = new OnlineDataSection9;
			$Section9 = $OnlineDataSection9->getInfoOnlineDataSection9All();
			$OnlineDataSection9Info = new OnlineDataSection9Info;
			$Section9Info = $OnlineDataSection9Info->getOnlineDataSection9InfoAll();

			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['news_government'],
				'menu_l1' => '3',
				'menu_l2' => $id,
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,
				'news_online_type' => $Section9,
				'news_online_info' => $Section9Info,
				'id_selected' => $id,
				'main_menu_name' => \Config::get('config_memu.main_4.level_3'),//"ข้อมูลข่าวสารตามมาตรา 9",
			);
		}else if($type == 'online_contract_other'){
			$OnlineContractOther = new OnlineContractOther;
			$ContractOther = $OnlineContractOther->getInfoOnlineContractOtherAll();
			$OnlineContractOtherInfo = new OnlineContractOtherInfo;
			$ContractOtherInfo = $OnlineContractOtherInfo->getOnlineContractOtherInfoAll();

			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['news_government'],
				'menu_l1' => '4',
				'menu_l2' => $id,
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,
				'news_online_type' => $ContractOther,
				'news_online_info' => $ContractOtherInfo,
				'id_selected' => $id,
				'main_menu_name' => \Config::get('config_memu.main_4.level_4'),//"จัดซื้อจัดจ้าง/การเงิน",
			);
		}else if($type == 'other_neccessary'){
			$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
			$OtherNeccessary = $OnlineDocumentOtherNeccessary->getInfoOnlineDocumentOtherNeccessaryAll();
			$OnlineDocumentOtherNeccessaryInfo = new OnlineDocumentOtherNeccessaryInfo;
			$OtherNeccessaryInfo = $OnlineDocumentOtherNeccessaryInfo->getOnlineDocumentOtherNeccessaryInfoAll();

			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['news_government'],
				'menu_l1' => '5',
				'menu_l2' => $id,
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,
				'news_online_type' => $OtherNeccessary,
				'news_online_info' => $OtherNeccessaryInfo,
				'id_selected' => $id,
				'main_menu_name' => \Config::get('config_memu.main_4.level_5'), //"สรุปรายงาน",
			);
		}else if($type == 'document_interesting'){
			$OnlineDocumentInteresting = new OnlineDocumentInteresting;
			$DocumentInteresting = $OnlineDocumentInteresting->getInfoOnlineDocumentInterestingAll();
			$OnlineDocumentInterestingInfo = new OnlineDocumentInterestingInfo;
			$DocumentInterestingInfo = $OnlineDocumentInterestingInfo->getOnlineDocumentInterestingInfoAll();

			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['news_government'],
				'menu_l1' => '6',
				'menu_l2' => $id,
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,
				'news_online_type' => $DocumentInteresting,
				'news_online_info' => $DocumentInterestingInfo,
				'id_selected' => $id,
				'main_menu_name' => \Config::get('config_memu.main_4.level_6'),//"ข้อมูลข่าวสารอื่นๆ",
			);
		}

		return view('fn/'.$this->template.'/news_government/sub_online_electronic', $data);
	}
}
?>

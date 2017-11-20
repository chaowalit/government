<?php

namespace App\Http\Controllers\fn;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\HistoryDetail;
use App\Models\OnlineDataSection7;
use App\Models\OnlineDataSection9;
use App\Models\OnlineContractOther;
use App\Models\OnlineDocumentOtherNeccessary;
use App\Models\OnlineDocumentInteresting;
use App\Models\StaffStructure;

class FrontMsgController extends Controller
{
	protected $menu_nav = array(
		'index' => 'index',
		'about' => 'about',
		'contact_us' => 'contact_us',
		'news_government' => 'news_government',
	);

	protected $template = '';

	public function __construct()
    {
        $this->template = env('TEMPLATE', 'demo1');
    }

    public function getContactUs(){
    	$ContactUs = new ContactUs;
		$contact_us = $ContactUs->getContactUsAll();
		return $contact_us;
    }

    public function getLogo(){
    	$HistoryDetail = new HistoryDetail;
		$history_detail = $HistoryDetail->getHistoryDetailAll();
		return isset($history_detail[0]->logo)? $history_detail[0]->logo:'';
    }

    public function getMenuNewsGovernmentOnline(){
    	$OnlineDataSection7 = new OnlineDataSection7;
    	$online_data_section_7 = $OnlineDataSection7->getInfoOnlineDataSection7All();
    	$OnlineDataSection9 = new OnlineDataSection9;
    	$online_data_section_9 = $OnlineDataSection9->getInfoOnlineDataSection9All();
    	$OnlineContractOther = new OnlineContractOther;
    	$online_contract_other = $OnlineContractOther->getInfoOnlineContractOtherAll();
    	$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
    	$other_neccessary = $OnlineDocumentOtherNeccessary->getInfoOnlineDocumentOtherNeccessaryAll();
    	$OnlineDocumentInteresting = new OnlineDocumentInteresting;
    	$document_interesting = $OnlineDocumentInteresting->getInfoOnlineDocumentInterestingAll();

    	$menu_news_government = array(
			'online_data_section_7' => $online_data_section_7,
			'online_data_section_9' => $online_data_section_9,
			'online_contract_other' => $online_contract_other,
			'other_neccessary' => $other_neccessary,
			'document_interesting' => $document_interesting,
    	);

    	// จัดซื้อจัดจ้าง/การเงิน <!-- สัญญาอื่นๆ -->
    	// สรุปรายงาน <!-- เอกสารอื่นๆที่ต้องรายงาน -->
    	// ข้อมูลข่าวสารอื่นๆ  <!--ข้อมูลข่าวสารที่น่าสนใจ-->
    	return $menu_news_government;
    }

    public function getMenuStaffStructure(){
        $StaffStructure = new StaffStructure;
        $staff_structure = $StaffStructure->getInfoStaffStructureAll();
        return $staff_structure;
    }
}
?>

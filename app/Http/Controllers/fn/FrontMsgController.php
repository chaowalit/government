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
use App\Models\PopupBanner;
use App\Models\StatisticWebsite;
use Cookie;

class FrontMsgController extends Controller
{
	protected $menu_nav = array(
		'index' => 'index',
		'about' => 'about',
		'contact_us' => 'contact_us',
		'news_government' => 'news_government',
        'complaint' => 'complaint',
	);

	protected $template = '';

	public function __construct()
    {
        $this->template = env('TEMPLATE', 'demo1');
        $this->add_visitor_website();
        $this->r_redirect_popup();
    }

    public function r_redirect_popup(){
        $PopupBanner = new PopupBanner;
        $check_popup = $PopupBanner->getPopupBannerAllFN();
        if(count($check_popup) == 1){
            if(!Cookie::get('popup_banner')){
                \Redirect::to('screen')->send();
            }
        }
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

    public function add_visitor_website(){
        $ip = $this->get_visitor_ip();
        $StatisticWebsite = new StatisticWebsite;
        $check_visit = $StatisticWebsite->checkStatisticWebsiteExiting(date("d-m-Y"), date("d-m-Y"), $ip);
        
        if(count($check_visit) == 0){
            $data = array(
                "client_ip" => $ip,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            );
            $StatisticWebsite->save_data($data);
        }
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

<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\SlideBanner;
use App\Models\Information;
use App\Models\PurchaseNews;
use App\Models\CalculateMiddlePrice;
use App\Models\ActivityNews;
use App\Models\Presentation;
use App\Models\ResolutionOfMeeting;
use App\Models\Landmarks;
use App\Models\Otop;
use App\Models\TransferNews;
use App\Models\OtherLink;
use App\Models\VdoYoutube;

class IndexController extends FrontMsgController{

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
		$SlideBanner = new SlideBanner;
		$slide_banner = $SlideBanner->getSlideBannerAllFn();

		$Information = new Information;
		$information = $Information->getInformationAllFN();

		$PurchaseNews = new PurchaseNews;
		$purchase_news = $PurchaseNews->getPurchaseNewsAllFN();

		$CalculateMiddlePrice = new CalculateMiddlePrice;
		$calculate_middle_price = $CalculateMiddlePrice->getCalculateMiddlePriceAllFN();

		$ActivityNews = new ActivityNews;
		$activity_news = $ActivityNews->getActivityNewsAllFN();

		$Presentation = new Presentation;
		$presentation = $Presentation->getPresentationAllFN();

		$ResolutionOfMeeting = new ResolutionOfMeeting;
		$resolution_of_meeting = $ResolutionOfMeeting->getResolutionOfMeetingAllFN();

		$Landmarks = new Landmarks;
		$landmarks = $Landmarks->getLandmarksAllFN();

		$Otop = new Otop;
		$otop = $Otop->getOtopAllFN();

		$TransferNews = new TransferNews;
		$transfer_news = $TransferNews->getTransferNewsAllFN();

		$OtherLink = new OtherLink;
		$other_link = $OtherLink->getOtherLinkAllFN();

		$VdoYoutube = new VdoYoutube;
		$vdo_youtube = $VdoYoutube->getVdoYoutubeAll();

		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,

			'slide_banner' => $slide_banner,
			'information' => $information,
			'purchase_news' => $purchase_news,
			'calculate_middle_price' => $calculate_middle_price,
			'activity_news' => $activity_news,
			'presentation' => $presentation,
			'resolution_of_meeting' => $resolution_of_meeting,
			'landmarks' => $landmarks,
			'otop' => $otop,
			'transfer_news' => $transfer_news,
			'other_link' => $other_link,
			'vdo_youtube' => $vdo_youtube,
		);

		return view('fn/'.$this->template.'/main/index', $data);
	}

	public function informationDetail($id = ''){
		$Information = new Information;
		$information = $Information->getDataById($id);
		$informationAll = $Information->getInformationAllFN();
		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'information' => $information,
			'informationAll' => $informationAll,
		);
		return view('fn/'.$this->template.'/main/information', $data);
	}

	public function activityDetail($id = ''){
		$ActivityNews = new ActivityNews;
		$activity_news_all = $ActivityNews->getActivityNewsAllFN();
		$activity_news = $ActivityNews->getDataById($id);
		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'activity_news' => $activity_news,
			'activity_news_all' => $activity_news_all,
		);
		return view('fn/'.$this->template.'/main/activity', $data);
	}

	public function presentationDetail($id = ''){
		$Presentation = new Presentation;
		$presentation_all = $Presentation->getPresentationAllFN();
		$presentation = $Presentation->getDataById($id);
		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'presentation' => $presentation,
			'presentation_all' => $presentation_all,
		);
		return view('fn/'.$this->template.'/main/presentation', $data);
	}

	public function landmarksDetail($id = ''){
		$Landmarks = new Landmarks;
		$landmarks_all = $Landmarks->getLandmarksAllFN();
		$landmarks = $Landmarks->getDataById($id);
		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'landmarks' => $landmarks,
			'landmarks_all' => $landmarks_all,
		);
		return view('fn/'.$this->template.'/main/landmarks', $data);
	}

	public function otopDetail($id = ''){
		$Otop = new Otop;
		$otop_all = $Otop->getOtopAllFN();
		$otop = $Otop->getDataById($id);
		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'otop' => $otop,
			'otop_all' => $otop_all,
		);
		return view('fn/'.$this->template.'/main/otop', $data);
	}
}
?>

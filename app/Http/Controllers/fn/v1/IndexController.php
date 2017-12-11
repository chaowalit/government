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
		);

		return view('fn/'.$this->template.'/main/index', $data);
	}
}
?>

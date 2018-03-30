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
		$vdo_youtube = $VdoYoutube->getVdoYoutubeAllFN();

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

	public function vdoYoutubeDetail($id = ''){
		$VdoYoutube = new VdoYoutube;
		$vdo_youtube_all = $VdoYoutube->getVdoYoutubeAll();
		$vdo_youtube = $VdoYoutube->getDataById($id);
		$data = array(
			'template' => $this->template,
			'menu_nav' => $this->menu_nav['index'],
			'menu_l1' => '1',
			'menu_l2' => '1',
			'logo_url' => $this->getLogo(),
			'staff_structure' => $this->staff_structure,
			'menu_government_online' => $this->menu_government_online,
			'contact_us' => $this->contact_us,
			'vdo_youtube' => $vdo_youtube,
			'vdo_youtube_all' => $vdo_youtube_all,
		);
		return view('fn/'.$this->template.'/main/vdo_youtube', $data);
	}

	public function newsSearchAll($type = ''){
		if($type == 'information'){
			$Information = new Information;
			$informationAll = $Information->getInformationAllFN(999);
			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['index'],
				'menu_l1' => '1',
				'menu_l2' => '1',
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,

				'informationAll' => $informationAll,
			);
			return view('fn/'.$this->template.'/main/information_all', $data);
		}else if($type == 'purchase_news'){
			$PurchaseNews = new PurchaseNews;
			$purchase_news = $PurchaseNews->getPurchaseNewsAllFN(999);
			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['index'],
				'menu_l1' => '1',
				'menu_l2' => '1',
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,

				'purchase_news' => $purchase_news,
			);
			return view('fn/'.$this->template.'/main/purchase_news_all', $data);
		}else if($type == "calculate_middle_price"){
			$CalculateMiddlePrice = new CalculateMiddlePrice;
			$calculate_middle_price = $CalculateMiddlePrice->getCalculateMiddlePriceAllFN(999);
			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['index'],
				'menu_l1' => '1',
				'menu_l2' => '1',
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,

				'calculate_middle_price' => $calculate_middle_price,
			);
			return view('fn/'.$this->template.'/main/calculate_middle_price_all', $data);
		}else if($type == "activity_news"){
			$ActivityNews = new ActivityNews;
			$activity_news = $ActivityNews->getActivityNewsAllFN(999);
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
			);
			return view('fn/'.$this->template.'/main/activity_news_all', $data);
		}else if($type == "presentation"){
			$Presentation = new Presentation;
			$presentation = $Presentation->getPresentationAllFN(999);
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
			);
			return view('fn/'.$this->template.'/main/presentation_all', $data);
		}else if($type == "resolution_of_meeting"){
			$ResolutionOfMeeting = new ResolutionOfMeeting;
			$resolution_of_meeting = $ResolutionOfMeeting->getResolutionOfMeetingAllFN(999);
			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['index'],
				'menu_l1' => '1',
				'menu_l2' => '1',
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,

				'resolution_of_meeting' => $resolution_of_meeting,
			);
			return view('fn/'.$this->template.'/main/resolution_of_meeting_all', $data);
		}else if($type == "vdo_youtube"){
			$VdoYoutube = new VdoYoutube;
			$vdo_youtube = $VdoYoutube->getVdoYoutubeAllFN(999);
			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['index'],
				'menu_l1' => '1',
				'menu_l2' => '1',
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,

				'vdo_youtube' => $vdo_youtube,
			);
			return view('fn/'.$this->template.'/main/vdo_youtube_all', $data);
		}else if($type == "landmarks"){
			$Landmarks = new Landmarks;
			$landmarks = $Landmarks->getLandmarksAllFN(999);
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
			);
			return view('fn/'.$this->template.'/main/landmarks_all', $data);
		}else if($type == "otop"){
			$Otop = new Otop;
			$otop = $Otop->getOtopAllFN(999);
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
			);
			return view('fn/'.$this->template.'/main/otop_all', $data);
		}else if($type == "transfer_news"){
			$TransferNews = new TransferNews;
			$transfer_news = $TransferNews->getTransferNewsAllFN(999);
			$data = array(
				'template' => $this->template,
				'menu_nav' => $this->menu_nav['index'],
				'menu_l1' => '1',
				'menu_l2' => '1',
				'logo_url' => $this->getLogo(),
				'staff_structure' => $this->staff_structure,
				'menu_government_online' => $this->menu_government_online,
				'contact_us' => $this->contact_us,

				'transfer_news' => $transfer_news,
			);
			return view('fn/'.$this->template.'/main/transfer_news_all', $data);
		}else{
			echo "error page 404";
			die;
		}
	}
}
?>

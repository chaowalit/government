<?php

namespace App\Http\Controllers\fn\v1;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Controllers\fn\FrontMsgController;
use App\Models\ContactUs;
use App\Models\PopupBanner;
use Cookie;

class FirstController extends Controller{

	public function __construct()
    {

    }

	public function index(){
		$PopupBanner = new PopupBanner;
		$popup = $PopupBanner->getPopupBannerAllFN();
		if(count($popup) == 0){
			return redirect('/');
		}

		if($popup[0]->show_every == '1 day'){
			Cookie::queue('popup_banner', true, 1440);
		}else{
			Cookie::queue('popup_banner', true, 60);
		}

		$data = array(
			'template' => env('TEMPLATE', 'demo1'),
			'popup' => $popup
		);

		return view('fn/'.env('TEMPLATE', 'demo1').'/first_screen/show', $data);
	}
}
?>

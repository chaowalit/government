<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\QwcBranch;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function list_search_customer(Request $request){
        $data = array();
        $keyword = $request->get('keyword', null);

        $QwcBranch = new QwcBranch;
		$result = $QwcBranch->getQwcBranchAll();

        foreach($result as $val){
            $url = $val->url_branch."public/api/v1/list_customer?keyword=".$keyword;
            $res = json_decode(curlGet($url), true);

            if($res['header']['code'] == 200){
                $temp = $res['data']['item'];
                $temp['url_branch'] = $val->url_branch;
                $data_1[] = $temp;
            }
        }
        $data['result'] = (isset($data_1))? $data_1:[];


        return view('list_search_customer', $data);
    }

    public function result_search_customer(Request $request){
        $data = array();
        $keyword = $request->get('keyword', null);
        $url_request = base64_decode($request->get('url', null));

        //$QwcBranch = new QwcBranch;
		//$result = $QwcBranch->getQwcBranchAll();
        //dump($result);
        //foreach($result as $val){
            //$url = $val->url_branch."public/api/v1/search_customer?keyword=".$keyword;
            $url = $url_request."public/api/v1/search_customer?keyword=".$keyword;
            $res = json_decode(curlGet($url), true);

            if($res['header']['code'] == 200){
                $temp = $res['data']['item'];
                $temp['url_branch'] = $url_request; //$val->url_branch;
                $data_1[] = $temp;
            }
        //}
        $data['result'] = (isset($data_1))? $data_1:[];
        // $url = "http://rm9.qwc-th.com/public/api/v1/search_customer?keyword=1670700183593";
        // $res = curlGet($url);
        // dd(json_decode($res, true));
        //dd($data);
        return view('result_search_customer', $data);
    }
}

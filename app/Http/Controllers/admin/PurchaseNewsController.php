<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\PurchaseNews;

class PurchaseNewsController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['information'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['information'][0]['menu_name'];
    }

	public function index(){
		$PurchaseNews = new PurchaseNews;
		$PurchaseNews = $PurchaseNews->getPurchaseNewsAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'purchase_news' => $PurchaseNews,
		);

		$this->render_view('admin/purchase_news/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/purchase_news/form', $data, $this->menu_nav, 1);
	}

	public function edit($id = ''){
		$PurchaseNews = new PurchaseNews;
		$result = $PurchaseNews->getDataById($id);

		$data = array(
			'menu_name' => $this->menu_name,
			'result' => $result,
			'type_form' => 'edit',
		);

		$this->render_view('admin/purchase_news/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		$file_path = "";
		if($Requests->file('file_path')){
			$file = $Requests->file('file_path');
			$destinationPath = public_path('uploads/news');
			$fileName = time().'.'.$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$file_path = 'public/uploads/news/'.$fileName;
		}else{
			$file_path = $Requests->get('img_old', '');
		}

		$post_date = "";
		if(!empty($Requests->get('post_date', ''))){
			$temp = explode('-', $Requests->get('post_date', ''));
			$post_date = $temp[2].'-'.$temp[1].'-'.$temp[0].' 00:00:00';
		}
		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"title" => $Requests->get('title', ''),
				"post_date" => $post_date,
				"detail1" => $Requests->get('detail1', ''),
				"file_path" => $file_path,
				"active" => $Requests->get('active', ''),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$PurchaseNews = new PurchaseNews;
			$PurchaseNews->save_data($data);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/purchase/form');
		}else {
			$data = array(
				"title" => $Requests->get('title', ''),
				"post_date" => $post_date,
				"detail1" => $Requests->get('detail1', ''),
				"file_path" => $file_path,
				"active" => $Requests->get('active', ''),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$PurchaseNews = new PurchaseNews;
			$PurchaseNews->save_data($data, $Requests->get('edit_id', ''));

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/purchase/edit/'.$Requests->get('edit_id', ''));
		}

	}

	public function delete($id = ''){
		$PurchaseNews = new PurchaseNews;
		$result = $PurchaseNews->getDataById($id);
		if(file_exists(base_path($result[0]->file_path))){
			@unlink(base_path($result[0]->file_path));
		}
		$PurchaseNews->delete_row($id);

		return redirect('admin/purchase');
	}
}
?>

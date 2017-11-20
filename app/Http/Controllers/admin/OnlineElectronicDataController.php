<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
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
use \Input as Input;

class OnlineElectronicDataController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['online_electronic_data'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['online_electronic_data'][0]['menu_name'];
    }

	public function index(){
		$OnlineDataSection7Info = new OnlineDataSection7Info;
		$result_1 = $OnlineDataSection7Info->getOnlineDataSection7InfoAll();

		$OnlineDataSection9Info = new OnlineDataSection9Info;
		$result_2 = $OnlineDataSection9Info->getOnlineDataSection9InfoAll();

		$OnlineContractOtherInfo = new OnlineContractOtherInfo;
		$result_3 = $OnlineContractOtherInfo->getOnlineContractOtherInfoAll();

		$OnlineDocumentOtherNeccessaryInfo = new OnlineDocumentOtherNeccessaryInfo;
		$result_4 = $OnlineDocumentOtherNeccessaryInfo->getOnlineDocumentOtherNeccessaryInfoAll();

		$OnlineDocumentInterestingInfo = new OnlineDocumentInterestingInfo;
		$result_5 = $OnlineDocumentInterestingInfo->getOnlineDocumentInterestingInfoAll();

		$data = array(
			'menu_name' => $this->menu_name,
			'result_1' => $result_1,
			'result_2' => $result_2,
			'result_3' => $result_3,
			'result_4' => $result_4,
			'result_5' => $result_5,
		);

		$this->render_view('admin/online_electronic_data/show', $data, $this->menu_nav, 1);
	}

	public function form(Request $Requests){
		$table_type = $Requests->get('table', '');
		if($table_type == "online_data_section_7"){
			$OnlineDataSection7 = new OnlineDataSection7;
			$cat = $OnlineDataSection7->getInfoOnlineDataSection7All();
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'create',
				'cat' => $cat,
			);
		}else if($table_type == "online_data_section_9"){
			$OnlineDataSection9 = new OnlineDataSection9;
			$cat = $OnlineDataSection9->getInfoOnlineDataSection9All();
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'create',
				'cat' => $cat,
			);
		}else if($table_type == "online_contract_other"){
			$OnlineContractOther = new OnlineContractOther;
			$cat = $OnlineContractOther->getInfoOnlineContractOtherAll();
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'create',
				'cat' => $cat,
			);
		}else if($table_type == "online_document_other_neccessary"){
			$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
			$cat = $OnlineDocumentOtherNeccessary->getInfoOnlineDocumentOtherNeccessaryAll();
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'create',
				'cat' => $cat,
			);
		}else if($table_type == "online_document_interesting"){
			$OnlineDocumentInteresting = new OnlineDocumentInteresting;
			$cat = $OnlineDocumentInteresting->getInfoOnlineDocumentInterestingAll();
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'create',
				'cat' => $cat,
			);
		}else{
			return redirect('online_electronic_data');
		}

		$this->render_view('admin/online_electronic_data/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		$table_type = $Requests->get('table_type', '');
		$file_name = '';
		if($table_type == 'online_data_section_7'){
			if($Requests->file('file_name')){
				$file = $Requests->file('file_name');
				$destinationPath = public_path('uploads/online_data_section_7');
				$fileName = time().'.'.$file->getClientOriginalExtension();
				$file->move($destinationPath, $fileName);
				$file_name = 'public/uploads/online_data_section_7/'.$fileName;
			}else{
				$file_name = $Requests->get('img_old', '');
			}

			$OnlineDataSection7Info = new OnlineDataSection7Info;
			if($Requests->get('edit_id', '') == ''){
				$data_save = array(
					"online_data_section_7_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDataSection7Info->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลข่าวสารตามมาตรา 7 สำเร็จแล้ว");
				return redirect('online_electronic_data/form?table='.$table_type);
			}else{
				$data_save = array(
					"online_data_section_7_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDataSection7Info->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลข่าวสารตามมาตรา 7 สำเร็จแล้ว");
				return redirect('online_electronic_data/edit/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}

		}else if($table_type == 'online_data_section_9'){
			if($Requests->file('file_name')){
				$file = $Requests->file('file_name');
				$destinationPath = public_path('uploads/online_data_section_9');
				$fileName = time().'.'.$file->getClientOriginalExtension();
				$file->move($destinationPath, $fileName);
				$file_name = 'public/uploads/online_data_section_9/'.$fileName;
			}else{
				$file_name = $Requests->get('img_old', '');
			}

			$OnlineDataSection9Info = new OnlineDataSection9Info;
			if($Requests->get('edit_id', '') == ''){
				$data_save = array(
					"online_data_section_9_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDataSection9Info->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลข่าวสารตามมาตรา 9 สำเร็จแล้ว");
				return redirect('online_electronic_data/form?table='.$table_type);
			}else{
				$data_save = array(
					"online_data_section_9_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDataSection9Info->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลข่าวสารตามมาตรา 9 สำเร็จแล้ว");
				return redirect('online_electronic_data/edit/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}

		}else if($table_type == "online_contract_other"){
			if($Requests->file('file_name')){
				$file = $Requests->file('file_name');
				$destinationPath = public_path('uploads/online_contract_other');
				$fileName = time().'.'.$file->getClientOriginalExtension();
				$file->move($destinationPath, $fileName);
				$file_name = 'public/uploads/online_contract_other/'.$fileName;
			}else{
				$file_name = $Requests->get('img_old', '');
			}

			$OnlineContractOtherInfo = new OnlineContractOtherInfo;
			if($Requests->get('edit_id', '') == ''){
				$data_save = array(
					"online_contract_other_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineContractOtherInfo->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลสัญญาอื่นๆ สำเร็จแล้ว");
				return redirect('online_electronic_data/form?table='.$table_type);
			}else{
				$data_save = array(
					"online_contract_other_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineContractOtherInfo->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลสัญญาอื่นๆ สำเร็จแล้ว");
				return redirect('online_electronic_data/edit/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}

		}else if($table_type == "online_document_other_neccessary"){
			if($Requests->file('file_name')){
				$file = $Requests->file('file_name');
				$destinationPath = public_path('uploads/online_document_other_neccessary');
				$fileName = time().'.'.$file->getClientOriginalExtension();
				$file->move($destinationPath, $fileName);
				$file_name = 'public/uploads/online_document_other_neccessary/'.$fileName;
			}else{
				$file_name = $Requests->get('img_old', '');
			}

			$OnlineDocumentOtherNeccessaryInfo = new OnlineDocumentOtherNeccessaryInfo;
			if($Requests->get('edit_id', '') == ''){
				$data_save = array(
					"online_document_other_neccessary_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDocumentOtherNeccessaryInfo->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกเอกสารอื่นๆ ที่ต้องรายงาน สำเร็จแล้ว");
				return redirect('online_electronic_data/form?table='.$table_type);
			}else{
				$data_save = array(
					"online_document_other_neccessary_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDocumentOtherNeccessaryInfo->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกเอกสารอื่นๆ ที่ต้องรายงาน สำเร็จแล้ว");
				return redirect('online_electronic_data/edit/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}

		}else if($table_type == "online_document_interesting"){
			if($Requests->file('file_name')){
				$file = $Requests->file('file_name');
				$destinationPath = public_path('uploads/online_document_interesting');
				$fileName = time().'.'.$file->getClientOriginalExtension();
				$file->move($destinationPath, $fileName);
				$file_name = 'public/uploads/online_document_interesting/'.$fileName;
			}else{
				$file_name = $Requests->get('img_old', '');
			}

			$OnlineDocumentInterestingInfo = new OnlineDocumentInterestingInfo;
			if($Requests->get('edit_id', '') == ''){
				$data_save = array(
					"online_document_interesting_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"created_at" => date("Y-m-d H:i:s"),
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDocumentInterestingInfo->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข่าวสารที่น่าสนใจ สำเร็จแล้ว");
				return redirect('online_electronic_data/form?table='.$table_type);
			}else{
				$data_save = array(
					"online_document_interesting_id" => $Requests->get('cat_id', ''),
					"news_info_name" => $Requests->get('news_info_name', ''),
					"floor_at" => $Requests->get('floor_at', ''),
					"doc_at" => $Requests->get('doc_at', ''),
					"file_name" => $file_name,
					"updated_at" => date("Y-m-d H:i:s"),
				);
				$result = $OnlineDocumentInterestingInfo->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข่าวสารที่น่าสนใจ สำเร็จแล้ว");
				return redirect('online_electronic_data/edit/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}

		}else{
			return redirect('online_electronic_data');
		}
	}

	public function edit($table_type = '', $id = ''){
		if($table_type == "online_data_section_7"){
			$OnlineDataSection7Info = new OnlineDataSection7Info;
			$result = $OnlineDataSection7Info->getDataById($id);

			$OnlineDataSection7 = new OnlineDataSection7;
			$cat = $OnlineDataSection7->getInfoOnlineDataSection7All();

			$temp_cat_id = $result[0]->online_data_section_7_id;
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'edit',
				'cat' => $cat,
				'temp_cat_id' => $temp_cat_id,
				'result' => $result,
			);
		}else if($table_type == "online_data_section_9"){
			$OnlineDataSection9Info = new OnlineDataSection9Info;
			$result = $OnlineDataSection9Info->getDataById($id);

			$OnlineDataSection9 = new OnlineDataSection9;
			$cat = $OnlineDataSection9->getInfoOnlineDataSection9All();

			$temp_cat_id = $result[0]->online_data_section_9_id;
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'edit',
				'cat' => $cat,
				'temp_cat_id' => $temp_cat_id,
				'result' => $result,
			);
		}else if($table_type == "online_contract_other"){
			$OnlineContractOtherInfo = new OnlineContractOtherInfo;
			$result = $OnlineContractOtherInfo->getDataById($id);

			$OnlineContractOther = new OnlineContractOther;
			$cat = $OnlineContractOther->getInfoOnlineContractOtherAll();

			$temp_cat_id = $result[0]->online_contract_other_id;
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'edit',
				'cat' => $cat,
				'temp_cat_id' => $temp_cat_id,
				'result' => $result,
			);
		}else if($table_type == "online_document_other_neccessary"){
			$OnlineDocumentOtherNeccessaryInfo = new OnlineDocumentOtherNeccessaryInfo;
			$result = $OnlineDocumentOtherNeccessaryInfo->getDataById($id);

			$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
			$cat = $OnlineDocumentOtherNeccessary->getInfoOnlineDocumentOtherNeccessaryAll();

			$temp_cat_id = $result[0]->online_document_other_neccessary_id;
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'edit',
				'cat' => $cat,
				'temp_cat_id' => $temp_cat_id,
				'result' => $result,
			);
		}else if($table_type == "online_document_interesting"){
			$OnlineDocumentInterestingInfo = new OnlineDocumentInterestingInfo;
			$result = $OnlineDocumentInterestingInfo->getDataById($id);

			$OnlineDocumentInteresting = new OnlineDocumentInteresting;
			$cat = $OnlineDocumentInteresting->getInfoOnlineDocumentInterestingAll();

			$temp_cat_id = $result[0]->online_document_interesting_id;
			$data = array(
				'menu_name' => $this->menu_name,
				'table_type' => $table_type,
				'type_form' => 'edit',
				'cat' => $cat,
				'temp_cat_id' => $temp_cat_id,
				'result' => $result,
			);
		}else{
			return redirect('online_electronic_data');
		}

		$this->render_view('admin/online_electronic_data/form', $data, $this->menu_nav, 1);
	}

	public function delete($table_type = '', $id = ''){
		if($table_type == "online_data_section_7"){
			$OnlineDataSection7Info = new OnlineDataSection7Info;
			$result = $OnlineDataSection7Info->getDataById($id);
			if(file_exists(base_path($result[0]->file_name))){
				@unlink(base_path($result[0]->file_name));
			}
			$OnlineDataSection7Info->delete_row($id);

		}else if($table_type == "online_data_section_9"){
			$OnlineDataSection9Info = new OnlineDataSection9Info;
			$result = $OnlineDataSection9Info->getDataById($id);
			if(file_exists(base_path($result[0]->file_name))){
				@unlink(base_path($result[0]->file_name));
			}
			$OnlineDataSection9Info->delete_row($id);

		}else if($table_type == "online_contract_other"){
			$OnlineContractOtherInfo = new OnlineContractOtherInfo;
			$result = $OnlineContractOtherInfo->getDataById($id);
			if(file_exists(base_path($result[0]->file_name))){
				@unlink(base_path($result[0]->file_name));
			}
			$OnlineContractOtherInfo->delete_row($id);

		}else if($table_type == "online_document_other_neccessary"){
			$OnlineDocumentOtherNeccessaryInfo = new OnlineDocumentOtherNeccessaryInfo;
			$result = $OnlineDocumentOtherNeccessaryInfo->getDataById($id);
			if(file_exists(base_path($result[0]->file_name))){
				@unlink(base_path($result[0]->file_name));
			}
			$OnlineDocumentOtherNeccessaryInfo->delete_row($id);

		}else if($table_type == "online_document_interesting"){
			$OnlineDocumentInterestingInfo = new OnlineDocumentInterestingInfo;
			$result = $OnlineDocumentInterestingInfo->getDataById($id);
			if(file_exists(base_path($result[0]->file_name))){
				@unlink(base_path($result[0]->file_name));
			}
			$OnlineDocumentInterestingInfo->delete_row($id);

		}

		return redirect('online_electronic_data');
	}

	//------------------------------------------------------------------------
	public function category(){
		$OnlineDataSection7 = new OnlineDataSection7;
		$online_data_section_7 = $OnlineDataSection7->getInfoOnlineDataSection7AllForAdmin();

		$OnlineDataSection9 = new OnlineDataSection9;
		$online_data_section_9 = $OnlineDataSection9->getInfoOnlineDataSection9AllForAdmin();

		$OnlineDocumentInteresting = new OnlineDocumentInteresting;
		$document_interesting = $OnlineDocumentInteresting->getInfoOnlineDocumentInterestingAllForAdmin();

		$OnlineContractOther = new OnlineContractOther;
		$contract_other = $OnlineContractOther->getInfoOnlineContractOtherAllForAdmin();

		$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
		$document_other_neccessary = $OnlineDocumentOtherNeccessary->getInfoOnlineDocumentOtherNeccessaryAllForAdmin();
		$data = array(
			'menu_name' => $this->menu_name,
			'online_data_section_7' => $online_data_section_7,
			'online_data_section_9' => $online_data_section_9,
			'document_interesting' => $document_interesting,
			'contract_other' => $contract_other,
			'document_other_neccessary' => $document_other_neccessary,
		);

		$this->render_view('admin/online_electronic_data/show_category', $data, $this->menu_nav, 1);
	}

	public function form_category(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);
		$this->render_view('admin/online_electronic_data/form_category', $data, $this->menu_nav, 1);
	}

	public function edit_category($table_type = '', $id = ''){
		if($table_type == "online_data_section_7"){
			$OnlineDataSection7 = new OnlineDataSection7;
			$result = $OnlineDataSection7->getDataById($id);
		}else if($table_type == "online_data_section_9"){
			$OnlineDataSection9 = new OnlineDataSection9;
			$result = $OnlineDataSection9->getDataById($id);
		}else if($table_type == "contract_other"){
			$OnlineContractOther = new OnlineContractOther;
			$result = $OnlineContractOther->getDataById($id);
		}else if($table_type == "document_other_neccessary"){
			$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
			$result = $OnlineDocumentOtherNeccessary->getDataById($id);
		}else if($table_type == "document_interesting"){
			$OnlineDocumentInteresting = new OnlineDocumentInteresting;
			$result = $OnlineDocumentInteresting->getDataById($id);
		}else{
			echo "error";die;
		}

		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'edit',
			'result' => $result,
			'table_type' => $table_type,
		);
		$this->render_view('admin/online_electronic_data/form_category', $data, $this->menu_nav, 1);
	}

	public function save_category(Request $Requests){
		$table_type = $Requests->get('table_type', '');
		$data_save = array(
					"sub_menu_name" => $Requests->get('sub_menu_name', ''),
					"order_by" => $Requests->get('order_by', ''),
					"active" => $Requests->get('active', ''),
					"created_at" => date("Y-m-d H:i:s"),
				);
		if($table_type == "online_data_section_7"){
			$OnlineDataSection7 = new OnlineDataSection7;
			if($Requests->get('edit_id', '') == ''){
				$OnlineDataSection7->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/form_category');
			}else{
				$OnlineDataSection7->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/edit_category/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}
		}else if($table_type == "online_data_section_9"){
			$OnlineDataSection9 = new OnlineDataSection9;
			if($Requests->get('edit_id', '') == ''){
				$OnlineDataSection9->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/form_category');
			}else{
				$OnlineDataSection9->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/edit_category/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}
		}else if($table_type == "contract_other"){
			$OnlineContractOther = new OnlineContractOther;
			if($Requests->get('edit_id', '') == ''){
				$OnlineContractOther->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/form_category');
			}else{
				$OnlineContractOther->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/edit_category/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}
		}else if($table_type == "document_other_neccessary"){
			$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
			if($Requests->get('edit_id', '') == ''){
				$OnlineDocumentOtherNeccessary->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/form_category');
			}else{
				$OnlineDocumentOtherNeccessary->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/edit_category/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}
		}else if($table_type == "document_interesting"){
			$OnlineDocumentInteresting = new OnlineDocumentInteresting;
			if($Requests->get('edit_id', '') == ''){
				$OnlineDocumentInteresting->save_data($data_save);

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/form_category');
			}else{
				$OnlineDocumentInteresting->save_data($data_save, $Requests->get('edit_id', ''));

				$Requests->session()->flash('bg_color', 'success');
				$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
				return redirect('online_electronic_data/edit_category/'.$table_type.'/'.$Requests->get('edit_id', ''));
			}
		}else{

		}
	}

	public function delete_category($table_type = '', $id = ''){
		if($table_type == "online_data_section_7"){
			$OnlineDataSection7 = new OnlineDataSection7;
			$OnlineDataSection7->delete_row($id);
		}else if($table_type == "online_data_section_9"){
			$OnlineDataSection9 = new OnlineDataSection9;
			$OnlineDataSection9->delete_row($id);
		}else if($table_type == "contract_other"){
			$OnlineContractOther = new OnlineContractOther;
			$OnlineContractOther->delete_row($id);
		}else if($table_type == "document_other_neccessary"){
			$OnlineDocumentOtherNeccessary = new OnlineDocumentOtherNeccessary;
			$OnlineDocumentOtherNeccessary->delete_row($id);
		}else if($table_type == "document_interesting"){
			$OnlineDocumentInteresting = new OnlineDocumentInteresting;
			$OnlineDocumentInteresting->delete_row($id);
		}else{
			echo "error";die;
		}

		return redirect('online_electronic_data/category');
	}
}
?>

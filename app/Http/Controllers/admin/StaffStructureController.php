<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminMsgController;
use App\Models\StaffStructure;
use App\Models\StaffStructureInfo;

class StaffStructureController extends AdminMsgController{

	private $menu_nav = '';
	private $menu_name = '';

	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
        $this->menu_nav = $this->get_menu_admin()['staff_structure'][0]['menu_nav'];
        $this->menu_name = $this->get_menu_admin()['staff_structure'][0]['menu_name'];
    }

	public function index(){
		$StaffStructure = new StaffStructure;
		$staff_structure = $StaffStructure->getInfoStaffStructureAll();
		$StaffStructureInfo = new StaffStructureInfo;
		$staff_structure_info = $StaffStructureInfo->getStaffStructureInfoAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'staff_structure' => $staff_structure,
			'staff_structure_info' => $staff_structure_info,
		);

		$this->render_view('admin/staff_structure/main', $data, $this->menu_nav, 1);
	}

	public function form(){
		$StaffStructure = new StaffStructure;
		$staff_structure = $StaffStructure->getInfoStaffStructureAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'staff_structure' => $staff_structure,
			'type_form' => 'create',
		);

		$this->render_view('admin/staff_structure/form', $data, $this->menu_nav, 1);
	}

	public function edit($id = ''){
		$StaffStructureInfo = new StaffStructureInfo;
		$result = $StaffStructureInfo->getDataById($id);

		$StaffStructure = new StaffStructure;
		$staff_structure = $StaffStructure->getInfoStaffStructureAll();
		$data = array(
			'menu_name' => $this->menu_name,
			'staff_structure' => $staff_structure,
			'result' => $result,
			'type_form' => 'edit',
		);

		$this->render_view('admin/staff_structure/form', $data, $this->menu_nav, 1);
	}

	public function save(Request $Requests){
		$img_profile = "";
		if($Requests->file('img_profile')){
			$file = $Requests->file('img_profile');
			$destinationPath = public_path('uploads/profile');
			$fileName = time().'.'.$file->getClientOriginalExtension();
			$file->move($destinationPath, $fileName);
			$img_profile = 'public/uploads/profile/'.$fileName;
		}else{
			$img_profile = $Requests->get('img_old', '');
		}

		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"staff_structure_id" => $Requests->get('staff_structure_id', ''),
				"full_name" => $Requests->get('full_name', ''),
				"position" => $Requests->get('position', ''),
				"img_profile" => $img_profile,
				"order_number" => $Requests->get('order_number', ''),
				"row_number" => $Requests->get('row_number', '0'),
				"created_at" => date("Y-m-d H:i:s"),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$StaffStructureInfo = new StaffStructureInfo;
			$StaffStructureInfo->save_data($data);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลบุคลากร สำเร็จแล้ว");
			return redirect('admin/staff_structure/form');
		}else {
			$data = array(
				"staff_structure_id" => $Requests->get('staff_structure_id', ''),
				"full_name" => $Requests->get('full_name', ''),
				"position" => $Requests->get('position', ''),
				"img_profile" => $img_profile,
				"order_number" => $Requests->get('order_number', ''),
				"row_number" => $Requests->get('row_number', '0'),
				"updated_at" => date("Y-m-d H:i:s"),
			);
			$StaffStructureInfo = new StaffStructureInfo;
			$StaffStructureInfo->save_data($data, $Requests->get('edit_id', ''));

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูลบุคลากร สำเร็จแล้ว");
			return redirect('admin/staff_structure/edit/'.$Requests->get('edit_id', ''));
		}

	}

	public function delete($id = ''){
		$StaffStructureInfo = new StaffStructureInfo;
		$result = $StaffStructureInfo->getDataById($id);
		if(file_exists(base_path($result[0]->img_profile))){
			@unlink(base_path($result[0]->img_profile));
		}
		$StaffStructureInfo->delete_row($id);

		return redirect('admin/staff_structure');
	}
	//----------------------------------------------------------------------------------------

	public function category(){
		$StaffStructure = new StaffStructure;
		$staff_structure = $StaffStructure->getInfoStaffStructureAllForAdmin();
		$data = array(
			'menu_name' => $this->menu_name,
			'staff_structure' => $staff_structure,
		);

		$this->render_view('admin/staff_structure/show_category', $data, $this->menu_nav, 1);
	}

	public function form_category(){
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'create',
		);

		$this->render_view('admin/staff_structure/form_category', $data, $this->menu_nav, 1);
	}

	public function edit_category($id){
		$StaffStructure = new StaffStructure;
		$result = $StaffStructure->getDataById($id);
		$data = array(
			'menu_name' => $this->menu_name,
			'type_form' => 'edit',
			'result' => $result,
		);

		$this->render_view('admin/staff_structure/form_category', $data, $this->menu_nav, 1);
	}

	public function save_category(Request $Requests){
		if($Requests->get('edit_id', '') == ""){
			$data = array(
				"sub_menu_name" => $Requests->get('sub_menu_name', ''),
				"order_by" => $Requests->get('order_by', ''),
				"active" => $Requests->get('active', ''),
				"role" => $Requests->get('role', ''),
				"created_at" => date("Y-m-d H:i:s"),
			);
			$StaffStructure = new StaffStructure;
			$StaffStructure->save_data($data);

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/staff_structure/form_category');
		}else {
			$data = array(
				"sub_menu_name" => $Requests->get('sub_menu_name', ''),
				"order_by" => $Requests->get('order_by', ''),
				"active" => $Requests->get('active', ''),
				"role" => $Requests->get('role', ''),
				"created_at" => date("Y-m-d H:i:s"),
			);
			$StaffStructure = new StaffStructure;
			$StaffStructure->save_data($data, $Requests->get('edit_id', ''));

			$Requests->session()->flash('bg_color', 'success');
			$Requests->session()->flash('msg', "ทำรายการบันทึกข้อมูล สำเร็จแล้ว");
			return redirect('admin/staff_structure/edit_category/'.$Requests->get('edit_id', ''));
		}
	}
	public function delete_category($id){
		$StaffStructure = new StaffStructure;
		$StaffStructure->delete_row($id);

		return redirect('admin/staff_structure/category');
	}
}
?>

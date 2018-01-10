<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminMsgController extends Controller
{
	private $menu_admin = array(
		'config_menu' => array(
							array(
								'menu_nav' => 'config_menu',
								'menu_name' => 'ตั้งค่าเมนู',
							),
						),
		'popup_banner' => array(
							array(
								'menu_nav' => 'popup_banner',
								'menu_name' => 'Popup Banner',
							),
						),
		'information' => array(
							array(
								'menu_nav' => 'information',
								'menu_name' => 'ข่าวประชาสัมพันธ์',
							),
						),
		'other_link' => array(
							array(
								'menu_nav' => 'other_link',
								'menu_name' => 'ลิ้งหน่วยงานอื่นๆ',
							),
						),
		'slide_banner' => array(
							array(
								'menu_nav' => 'slide_banner',
								'menu_name' => 'Slide Banner',
							),
						),
		'online_electronic_data' => array(
							array(
								'menu_nav' => 'online_electronic_data',
								'menu_name' => 'ข่าวสารอิเล็กทรอนิกส์ของราชการ',
							),
						),
		'history_detail' => array(
							array(
								'menu_nav' => 'history_detail',
								'menu_name' => 'ประวัติความเป็นมา',
							),
						),
		'mission_vision' => array(
							array(
								'menu_nav' => 'mission_vision',
								'menu_name' => 'พันธกิจและวิสัยทัศน์',
							),
						),
		'executive_messages' => array(
							array(
								'menu_nav' => 'executive_messages',
								'menu_name' => 'สานส์จากผู้บริหาร',
							),
						),
		'staff_structure' => array(
							array(
								'menu_nav' => 'staff_structure',
								'menu_name' => 'โครงสร้างบุคลากร',
							),
						),
		'contact_us' => array(
							array(
								'menu_nav' => 'contact_us',
								'menu_name' => 'ติดต่อเรา',
							),
						),
	);

	public function get_menu_admin(){
		return $this->menu_admin;
	}

	public function render_view($view_path = '',
								$template_data = array(),
								$menu_nav = '',
								$menu_level = 1,
								$page_inside = 1){
		$template_data['menu_nav'] = $menu_nav;
		$template_data['menu_level'] = $menu_level;
		$template_data['page_inside'] = $page_inside;

		if($view_path){
			echo view($view_path, $template_data);
		}else{
			dump($template_data); die;
		}

    }

}
?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QwcAdminController extends Controller
{
	public function render_view($view_path = '', $template_data = array(), $menu_nav = 'dashboard', $menu_level = 1, $page_inside = 1){
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

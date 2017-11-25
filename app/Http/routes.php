<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Front End
*/
Route::get('/', 'fn\v1\IndexController@index');

Route::get('history', 'fn\v1\HistoryController@index');
Route::get('mission_vision', 'fn\v1\MissionVisionController@index');
Route::get('executive_messages', 'fn\v1\ExecutiveMessagesController@index');
Route::get('staff_structure/{id}', 'fn\v1\StaffStructureController@show');

Route::get('contact_us', 'fn\v1\ContactUsController@index');

Route::get('online_electronic', 'fn\v1\OnlineElectronicController@index');
Route::get('sub_online_electronic/{type}/{id}', 'fn\v1\OnlineElectronicController@sub_online_electronic');

/*
Back End purchase
*/
Route::get('config_menu', 'admin\ConfigMenuController@index');

Route::get('admin/popup_banner', 'admin\PopupBannerController@index');
Route::get('admin/popup_banner/form', 'admin\PopupBannerController@form');
Route::post('admin/popup_banner/save', 'admin\PopupBannerController@save');
Route::get('admin/popup_banner/edit/{id}', 'admin\PopupBannerController@edit');
Route::get('admin/popup_banner/delete/{id}', 'admin\PopupBannerController@delete');

Route::get('admin/information', 'admin\InformationController@index');
Route::get('admin/information/form', 'admin\InformationController@form');
Route::post('admin/information/save', 'admin\InformationController@save');
Route::get('admin/information/edit/{id}', 'admin\InformationController@edit');
Route::get('admin/information/delete/{id}', 'admin\InformationController@delete');

Route::get('admin/purchase', 'admin\PurchaseNewsController@index');
Route::get('admin/purchase/form', 'admin\PurchaseNewsController@form');
Route::post('admin/purchase/save', 'admin\PurchaseNewsController@save');
Route::get('admin/purchase/edit/{id}', 'admin\PurchaseNewsController@edit');
Route::get('admin/purchase/delete/{id}', 'admin\PurchaseNewsController@delete');

Route::get('admin/cal_mid_price', 'admin\CalculateMiddlePriceController@index');
Route::get('admin/cal_mid_price/form', 'admin\CalculateMiddlePriceController@form');
Route::post('admin/cal_mid_price/save', 'admin\CalculateMiddlePriceController@save');
Route::get('admin/cal_mid_price/edit/{id}', 'admin\CalculateMiddlePriceController@edit');
Route::get('admin/cal_mid_price/delete/{id}', 'admin\CalculateMiddlePriceController@delete');

Route::get('admin/transfer_news', 'admin\TransferNewsController@index');
Route::get('admin/transfer_news/form', 'admin\TransferNewsController@form');
Route::post('admin/transfer_news/save', 'admin\TransferNewsController@save');
Route::get('admin/transfer_news/edit/{id}', 'admin\TransferNewsController@edit');
Route::get('admin/transfer_news/delete/{id}', 'admin\TransferNewsController@delete');

Route::get('admin/resolution_of_meeting', 'admin\ResolutionOfMeetingController@index');
Route::get('admin/resolution_of_meeting/form', 'admin\ResolutionOfMeetingController@form');
Route::post('admin/resolution_of_meeting/save', 'admin\ResolutionOfMeetingController@save');
Route::get('admin/resolution_of_meeting/edit/{id}', 'admin\ResolutionOfMeetingController@edit');
Route::get('admin/resolution_of_meeting/delete/{id}', 'admin\ResolutionOfMeetingController@delete');

Route::get('admin/activity_news', 'admin\ActivityNewsController@index');
Route::get('admin/activity_news/form', 'admin\ActivityNewsController@form');
Route::post('admin/activity_news/save', 'admin\ActivityNewsController@save');
Route::get('admin/activity_news/delete/{id}', 'admin\ActivityNewsController@delete');
Route::get('admin/activity_news/delete/{id}/{folder}/{filename}', 'admin\ActivityNewsController@delete');
Route::get('admin/activity_news/edit/{id}', 'admin\ActivityNewsController@edit');
Route::get('admin/activity_news/select/{id}/{filename}', 'admin\ActivityNewsController@select');

Route::get('admin/presentation', 'admin\PresentationController@index');
Route::get('admin/presentation/form', 'admin\PresentationController@form');
Route::post('admin/presentation/save', 'admin\PresentationController@save');
Route::get('admin/presentation/delete/{id}', 'admin\PresentationController@delete');
Route::get('admin/presentation/delete/{id}/{folder}/{filename}', 'admin\PresentationController@delete');
Route::get('admin/presentation/edit/{id}', 'admin\PresentationController@edit');
Route::get('admin/presentation/select/{id}/{filename}', 'admin\PresentationController@select');

Route::get('admin/landmarks', 'admin\LandmarksController@index');
Route::get('admin/landmarks/form', 'admin\LandmarksController@form');
Route::post('admin/landmarks/save', 'admin\LandmarksController@save');
Route::get('admin/landmarks/delete/{id}', 'admin\LandmarksController@delete');
Route::get('admin/landmarks/delete/{id}/{folder}/{filename}', 'admin\LandmarksController@delete');
Route::get('admin/landmarks/edit/{id}', 'admin\LandmarksController@edit');
Route::get('admin/landmarks/select/{id}/{filename}', 'admin\LandmarksController@select');

Route::get('admin/otop', 'admin\OtopController@index');
Route::get('admin/otop/form', 'admin\OtopController@form');
Route::post('admin/otop/save', 'admin\OtopController@save');
Route::get('admin/otop/delete/{id}', 'admin\OtopController@delete');
Route::get('admin/otop/delete/{id}/{folder}/{filename}', 'admin\OtopController@delete');
Route::get('admin/otop/edit/{id}', 'admin\OtopController@edit');
Route::get('admin/otop/select/{id}/{filename}', 'admin\OtopController@select');

Route::get('admin/vdo', 'admin\VdoController@index');
Route::get('admin/vdo/form', 'admin\VdoController@form');
Route::post('admin/vdo/save', 'admin\VdoController@save');
Route::get('admin/vdo/delete/{id}', 'admin\VdoController@delete');
Route::get('admin/vdo/edit/{id}', 'admin\VdoController@edit');


Route::get('admin/slide_banner', 'admin\SlideBannerController@index');
Route::get('admin/slide_banner/form', 'admin\SlideBannerController@form');
Route::post('admin/slide_banner/save', 'admin\SlideBannerController@save');
Route::get('admin/slide_banner/edit/{id}', 'admin\SlideBannerController@edit');
Route::get('admin/slide_banner/delete/{id}', 'admin\SlideBannerController@delete');

Route::get('online_electronic_data', 'admin\OnlineElectronicDataController@index');
Route::get('online_electronic_data/form', 'admin\OnlineElectronicDataController@form');
Route::post('online_electronic_data/save', 'admin\OnlineElectronicDataController@save');
Route::get('online_electronic_data/delete/{type}/{id}', 'admin\OnlineElectronicDataController@delete');
Route::get('online_electronic_data/edit/{type}/{id}', 'admin\OnlineElectronicDataController@edit');
Route::get('online_electronic_data/category', 'admin\OnlineElectronicDataController@category');
Route::get('online_electronic_data/delete_category/{type}/{id}', 'admin\OnlineElectronicDataController@delete_category');
Route::get('online_electronic_data/form_category', 'admin\OnlineElectronicDataController@form_category');
Route::post('online_electronic_data/save_category', 'admin\OnlineElectronicDataController@save_category');
Route::get('online_electronic_data/edit_category/{type}/{id}', 'admin\OnlineElectronicDataController@edit_category');

/*

*/
Route::get('about/history_detail', 'admin\HistoryDetailController@index');
Route::post('about/history_detail/save', 'admin\HistoryDetailController@save');
Route::get('about/mission_vision', 'admin\MissionVisionController@index');
Route::post('about/mission_vision/save', 'admin\MissionVisionController@save');
Route::get('about/executive_messages', 'admin\ExecutiveMessagesController@index');
Route::post('about/executive_messages/save', 'admin\ExecutiveMessagesController@save');

/*

*/
Route::get('admin/contact_us', 'admin\ContactUsController@index');
Route::post('admin/contact_us/save', 'admin\ContactUsController@save');

/*

*/
Route::get('admin/staff_structure', 'admin\StaffStructureController@index');
Route::get('admin/staff_structure/form', 'admin\StaffStructureController@form');
Route::post('admin/staff_structure/save', 'admin\StaffStructureController@save');
Route::get('admin/staff_structure/edit/{id}', 'admin\StaffStructureController@edit');
Route::get('admin/staff_structure/delete/{id}', 'admin\StaffStructureController@delete');
Route::get('admin/staff_structure/category', 'admin\StaffStructureController@category');
Route::get('admin/staff_structure/form_category', 'admin\StaffStructureController@form_category');
Route::post('admin/staff_structure/save_category', 'admin\StaffStructureController@save_category');
Route::get('admin/staff_structure/edit_category/{id}', 'admin\StaffStructureController@edit_category');
Route::get('admin/staff_structure/delete_category/{id}', 'admin\StaffStructureController@delete_category');

//------------------------------------------------------------------------------
Route::get('/search_customer', function () {
    return view('form_search_customer');
});
Route::get('result_search_customer', 'HomeController@result_search_customer');
Route::post('list_search_customer', 'HomeController@list_search_customer');

Route::auth();

Route::get('dashboard', 'DashboardController@index');

Route::get('branch', 'BranchController@index');
Route::post('branch/show_edit_branch', 'BranchController@show_edit_branch');
Route::post('branch/update_edit_branch', 'BranchController@update_edit_branch');
Route::post('branch/update_login_branch', 'BranchController@update_login_branch');

Route::get('report/month', 'ReportController@show_month');
Route::get('report/year', 'ReportController@show_year');
Route::post('report/gen_report_month', 'ReportController@gen_report_month');
Route::post('report/gen_report_year', 'ReportController@gen_report_year');
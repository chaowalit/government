@extends('layouts.app')

@section('content')

<div class="">
    <div class="page-title">
      <div class="title_left">
	  	<i class="fa fa-sitemap" style="font-size: 22px;"></i> <b>สาขา >> จัดการสาขา >> อัพเดตข้อมูลสาขา</b>

      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="height: auto;">
          <div class="x_title">
            <h2>อัพเดตข้อมูลสาขา</h2>
            <ul class="nav navbar-right panel_toolbox">
				<li><a href="{{ url('branch') }}" class="close-link"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
              	</li>
            </ul>
            <div class="clearfix"></div>
          </div>

		  <div class="x_content">
			  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ข้อมูลทั่วไป</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">เปลี่ยนแปลง Email&Password</a>
                    </li>
                    <!-- <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                    </li> -->
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
						<?php //dump($branch); 
            ?>
						<p style="text-align: center;">กรุณากรอกข้อมูลในช่องที่มี * ให้ครบทุกช่อง</p>
						<form action="{{ url('branch/update_edit_branch') }}" method="POST" id="form_update_branch" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
							<div class="form-group">
  	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">URL Branch <span class="required">*</span>
  	                        </label>
  	                        <div class="col-md-6 col-sm-6 col-xs-12">
  	                          <input type="text" name="url_branch" id="url_branch" value="{{ $branch['url_branch'] }}" required="required" class="form-control col-md-7 col-xs-12" readonly="true">
  	                        </div>
  	                      </div>

	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">ชื่อบริษัท <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" name="company_name" id="company_name" required="required" class="form-control col-md-7 col-xs-12" value="{{ $branch['company_name'] }}">
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">รหัสสาขา <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input type="text" id="branch_no" name="branch_no" required="required" class="form-control col-md-7 col-xs-12" value="{{ $branch['branch_no'] }}">
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">ชื่อสาขา <span class="required">*</span></label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input id="branch_name" value="{{ $branch['branch_name'] }}" class="form-control col-md-7 col-xs-12" type="text" name="branch_name">
	                        </div>
	                      </div>

	                      <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ชื่อผู้รับผิดชอบ <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input id="first_name" name="first_name" value="{{ $branch['first_name'] }}" class="form-control col-md-7 col-xs-12" required="required" type="text">
	                        </div>
	                      </div>

						  <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">นามสกุลผู้รับผิดชอบ <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input id="last_name" name="last_name" value="{{ $branch['last_name'] }}" class="form-control col-md-7 col-xs-12" required="required" type="text">
	                        </div>
	                      </div>

						  <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ที่อยู่ <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">

							  <textarea name="address" required="required" class="form-control col-md-7 col-xs-12" rows="3">{{ $branch['address'] }}</textarea>
	                        </div>
	                      </div>

						  <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">โทรศัพท์ <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input id="tel" name="tel" value="{{ $branch['tel'] }}" class="form-control col-md-7 col-xs-12" required="required" type="text">
	                        </div>
	                      </div>

						  <div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12">หมายเหตุ
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">

							  <textarea name="comment" required="required" class="form-control col-md-7 col-xs-12" rows="3">{{ $branch['comment'] }}</textarea>
	                        </div>
	                      </div>

	                      <div class="ln_solid"></div>
	                      <div class="form-group">
	                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

								<input type="hidden" name="id" value="{{ $branch['id'] }}">
								{!! csrf_field() !!}
	                          <a href="{{ url('branch') }}" class="btn btn-primary">ย้อนกลับ</a>
	                          <button type="button" id="btn_update_branch" class="btn btn-success">อัพเดตข้อมูล</button>
	                        </div>
	                      </div>

	                    </form>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                      <p></p>
                      <div class="col-md-6 col-xs-12">
                          <form action="{{ url('branch/update_login_branch') }}" method="POST" id="form_update_user_login_branch" class="form-horizontal form-label-left">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control has-feedback-left" value="{{ $branch['email'] }}" name="email" id="email" placeholder="Email">
                                  <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="password" class="form-control has-feedback-left" name="new_password" id="new_password" placeholder="Password">
                                  <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                </div>
                              </div>
                              <div class="ln_solid"></div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password remove course detail</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control has-feedback-left" name="set_password_transection" 
                                  id="set_password_transection" value="{{ $branch['set_password_transection'] }}" placeholder="">
                                  <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="ln_solid"></div>

                              <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                    <input type="hidden" name="url_branch" id="url_branch" value="{{ $branch['url_branch'] }}" required="required" class="form-control col-md-7 col-xs-12" readonly="true">
                                    <input type="hidden" name="id" value="{{ $branch['id'] }}">
    								{!! csrf_field() !!}
                                  <a href="{{ url('branch') }}" class="btn btn-primary">ย้อนกลับ</a>
                                  <button type="button" id="btn_update_user_login_branch" class="btn btn-success">เปลี่ยนแปลงข้อมูล</button>
                                </div>
                              </div>
                          </form>
                      </div>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                      <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                        booth letterpress, commodo enim craft beer mlkshk </p>
                    </div> -->
                  </div>
                </div>
		  </div>

        </div>
      </div>
    </div>
  </div>

@endsection

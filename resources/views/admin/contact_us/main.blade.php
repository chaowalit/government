@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $menu_name; ?>
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
        <li><a href="#" class="active"><?php echo $menu_name; ?></a></li>
        <!-- <li class="active">Blank page</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title">กรอกข้อมูลการติดต่อ
                <small>ระบบจะนำไปแสดงผลหน้าบ้าน</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-md-7">
                    <form role="form" action="{{ url('admin/contact_us/save') }}" method="post">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="">ชื่อสถานที่</label>
                          <input type="text" class="form-control" name="location_name" id="location_name" placeholder="ชื่อสถานที่" value="<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">ที่อยู่</label>
                          <input type="text" class="form-control" name="address" id="address" placeholder="ที่อยู่" value="<?php echo isset($contact_us[0]->address)? $contact_us[0]->address:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">โทรศัพท์</label>
                          <input type="text" class="form-control" name="tel" id="tel" placeholder="โทรศัพท์" value="<?php echo isset($contact_us[0]->tel)? $contact_us[0]->tel:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Facebook url</label>
                          <input type="text" class="form-control" name="facebook_url" id="facebook_url" placeholder="Facebook url" value="<?php echo isset($contact_us[0]->facebook_url)? $contact_us[0]->facebook_url:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo isset($contact_us[0]->email)? $contact_us[0]->email:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Fax</label>
                          <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?php echo isset($contact_us[0]->fax)? $contact_us[0]->fax:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Longitude</label>
                          <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" value="<?php echo isset($contact_us[0]->longitude)? $contact_us[0]->longitude:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Latitude</label>
                          <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="<?php echo isset($contact_us[0]->latitude)? $contact_us[0]->latitude:""; ?>">
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        {!! csrf_field() !!}
                        <input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($contact_us[0]->id)? $contact_us[0]->id:""; ?>">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                      </div>
                    </form>
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

    </section>
    <!-- /.content -->
  </div>

@endsection
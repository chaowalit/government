@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo \Config::get('config_memu.main_2.level_4'); ?>
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
        <li><a href="#" class="active"><?php echo \Config::get('config_memu.main_2.level_4'); ?></a></li>
        <!-- <li class="active">Blank page</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title"><?php echo ($type_form == 'create')? "บันทึก".\Config::get('config_memu.main_2.level_4'):"แก้ไข".\Config::get('config_memu.main_2.level_4'); ?>
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/staff_structure') }}"><u style="font-size: 12px;">ย้อนกลับ</u></a>
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
                <div class="col-md-8">

                    <?php if(session('bg_color') == 'success'){ ?>
                    <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo session('msg'); ?>
                      </div>
                    <?php } ?>

                    <form role="form" action="{{ url('/admin/staff_structure/save') }}" method="POST" enctype="multipart/form-data">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="">หน่วยงานที่สังกัด</label>
                          <select class="form-control" name="staff_structure_id" id="staff_structure_id">
                            <?php foreach ($staff_structure as $key => $value) { ?>
                                <?php if(isset($result[0]->staff_structure_id)){ ?>
                                    <option value="<?php echo $value->id; ?>" <?php echo ($result[0]->staff_structure_id == $value->id)? "selected":""  ?>><?php echo $value->sub_menu_name; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $value->id; ?>"><?php echo $value->sub_menu_name; ?></option>
                                <?php } ?>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">ชื่อ-นามสกุล</label>
                          <input type="text" class="form-control" name="full_name" id="full_name" placeholder="ชื่อ-นามสกุล" value="<?php echo (isset($result[0]->full_name))? $result[0]->full_name:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">ตำแหน่ง</label>
                          <input type="text" class="form-control" name="position" id="position" placeholder="ตำแหน่ง" value="<?php echo (isset($result[0]->position))? $result[0]->position:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">ลำดับที่</label>
                          <input type="number" class="form-control" name="order_number" id="order_number" placeholder="ลำดับที่" value="<?php echo (isset($result[0]->order_number))? $result[0]->order_number:""; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">รูปภาพ</label>
                          <input type="file" name="img_profile" id="img_profile">

                          <p class="help-block">รองรับไฟล์ jpg, png เท่านั้น</p>
                          <p>
                            <img src="<?php echo isset($result[0]->img_profile)? '/'.$result[0]->img_profile:''; ?>" style="width: 120px;height: 120px;">
                        </p>
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        {!! csrf_field() !!}
                        <input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($result[0]->id)? $result[0]->id:''; ?>">
                        <input type="hidden" name="img_old" id="img_old" value="<?php echo isset($result[0]->img_profile)? $result[0]->img_profile:''; ?>">

                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ url('/admin/staff_structure') }}" class="btn btn-warning">ยกเลิก</a>
                      </div>
                    </form>

                </div>
                <div class="col-md-4"></div>
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
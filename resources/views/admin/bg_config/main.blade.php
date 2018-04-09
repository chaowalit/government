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

              <h3 class="box-title">อัพเดตภาพพื้นหลัง
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/bg_config') }}"><u style="font-size: 12px;">รีเฟรส</u></a>
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
                <?php if(session('bg_color') == 'success'){ ?>
                    <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo session('msg'); ?>
                      </div>
                <?php } ?>

                <form role="form" action="{{ url('admin/bg_config/save') }}" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">อัปโหลดไฟล์ Body</label>
                      <input type="file" name="image_body" id="image_body">

                      <p class="help-block">รองรับไฟล์ jpg, png เท่านั้น</p>
                        <p>
                        <a href="/fn/demo1/images/bg_winter.jpg" target="_blank">ดูรูปภาพ Body</a>
                        </p>
                    </div>

                    <div class="form-group">
                      <label for="">อัปโหลดไฟล์ Footer</label>
                      <input type="file" name="image_footer" id="image_footer">

                      <p class="help-block">รองรับไฟล์ jpg, png เท่านั้น</p>
                        <p>
                        <a href="/fn/demo1/images/bg-footer.png" target="_blank">ดูรูปภาพ Footer</a>
                        </p>
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo isset($user[0]->id)? $user[0]->id:""; ?>">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <a href="{{ url('/admin/bg_config') }}" class="btn btn-warning">ยกเลิก</a>
                  </div>
                </form>
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
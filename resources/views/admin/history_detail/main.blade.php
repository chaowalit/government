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

              <h3 class="box-title">กรอกประวัติความเป็นมา
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
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
                <form role="form" action="{{ url('about/history_detail/save') }}" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Upload Logo</label>
                      <input type="file" id="logo_img" name="logo_img">

                      <p class="help-block">รองรับไฟล์นามสกุล jpg, png</p>
                      <img src="<?php echo isset($history_detail[0]->logo)? '/'.$history_detail[0]->logo:""; ?>" style="width: 120px;height: 120px;">
                    </div>
                  </div>
                    <!-- /.box-body -->
                    <textarea id="detail1" name="detail1" rows="10" cols="80">
                        <?php echo @$history_detail[0]->detail1; ?>
                    </textarea>

                  <div class="box-footer">
                    {!! csrf_field() !!}
                    <input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($history_detail[0]->id)? $history_detail[0]->id:""; ?>">
                    <input type="hidden" name="logo_old" id="logo_old" value="<?php echo @$history_detail[0]->logo; ?>">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
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
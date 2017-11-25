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

              <h3 class="box-title"><?php echo $type_form == 'create'? "บันทึกข้อมูล Popup Banner":"แก้ไขข้อมูล Popup Banner"; ?>
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/popup_banner') }}"><u style="font-size: 12px;">ย้อนกลับ</u></a>
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

                <form role="form" action="{{ url('admin/popup_banner/save') }}" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="">เริ่มวันที่  **วัน-เดือน-ปี</label>
                      <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <?php
                            if(isset($result[0]->start_date)){
                                $temp1 = explode(' ', $result[0]->start_date);
                                $temp2 = explode('-', $temp1[0]);
                                $start_date = $temp2[2].'-'.$temp2[1].'-'.$temp2[0];
                            }else{
                                $start_date = date('d-m-Y');
                            }
                          ?>
                          <input type="text" class="form-control pull-right" name="start_date" id="start_date" value="<?php echo $start_date; ?>" style="width: 30%;float: left !important;">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="">ถึงวันที่  **วัน-เดือน-ปี</label>
                      <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <?php
                            if(isset($result[0]->end_date)){
                                $temp1 = explode(' ', $result[0]->end_date);
                                $temp2 = explode('-', $temp1[0]);
                                $end_date = $temp2[2].'-'.$temp2[1].'-'.$temp2[0];
                            }else{
                                $end_date = date('d-m-Y');
                            }
                          ?>
                          <input type="text" class="form-control pull-right" name="end_date" id="end_date" value="<?php echo $end_date; ?>" style="width: 30%;float: left !important;">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="">แสดงทุกๆ</label>
                      <select class="form-control" name="show_every" id="show_every" style="width: 30%;">
                            <?php if(isset($result[0]->show_every)){ ?>
                                <option value="1 hr" <?php echo ($result[0]->show_every == "1 hr")? "selected":""; ?>>1 hr</option>
                                <option value="1 day" <?php echo ($result[0]->show_every == "1 day")? "selected":""; ?>>1 day</option>
                            <?php }else{ ?>
                                <option value="1 hr">1 hr</option>
                                <option value="1 day" selected>1 day</option>
                            <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="">Active</label>
                      <select class="form-control" name="active" id="active" style="width: 30%;">
                            <?php if(isset($result[0]->active)){ ?>
                                <option value="1" <?php echo ($result[0]->active == 1)? "selected":""; ?>>เปิด</option>
                                <option value="0" <?php echo ($result[0]->active == 0)? "selected":""; ?>>ปิด</option>
                            <?php }else{ ?>
                                <option value="1">เปิด</option>
                                <option value="0">ปิด</option>
                            <?php } ?>
                      </select>
                    </div>

                    <!-- <div class="form-group" style="">
                        <label for="">รายละเอียด</label>
                        <textarea id="detail1" name="detail1" rows="10" cols="80">
                            <?php echo @$result[0]->detail1; ?>
                        </textarea>
                    </div> -->

                    <div class="form-group">
                      <label for="">อัปโหลดไฟล์</label>
                      <input type="file" name="image_popup" id="image_popup">

                      <p class="help-block">รองรับไฟล์ jpg, png เท่านั้น</p>
                        <p>
                        <a href="<?php echo isset($result[0]->image_popup)? '/'.$result[0]->image_popup:''; ?>" target="_blank">{{ @$result[0]->image_popup }}</a>
                        </p>
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    {!! csrf_field() !!}
                    <input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($result[0]->id)? $result[0]->id:""; ?>">
                    <input type="hidden" name="img_old" id="img_old" value="<?php echo isset($result[0]->image_popup)? ''.$result[0]->image_popup:''; ?>">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <a href="{{ url('/admin/popup_banner') }}" class="btn btn-warning">ยกเลิก</a>
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
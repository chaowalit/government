@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php //echo $menu_name; ?>
        หน้าข่าวกิจกรรม
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
        <li><a href="#" class="active">หน้าข่าวกิจกรรม<?php //echo $menu_name; ?></a></li>
        <!-- <li class="active">Blank page</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title"><?php echo $type_form == 'create'? "บันทึกข้อมูลหน้าข่าวกิจกรรม":"แก้ไขข้อมูลหน้าข่าวกิจกรรม"; ?>
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/activity_news') }}"><u style="font-size: 12px;">ย้อนกลับ</u></a>
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

                <form role="form" action="{{ url('admin/activity_news/save') }}" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">หัวข้อข่าว</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="หัวข้อข่าว" value="<?php echo isset($result[0]->title)? $result[0]->title:""; ?>">
                    </div>

                    <div class="form-group">
                      <label for="">วันที่ประกาศ  **วัน-เดือน-ปี</label>
                      <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <?php
                            if(isset($result[0]->post_date)){
                                $temp1 = explode(' ', $result[0]->post_date);
                                $temp2 = explode('-', $temp1[0]);
                                $post_date = $temp2[2].'-'.$temp2[1].'-'.$temp2[0];
                            }else{
                                $post_date = date('d-m-Y');
                            }
                          ?>
                          <input type="text" class="form-control pull-right" name="post_date" id="datepicker" value="<?php echo $post_date; ?>" style="width: 30%;float: left !important;">
                        </div>
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

                    <div class="form-group" style="">
                        <label for="">รายละเอียด</label>
                        <textarea id="detail1" name="detail1" rows="10" cols="80">
                            <?php echo @$result[0]->detail1; ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                      <label for="">อัปโหลดไฟล์</label>
                      <input type="file" name="file_path[]" id="file_path" multiple>

                      <p class="help-block">รองรับไฟล์ jpg, png เท่านั้น</p>
                        <p>
                        <!-- <a href="<?php echo isset($result[0]->file_path)? '/'.$result[0]->file_path:''; ?>" target="_blank">{{ @$result[0]->file_path }}</a>
                        </p> -->
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    {!! csrf_field() !!}
                    <input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($result[0]->id)? $result[0]->id:""; ?>">
                    <input type="hidden" name="img_old" id="img_old" value="<?php echo isset($result[0]->file_path)? ''.$result[0]->file_path:''; ?>">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <a href="{{ url('/admin/activity_news') }}" class="btn btn-warning">ยกเลิก</a>
                  </div>
                </form>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th style="width: 10%;text-align: center;">เลือก</th>
                            <th>รูปภาพ</th>
                            <th style="width: 20%;text-align: center;"></th>
                        </tr>
                        <?php
                            if(isset($result[0]->file_path)){
                            $path = public_path('uploads/news/'.$result[0]->file_path);
                            foreach(glob($path.'/*.*') as $file) {
                                $temp = explode('/', $file);
                                $file_name = $temp[count($temp)-1];
                        ?>
                            <tr>
                                <td style="text-align: center;">
                                    <?php
                                        if($result[0]->show_img == $file_name){
                                            echo "<b style='color: green;'>OK</b>";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo '/uploads/news/'.$result[0]->file_path.'/'.$file_name; ?>" target="_blank">
                                    <img src="<?php echo asset('uploads/news/'.$result[0]->file_path).'/'.$file_name; ?>" style="width:150px;height: 100px;">
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <a href="<?php echo url('/admin/activity_news/select').'/'.$result[0]->id.'/'.$file_name; ?>">เลือก</a>
                                    &nbsp;&nbsp;
                                    <a href="<?php echo url('/admin/activity_news/delete').'/'.$result[0]->id.'/'.$result[0]->file_path.'/'.$file_name; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">
                                        ลบรูปภาพ
                                    </a>
                                </td>
                            </tr>
                        <?php
                            } }
                        ?>
                    </tbody>
                </table>
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
@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php //echo $menu_name; ?>
        วีดีโอวิดิทัศน์
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
        <li><a href="#" class="active">วีดีโอวิดิทัศน์<?php //echo $menu_name; ?></a></li>
        <!-- <li class="active">Blank page</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title">แสดงหน้าวีดีโอวิดิทัศน์ ทั้งหมด
                <!-- <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small> -->
                <a href="{{ url('/admin/vdo/form') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>
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
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th style="text-align: center;width: 10px;">Active</th>
                              <th>หัวข้อ</th>
                              <th>วันที่ประกาศ</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($vdo[0])){ 
                                    foreach ($vdo as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>{{ $v->title }}</td>
                              <td>
                                {{ $v->post_date }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/admin/vdo/edit').'/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/admin/vdo/delete').'/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                              </td>
                            </tr>
                            <?php } } ?>
                          </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
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
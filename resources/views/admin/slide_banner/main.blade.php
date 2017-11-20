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

              <h3 class="box-title">แสดงภาพ Banner ทั้งหมด
                <!-- <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small> -->
                <a href="{{ url('/admin/slide_banner/form') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>
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
                              <th style="text-align: center;">Active</th>
                              <th>รูปภาพ</th>
                              <th>ข้อความ1</th>
                              <th>ข้อความ2</th>
                              <th style="width: 20%;"></th>
                            </tr>

                            <?php if(isset($slide_banner[0])){ 
                                    foreach ($slide_banner as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>
                                <img src="<?php echo '/'.$v->img_banner; ?>" style="width: 100px;height: 50px;">
                              </td>
                              <td>
                                  {{ $v->text1 }}
                              </td>
                              <td>
                                  {{ $v->text2 }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/admin/slide_banner/edit').'/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/admin/slide_banner/delete').'/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
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
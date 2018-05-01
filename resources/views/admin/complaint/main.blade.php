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

              <h3 class="box-title">ร้องเรียน/ร้องทุกข์ทั้งหมด
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/complaint') }}"><u style="font-size: 12px;">รีเฟรส</u></a>
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

                <table class="table table-striped">
                    <tbody>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>อายุ</th>
                          <th>เพศ</th>
                          <th>อาชีพ</th>
                          <th style="width: 50px;"></th>
                        </tr>

                        <?php if(isset($ComplainRequest[0])){ 
                                foreach ($ComplainRequest as $k => $v) {
                        ?>
                        <tr>
                          <td>{{ ++$k }}</td>
                          <td>
                            <label style="width: 250px;word-wrap: break-word;">{{ $v->full_name }}</label>
                        </td>
                          <td>
                            {{ $v->age }}
                          </td>
                          <td>
                            {{ $v->sex }}
                          </td>
                          <td>
                            {{ $v->career }}
                          </td>
                          <td>
                            <a href="<?php echo url('/admin/complaint/delete').'/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                          </td>
                        </tr>
                        <?php } } ?>
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
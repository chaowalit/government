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

              <h3 class="box-title">ร้องเรียน/ร้องทุกข์
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>&nbsp;
                <a href="{{ url('/admin/complaint') }}"><u style="font-size: 12px;"> <<< ย้อนกลับ</u></a>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <a href="{{ url('/admin/complaint') }}" type="button" class="btn btn-info btn-sm"  data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></a>
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
                          <th style="width: 200px">รายการ</th>
                          <th>ข้อมูล</th>
                        </tr>
                        <?php if(isset($ComplainRequest[0])){ ?>
                        <tr>
                            <td>1.</td>
                            <td>ชื่อ-นามสกุล</td>
                            <td>{{ $ComplainRequest[0]->full_name }}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>เลขบัตรประจำตัวประชาชน</td>
                            <td>{{ $ComplainRequest[0]->thai_id }}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>อายุ</td>
                            <td>{{ $ComplainRequest[0]->age }}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>เพศ</td>
                            <td>{{ $ComplainRequest[0]->sex }}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>อาชีพ</td>
                            <td>{{ $ComplainRequest[0]->career }}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>โทรศัพท์</td>
                            <td>{{ $ComplainRequest[0]->tel }}</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Fax</td>
                            <td>{{ $ComplainRequest[0]->fax }}</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Email</td>
                            <td>{{ $ComplainRequest[0]->email }}</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>ที่อยู่</td>
                            <td>{{ $ComplainRequest[0]->address }}</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>ชื่อเรื่อง</td>
                            <td>{{ $ComplainRequest[0]->title }}</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>รายละเอียด</td>
                            <td>{{ $ComplainRequest[0]->detail }}</td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>วันที่บันทึก</td>
                            <td>{{ $ComplainRequest[0]->created_at }}</td>
                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>วันที่อัพเดท</td>
                            <td>{{ $ComplainRequest[0]->updated_at }}</td>
                        </tr>
                        <?php } ?>

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
@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo @$menu_name; ?>
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
        <li><a href="#" class="active"><?php echo @$menu_name; ?></a></li>
        <!-- <li class="active">Blank page</li> -->
      </ol>
    </section>

    <!-- Main content -->
  <form action="{{ url('/admin/survey/export_excel') }}" method="POST" style="display: inline;">
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title">แสดงผลสถิติการเข้าใช้งาน
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <button type="button" id="search_word"><u style="font-size: 14px;">ค้นหาตามวันที่</u></button>
                &nbsp;&nbsp;&nbsp;
                  {!! csrf_field() !!}
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

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" value="<?php echo $start_date; ?>" id="start_date">
                                </div>
                              </div>
                              <div class="col-md-2" style="text-align: center;">ถึงวันที่</div>
                              <div class="col-md-5">
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" value="<?php echo $end_date; ?>" id="end_date">
                                </div>
                              </div>
                            </div>
                          </th>
                          <th style="width: 90px">จำนวน</th>
                          <!-- <th style="width: 90px">คิดเป็น %</th> -->
                        </tr>
                      <tr>
                          <td></td>
                          <td>รวมทั้งหมด
                          </td>
                          <!-- <td>
                          </td> -->
                          <td>
                              <span class="badge bg-green">
                                <?php echo count($visit_website); ?>
                              </span>
                          </td>
                        </tr>
                      </tbody></table>
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
  </form>
  </div>
    <style type="text/css">
        .ul-non {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .break-word {
          width: 48em;
          /*background: lime;*/
          overflow-wrap: break-word;
        }
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 13px;
            font-weight: 500;
            line-height: 1.3;
            color: #fff;
            text-align: left;
            white-space: unset;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px;
        }
    </style>
@endsection
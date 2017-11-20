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

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> >>> ข้อมูลข่าวสารตามมาตรา 7 </h3>&nbsp;
            <a href="{{ url('/online_electronic_data/form?table=online_data_section_7') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">หมวดหมู่</th>
                  <th style="width: 50%;">ชื่อข้อมูลข่าวสาร</th>
                  <th style="width: 10%;">ดูเอกสาร</th>
                  <th style="width: 10%;"></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($result_1 as $key => $value) { ?>
                        <tr>
                          <td>{{ (++$key) }}</td>
                          <td>
                            {{ $value->sub_menu_name }}
                          </td>
                          <td>{{ $value->news_info_name }}</td>
                          <td>
                            <a href="{{ $value->file_name }}" target="_blank"><i class="fa fa-fw fa-paperclip"></i></a>
                        </td>
                          <td style="text-align: center;">
                              <a href="<?php echo url('/online_electronic_data/edit/online_data_section_7').'/'.$value->online_data_section_7_info_id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                              <a href="<?php echo url('/online_electronic_data/delete/online_data_section_7').'/'.$value->online_data_section_7_info_id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                          </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body --> 
        <!-- <div class="box-footer">
          -
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> >>> ข้อมูลข่าวสารตามมาตรา 9</h3> &nbsp;
          <a href="{{ url('/online_electronic_data/form?table=online_data_section_9') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">หมวดหมู่</th>
                  <th style="width: 50%;">ชื่อข้อมูลข่าวสาร</th>
                  <th style="width: 10%;">ดูเอกสาร</th>
                  <th style="width: 10%;"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result_2 as $key => $value) { ?>
                        <tr>
                          <td>{{ (++$key) }}</td>
                          <td>
                            {{ $value->sub_menu_name }}
                          </td>
                          <td>{{ $value->news_info_name }}</td>
                          <td>
                            <a href="{{ $value->file_name }}" target="_blank"><i class="fa fa-fw fa-paperclip"></i></a>
                        </td>
                          <td style="text-align: center;">
                              <a href="<?php echo url('/online_electronic_data/edit/online_data_section_9').'/'.$value->online_data_section_9_info_id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                              <a href="<?php echo url('/online_electronic_data/delete/online_data_section_9').'/'.$value->online_data_section_9_info_id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                          </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          -
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> >>> จัดซื้อจัดจ้าง/การเงิน <!--สัญญาอื่นๆ--></h3> &nbsp;
          <a href="{{ url('/online_electronic_data/form?table=online_contract_other') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">หมวดหมู่</th>
                  <th style="width: 50%;">ชื่อข้อมูลข่าวสาร</th>
                  <th style="width: 10%;">ดูเอกสาร</th>
                  <th style="width: 10%;"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result_3 as $key => $value) { ?>
                        <tr>
                          <td>{{ (++$key) }}</td>
                          <td>
                            {{ $value->sub_menu_name }}
                          </td>
                          <td>{{ $value->news_info_name }}</td>
                          <td>
                            <a href="{{ $value->file_name }}" target="_blank"><i class="fa fa-fw fa-paperclip"></i></a>
                        </td>
                          <td style="text-align: center;">
                              <a href="<?php echo url('/online_electronic_data/edit/online_contract_other').'/'.$value->online_contract_other_info_id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                              <a href="<?php echo url('/online_electronic_data/delete/online_contract_other').'/'.$value->online_contract_other_info_id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                          </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          -
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

        <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> >>> สรุปรายงาน <!--เอกสารอื่นๆ ที่ต้องรายงาน--></h3> &nbsp;
          <a href="{{ url('/online_electronic_data/form?table=online_document_other_neccessary') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">หมวดหมู่</th>
                  <th style="width: 50%;">ชื่อข้อมูลข่าวสาร</th>
                  <th style="width: 10%;">ดูเอกสาร</th>
                  <th style="width: 10%;"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result_4 as $key => $value) { ?>
                        <tr>
                          <td>{{ (++$key) }}</td>
                          <td>
                            {{ $value->sub_menu_name }}
                          </td>
                          <td>{{ $value->news_info_name }}</td>
                          <td>
                            <a href="{{ $value->file_name }}" target="_blank"><i class="fa fa-fw fa-paperclip"></i></a>
                        </td>
                          <td style="text-align: center;">
                              <a href="<?php echo url('/online_electronic_data/edit/online_document_other_neccessary').'/'.$value->online_document_other_neccessary_info_id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                              <a href="<?php echo url('/online_electronic_data/delete/online_document_other_neccessary').'/'.$value->online_document_other_neccessary_info_id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                          </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          -
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> >>> ข้อมูลข่าวสารอื่นๆ <!--ข้อมูลข่าวสารที่น่าสนใจ--></h3> &nbsp;
          <a href="{{ url('/online_electronic_data/form?table=online_document_interesting') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="example5" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">หมวดหมู่</th>
                  <th style="width: 50%;">ชื่อข้อมูลข่าวสาร</th>
                  <th style="width: 10%;">ดูเอกสาร</th>
                  <th style="width: 10%;"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result_5 as $key => $value) { ?>
                        <tr>
                          <td>{{ (++$key) }}</td>
                          <td>
                            {{ $value->sub_menu_name }}
                          </td>
                          <td>{{ $value->news_info_name }}</td>
                          <td>
                            <a href="{{ $value->file_name }}" target="_blank"><i class="fa fa-fw fa-paperclip"></i></a>
                        </td>
                          <td style="text-align: center;">
                              <a href="<?php echo url('/online_electronic_data/edit/online_document_interesting').'/'.$value->online_document_interesting_info_id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                              <a href="<?php echo url('/online_electronic_data/delete/online_document_interesting').'/'.$value->online_document_interesting_info_id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                          </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>

        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          -
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->



    </section>
    <!-- /.content -->
  </div>

  <style type="text/css">

  </style>

@endsection
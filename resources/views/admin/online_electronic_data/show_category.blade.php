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

              <h3 class="box-title">แสดงหมวดหมู่ข่าวสารอิเล็กทรอนิกส์ของราชการ
                <!-- <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small> -->
                <a href="{{ url('/online_electronic_data/form_category') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>
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
                              <th colspan="4" style="text-align: center;background-color: #d2d6de;">
                                  หมวดหมู่ข้อมูลข่าวสารตามมาตรา 7
                              </th>
                            </tr>
                            <tr>
                              <th style="width: 10px;">#</th>
                              <th style="width: 30px;text-align: center;">Active</th>
                              <th>ชื่อหมวดหมู่</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($online_data_section_7[0])){ 
                                    foreach ($online_data_section_7 as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>
                                {{ $v->sub_menu_name }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/online_electronic_data/edit_category').'/online_data_section_7/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/online_electronic_data/delete_category').'/online_data_section_7/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                              </td>
                            </tr>
                            <?php } } ?>
                          </tbody>
                      </table>
                        <br><hr>
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody>
                            <tr>
                              <th colspan="4" style="text-align: center;background-color: #d2d6de;">
                                  หมวดหมู่ข้อมูลข่าวสารตามมาตรา 9
                              </th>
                            </tr>
                            <tr>
                              <th style="width: 10px;">#</th>
                              <th style="width: 30px;text-align: center;">Active</th>
                              <th>ชื่อหมวดหมู่</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($online_data_section_9[0])){ 
                                    foreach ($online_data_section_9 as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>
                                {{ $v->sub_menu_name }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/online_electronic_data/edit_category').'/online_data_section_9/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/online_electronic_data/delete_category').'/online_data_section_9/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                              </td>
                            </tr>
                            <?php } } ?>
                          </tbody>
                      </table>
                  </div>
                      <br><hr>
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody>
                            <tr>
                              <th colspan="4" style="text-align: center;background-color: #d2d6de;">
                                  จัดซื้อจัดจ้าง/การเงิน
                              </th>
                            </tr>
                            <tr>
                              <th style="width: 10px;">#</th>
                              <th style="width: 30px;text-align: center;">Active</th>
                              <th>ชื่อหมวดหมู่</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($contract_other[0])){ 
                                    foreach ($contract_other as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>
                                {{ $v->sub_menu_name }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/online_electronic_data/edit_category').'/contract_other/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/online_electronic_data/delete_category').'/contract_other/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                              </td>
                            </tr>
                            <?php } } ?>
                          </tbody>
                      </table>
                    </div>
                      <br><hr>
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody>
                            <tr>
                              <th colspan="4" style="text-align: center;background-color: #d2d6de;">
                                  สรุปรายงาน
                              </th>
                            </tr>
                            <tr>
                              <th style="width: 10px;">#</th>
                              <th style="width: 30px;text-align: center;">Active</th>
                              <th>ชื่อหมวดหมู่</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($document_other_neccessary[0])){ 
                                    foreach ($document_other_neccessary as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>
                                {{ $v->sub_menu_name }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/online_electronic_data/edit_category').'/document_other_neccessary/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/online_electronic_data/delete_category').'/document_other_neccessary/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                              </td>
                            </tr>
                            <?php } } ?>
                          </tbody>
                      </table>
                    </div>
                      <br><hr>
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody>
                            <tr>
                              <th colspan="4" style="text-align: center;background-color: #d2d6de;">
                                  ข้อมูลข่าวสารอื่นๆ
                              </th>
                            </tr>
                            <tr>
                              <th style="width: 10px;">#</th>
                              <th style="width: 30px;text-align: center;">Active</th>
                              <th>ชื่อหมวดหมู่</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($document_interesting[0])){ 
                                    foreach ($document_interesting as $k => $v) {
                            ?>
                            <tr>
                              <td>{{ ++$k }}</td>
                              <td style="text-align: center;">{{ $v->active }}</td>
                              <td>
                                {{ $v->sub_menu_name }}
                              </td>
                              <td>
                                  <a href="<?php echo url('/online_electronic_data/edit_category').'/document_interesting/'.$v->id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/online_electronic_data/delete_category').'/document_interesting/'.$v->id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
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
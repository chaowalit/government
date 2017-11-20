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
          <h3 class="box-title">แสดงผลรูปแบบเมนูหน้าแรก</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <div class="row">
                <div class="col-md-12">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"> *** ถ้าต้องการปรับเปลี่ยนเมนูกรุณาติดต่อ admin</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered" style="font-size: 12px;">
                        <tr>
                          <th style="width: 10%">หน้าแรก</th>
                          <th style="width: 16%">เกี่ยวกับหน่วยงาน</th>
                          <th style="width: 19%">ข้อมูลบริการ</th>
                          <th style="width: 25%">ศูนย์ข้อมูลข่าวสารออนไลน์</th>
                          <th style="width: 15%">สมุดเยื่ยม</th>
                          <th style="width: 15%">ติดต่อเรา</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <ul class="list-unstyled">
                                  <li>-> ประวัติความเป็นมา</li>
                                  <li>-> พันธกิจและวิสัยทัศน์</li>
                                  <li>-> สานส์จากผู้บริหาร</li>
                                  <li>-> โครงสร้างบุคคลากร
                                    <ul>
                                      <li>ผู้บริหาร</li>
                                      <li>ฝ่ายสภา</li>
                                      <li>สำนักปลัด</li>
                                      <li>กองคลัง</li>
                                      <li><label style="color: red";>***</label> แก้ไข เพิ่มเติมได้</li>
                                    </ul>
                                  </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-unstyled">
                                  <li>-> แผนงาน 
                                        <ul>
                                          <li>แผนพัฒนา 4 ปี</li>
                                          <li>แผนดำเนินงาน</li>
                                          <li>แผนอัตรากำลัง</li>
                                          <li>แผนจัดหาพัสดุ</li>
                                          <li>แผนเทศบัญญัติ</li>
                                          <li><label style="color: red";>***</label> แก้ไข เพิ่มเติมได้</li>
                                        </ul>
                                  </li>
                                  <li>-> รายงาน 
                                        <ul>
                                          <li>รายงานผลดำเนินงาน</li>
                                          <li>รายงานผลการจัดซื้อ-จัดจ้าง</li>
                                          <li>รายงานงบการเงิน</li>
                                          <li>รายงานประชุมสภา</li>
                                          <li>รายงานประชุมสภา</li>
                                          <li><label style="color: red";>***</label> แก้ไข เพิ่มเติมได้</li>
                                        </ul>
                                  </li>
                                  <li>-> เอกสารเผยแพร่ </li>
                                  <li>-> คู่มือประชาชน</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-unstyled">
                                  <li>-> ข้อมูลข่าวสารอิเล็กทรอนิกส์ของราชการ</li>
                                  <li>-> ร้องเรียน/ร้องทุกข์</li>
                                  <li>-> สำรวจการให้บริการศูนย์ข้อมูลฯ
                                    <ul>
                                      <li>แบบฟอร์มสำรวจความพึงพอใจ</li>
                                      <li>สรุปความพึงพอใจ</li>
                                      <li>สถิติผู้ใช้บริการ</li>
                                      <li>กระดานสอบถาม/ข้อคิดเห็น</li>
                                      <li><label style="color: red";>***</label> แก้ไข เพิ่มเติมได้</li>
                                    </ul>
                                  </li>
                                </ul>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                      </table>
                    </div>
                    <!-- /.box-body -->
                    <!-- <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div> -->
                  </div>
                  <!-- /.box -->
              </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          -
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection
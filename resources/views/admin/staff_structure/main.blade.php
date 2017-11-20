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

              <h3 class="box-title">แสดงโครงสร้างบุคลากรทั้งหมด
                <!-- <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small> -->
                <a href="{{ url('/admin/staff_structure/form') }}"><u style="font-size: 12px;">เพิ่มข้อมูล</u></a>
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
                <?php
                    if(isset($staff_structure[0])){
                        foreach ($staff_structure as $key => $value) {
                ?>
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">{{ $value->sub_menu_name }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>ชื่อ-นามสกุล</th>
                              <th>ตำแหน่ง</th>
                              <th style="width: 40px">รูป</th>
                              <th style="width: 10%;"></th>
                            </tr>

                            <?php if(isset($staff_structure_info[0])){ 
                                    $count = 0;
                                    foreach ($staff_structure_info as $k => $v) {
                                        if($v->staff_structure_id == $value->id){
                            ?>
                            <tr>
                              <td>{{ ++$count }}</td>
                              <td>{{ $v->full_name }}</td>
                              <td>
                                {{ $v->position }}
                              </td>
                              <td>
                                  <img src="<?php echo '/'.$v->img_profile; ?>" style="width: 50px;height: 50px;">
                              </td>
                              <td>
                                  <a href="<?php echo url('/admin/staff_structure/edit').'/'.$v->staff_structure_info_id; ?>">ดู/แก้ไข</a> 
                              &nbsp;&nbsp; 
                                <a href="<?php echo url('/admin/staff_structure/delete').'/'.$v->staff_structure_info_id; ?>" onclick="return confirm('คุณต้องการลบรายการนี้หรือไม่ ?')">ลบ</a>
                              </td>
                            </tr>
                            <?php } } } ?>
                          </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                <?php } } ?>
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
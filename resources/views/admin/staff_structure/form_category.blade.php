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

              <h3 class="box-title"><?php echo ($type_form == 'create')? "บันทึกหมวดหมู่โครงสร้างบุคลากร":"แก้ไขหมวดหมู่โครงสร้างบุคลากร"; ?>
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/staff_structure/category') }}"><u style="font-size: 12px;">ย้อนกลับ</u></a>
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
                <div class="col-md-8">

                    <?php if(session('bg_color') == 'success'){ ?>
                    <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo session('msg'); ?>
                      </div>
                    <?php } ?>

                    <form role="form" action="{{ url('/admin/staff_structure/save_category') }}" method="POST" enctype="multipart/form-data">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="">ชือหมวดหมู่</label>
                          <input type="text" class="form-control" name="sub_menu_name" id="sub_menu_name" placeholder="ชือหมวดหมู่" value="<?php echo (isset($result[0]->sub_menu_name))? $result[0]->sub_menu_name:""; ?>">
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
                        <div class="form-group">
                          <label for="">ลำดับที่</label>
                          <input type="number" class="form-control" name="order_by" id="order_by" placeholder="ลำดับที่" value="<?php echo (isset($result[0]->order_by))? $result[0]->order_by:""; ?>">
                        </div>

                        <div class="form-group">
                          <label for="">อำนาจหน้าที่</label>
                          <textarea name="role" id="role" rows="10" cols="80">
                            <?php echo (isset($result[0]->role))? $result[0]->role:""; ?>
                          </textarea>
                        </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        {!! csrf_field() !!}
                        <input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($result[0]->id)? $result[0]->id:''; ?>">

                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ url('/admin/staff_structure/category') }}" class="btn btn-warning">ยกเลิก</a>
                      </div>
                    </form>

                </div>
                <div class="col-md-4"></div>
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
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
          <h3 class="box-title"> >>> 
				<?php if($table_type == "online_data_section_7"){
					echo ($type_form == "create")? "บันทึกข้อมูลข่าวสารตามมาตรา 7":"แก้ไขข้อมูลข่าวสารตามมาตรา 7";
				}else if($table_type == "online_data_section_9"){
					echo ($type_form == "create")? "บันทึกข้อมูลข่าวสารตามมาตรา 9":"แก้ไขข้อมูลข่าวสารตามมาตรา 9";
				}else if($table_type == "online_contract_other"){
					echo ($type_form == "create")? "บันทึกข้อมูลจัดซื้อจัดจ้าง/การเงิน":"แก้ไขข้อมูลจัดซื้อจัดจ้าง/การเงิน";
				}else if($table_type == "online_document_other_neccessary"){
					echo ($type_form == "create")? "บันทึกข้อมูล สรุปรายงาน":"แก้ไขข้อมูล สรุปรายงาน";
				}else if($table_type == "online_document_interesting"){
					echo ($type_form == "create")? "บันทึกข้อมูลข่าวสารอื่นๆ":"แก้ไขข้อมูลข่าวสารอื่นๆ";
				}

				?>
          </h3>&nbsp;
            <a href="{{ url('/online_electronic_data') }}"><u style="font-size: 12px;">ย้อนกลับ</u></a>

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
		        <!-- left column -->
		        <div class="col-md-6">
					<?php if(session('bg_color') == 'success'){ ?>
					<div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <?php echo session('msg'); ?>
		              </div>
					<?php } ?>
		        	<!-- form start -->
		            <form role="form" action="{{ url('online_electronic_data/save') }}" method="POST" enctype="multipart/form-data">
		              <div class="box-body">
		              	<div class="form-group">
		                  <label for="">กรุณาเลือกหมวดหมู่ <b style="color: red;"> *</b></label>
		                  <select class="form-control" name="cat_id" id="cat_id">
		                  	<?php foreach ($cat as $key => $value) { ?>
		                  		<?php if(isset($temp_cat_id)){ ?>
									<option value="<?php echo $value->id; ?>" <?php echo ($temp_cat_id == $value->id)? "selected":""  ?>><?php echo $value->sub_menu_name; ?></option>
		                  		<?php }else{ ?>
		                  		<option value="<?php echo $value->id; ?>"><?php echo $value->sub_menu_name; ?></option>
		                  		<?php } ?>
		                  	<?php } ?>
		                  </select>
		                </div>
		                <div class="form-group">
		                  <label for="">ชื่อข้อมูลข่าวสาร <b style="color: red;"> *</b></label>
		                  <input type="text" class="form-control" name="news_info_name" id="news_info_name" placeholder="ชื่อข้อมูลข่าวสาร" value="<?php echo isset($result[0]->news_info_name)? $result[0]->news_info_name:''; ?>">
		                </div>
		                <div class="form-group">
		                  <label for="">ชั้นวาง</label>
		                  <input type="text" class="form-control" name="floor_at" id="floor_at" placeholder="ชั้นวาง" value="<?php echo isset($result[0]->floor_at)? $result[0]->floor_at:''; ?>">
		                </div>
		                <div class="form-group">
		                  <label for="">แฟ้มที่</label>
		                  <input type="text" class="form-control" name="doc_at" id="doc_at" placeholder="แฟ้มที่" value="<?php echo isset($result[0]->doc_at)? $result[0]->doc_at:''; ?>">
		                </div>
		                <div class="form-group">
		                  <label for="">Upload File</label>
		                  <input type="file" id="file_name" name="file_name">

		                  <p class="help-block">รองรับไฟล์ PDF เท่านั้น</p>
		                  <p class="help-block"><a href="<?php echo isset($result[0]->file_name)? $result[0]->file_name:''; ?>" target="_blank"><?php echo isset($result[0]->file_name)? $result[0]->file_name:''; ?></a></p>
		                </div>
		                <!-- <div class="checkbox">
		                  <label>
		                    <input type="checkbox"> Check me out
		                  </label>
		                </div> -->
		              </div>
		              <!-- /.box-body -->

		              <div class="box-footer">
		              	{!! csrf_field() !!}
						<input type="hidden" name="table_type" id="table_type" value="<?php echo $table_type; ?>">
						<input type="hidden" name="edit_id" id="edit_id" value="<?php echo isset($result[0]->id)? $result[0]->id:''; ?>">
						<input type="hidden" name="img_old" id="img_old" value="<?php echo isset($result[0]->file_name)? $result[0]->file_name:''; ?>">

		                <button type="submit" class="btn btn-primary">บันทึก</button>
		                <a href="{{ url('online_electronic_data') }}" class="btn btn-danger">ยกเลิก</a>
		              </div>
		            </form>
		        </div>
		        <div class="col-md-6">
		        	
		        </div>
		    </div>

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
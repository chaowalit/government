<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo \Config::get('config_memu.main_4.main_show'); ?></h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="#">หน้าแรก</a></li>
          <li><?php echo \Config::get('config_memu.main_4.level_7'); ?></li>
          <li>แบบฟอร์มสำรวจความพึงพอใจ</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<!-- Start Content -->
<div id="content">
  <div class="container">
    <div class="row sidebar-page">

      <!--Sidebar-->
      <div class="col-md-1">

      </div>
      <!--End sidebar-->

	<!-- Page Content -->
  <div class="col-md-10 page-content custom-right-sidebar">

    <div class="blog-post image-post">
      <!-- Post Content -->
      <div class="post-content" style="text-align: center;padding-left: 0px;">
        <h2>
        	แบบสำรวจความพึงพอใจเกี่ยวกับการให้บริการข้อมูลข่าวสาร<br>
        	<a href="#"><?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>
        	</a>
        </h2>
        <ul class="post-meta">
          <li style="float: left;text-align: left;">
          	 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          	 	โปรดคลิกเลือกในรายการตามความเป็นจริง หรือที่ตรงกับความคิดเห็นหรือความรู้สึกของท่านมากที่สุด เพื่อนำข้อมูลที่ได้รับไปใช้ประโยชน์ในการพัฒนาและปรับปรุงการบริหารจัดการด้านการเปิดเผยและให้บริการข้อมูลข่าวสารของ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?> ให้มีประสิทธิภาพมากยิ่งขึ้น
          </li>
          <!-- <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
          <li><a href="#">4 Comments</a></li> -->
        </ul>
        <br><hr>
      </div>
        <?php if(session('bg_color')){ ?>
            <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo session('msg'); ?>
            </div>
        <?php } ?>
      	<form action="{{ url('survey/save') }}" method="post">
      	<div class="panel-group">
	      	<div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-1">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 1. เพศ
						</a>
					</h4>
	            </div>
	            <div id="collapse-1" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="sex" value="male"> ชาย
		                </label>
		                <label>
		                  <input type="radio" name="sex" value="female"> หญิง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-2">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 2. อายุ
						</a>
					</h4>
	            </div>
	            <div id="collapse-2" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="age" value="<20"> ต่ำกว่า 20 ปี
		                </label>
		                <label>
		                  <input type="radio" name="age" value="20-30"> 20-30 ปี
		                </label>
		                <label>
		                  <input type="radio" name="age" value="30-40"> 30-40 ปี
		                </label>
		                <label>
		                  <input type="radio" name="age" value="40>"> 40 ปีขึ้นไป
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-3">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 3. อาชีพของผู้รับบริการข้อมูลข่าวสาร
						</a>
					</h4>
	            </div>
	            <div id="collapse-3" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="career" value="career_1"> ข้าราชการ
		                </label>
		                <label>
		                  <input type="radio" name="career" value="career_2"> รัฐวิสาหกิจ
		                </label>
		                <label>
		                  <input type="radio" name="career" value="career_3"> ผู้ประกอบการภาคเอกชน
		                </label>
		                <label>
		                  <input type="radio" name="career" value="career_4"> ประชาชนทั่วไป
		                </label>
		                <label>
		                  <input type="radio" name="career" value="career_5"> อื่น ๆ
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-4">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 4. ข้อมูลข่าวสารที่ขอดูและ/หรือขอรับบริการ
						</a>
					</h4>
	            </div>
	            <div id="collapse-4" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="checkbox" name="data_info_do[]" value="data_info_do_1"> แผ่นพับแนะนำ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?> (โครงสร้างและการจัดองค์กรในการดำเนินงาน สรุปอำนาจหน้าที่ที่สำคัญและวิธีการดำเนินงาน และสถานที่ติดต่อเพื่อขอรับข้อมูลข่าวสารหรือคำแนะนำในการติดต่อกับหน่วยงานของรัฐ
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_do[]" value="data_info_do_2"> กฎ มติคณะรัฐมนตรี ข้อบังคับ คำสั่ง หนังสือเวียน ระเบียบ แบบแผน นโยบายหรือการตีความ ทั้งนี้ เฉพาะที่จัดให้มีขึ้นโดยมีสภาพอย่างกฎ เพื่อให้มีผลเป็นการทั่วไปต่อเอกชนที่เกี่ยวข้อง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-5">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 5. ข้อมูลข่าวสารตามมาตรา 9 แห่งกฎหมายข้อมูลข่าวสารของราชการ
						</a>
					</h4>
	            </div>
	            <div id="collapse-5" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox" style="display: grid;">
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_1"> ผลการพิจารณาหรือคำวินิจฉัยที่มีผลโดยตรงต่อเอกชน  รวมทั้งความเห็นแย้งและคำสั่งที่เกี่ยวข้องในการพิจารณาวินิจฉัยดังกล่าว
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_2"> นโยบายและการตีความ
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_3"> แผนงาน  โครงการ  และงบประมาณรายจ่ายประจำปีของปีที่กำลังดำเนินการ
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_4"> คู่มือหรือคำสั่งเกี่ยวกับวิธีปฏิบัติงานของเจ้าหน้าที่ของรัฐซึ่งมีผลกระทบถึงสิทธิ หน้าที่ของเอกชน
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_5"> สิ่งพิมพ์ที่ได้มีการอ้างถึงในราชกิจจานุเบกษา
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_6"> สัญญาสัมปทาน  สัญญาที่มีลักษณะเป็นการผูกขาดตัดตอน  หรือสัญญาร่วมทุนกับเอกชนในการจัดทำบริการสาธารณะ
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_7"> มติคณะรัฐมนตรี หรือมติคณะกรรมการที่แต่งตั้งโดยกฎหมายหรือโดยมติคณะรัฐมนตรี
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_at9[]" value="data_info_at9_8"> ประกาศประกวดราคา  ประกาศสอบราคา  และสรุปผลการพิจารณาการจัดซื้อจัดจ้าง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-6">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 6. ข้อมูลข่าวสารอื่นๆ เป็นการทั่วไป
						</a>
					</h4>
	            </div>
	            <div id="collapse-6" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="checkbox" name="data_info_other[]" value="data_info_other_1"> แผ่นพับกระบวนงาน
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_other[]" value="data_info_other_2"> รายงานวิชาการ
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_other[]" value="data_info_other_3"> เอกสารเผยแพร่
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_other[]" value="data_info_other_4"> โปสเตอร์
		                </label>
		                <label>
		                  <input type="checkbox" name="data_info_other[]" value="data_info_other_5"> จุลสาร
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-7">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 7. ความสะดวก รวดเร็วในการค้นหาข้อมูล/เข้าถึงข้อมูลข่าวสาร
						</a>
					</h4>
	            </div>
	            <div id="collapse-7" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="easy_data" value="5"> ดีมาก
		                </label>
		                <label>
		                  <input type="radio" name="easy_data" value="4"> ดี
		                </label>
		                <label>
		                  <input type="radio" name="easy_data" value="3"> ปานกลาง
		                </label>
		                <label>
		                  <input type="radio" name="easy_data" value="2"> น้อย
		                </label>
		                <label>
		                  <input type="radio" name="easy_data" value="1"> ควรปรับปรุง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-8">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 8. ข้อมูลมีความถูกต้องและเป็นปัจจุบัน
						</a>
					</h4>
	            </div>
	            <div id="collapse-8" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="correct_data" value="5"> ดีมาก
		                </label>
		                <label>
		                  <input type="radio" name="correct_data" value="4"> ดี
		                </label>
		                <label>
		                  <input type="radio" name="correct_data" value="3"> ปานกลาง
		                </label>
		                <label>
		                  <input type="radio" name="correct_data" value="2"> น้อย
		                </label>
		                <label>
		                  <input type="radio" name="correct_data" value="1"> ควรปรับปรุง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-9">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 9. ข้อมูลที่ได้รับนำไปใช้ประโยชน์ได้อย่างมีประสิทธิภาพ
						</a>
					</h4>
	            </div>
	            <div id="collapse-9" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="use_data" value="5"> ดีมาก
		                </label>
		                <label>
		                  <input type="radio" name="use_data" value="4"> ดี
		                </label>
		                <label>
		                  <input type="radio" name="use_data" value="3"> ปานกลาง
		                </label>
		                <label>
		                  <input type="radio" name="use_data" value="2"> น้อย
		                </label>
		                <label>
		                  <input type="radio" name="use_data" value="1"> ควรปรับปรุง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-10">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 10. การให้บริการของเจ้าหน้าที่ (ความกระตือรือร้น ความสุภาพ อ่อนโยน การยิ้มแย้มแจ่มใส และการให้ความช่วยเหลือในการค้นหาข้อมูล)
						</a>
					</h4>
	            </div>
	            <div id="collapse-10" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="people_service" value="5"> ดีมาก
		                </label>
		                <label>
		                  <input type="radio" name="people_service" value="4"> ดี
		                </label>
		                <label>
		                  <input type="radio" name="people_service" value="3"> ปานกลาง
		                </label>
		                <label>
		                  <input type="radio" name="people_service" value="2"> น้อย
		                </label>
		                <label>
		                  <input type="radio" name="people_service" value="1"> ควรปรับปรุง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-11">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 11. ความสะดวกสบาย ความสะอาด และความสวยงามของสถานที่ที่ให้บริการ (ศูนย์ข้อมูลข่าวสาร)
						</a>
					</h4>
	            </div>
	            <div id="collapse-11" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="location_easy_use" value="5"> ดีมาก
		                </label>
		                <label>
		                  <input type="radio" name="location_easy_use" value="4"> ดี
		                </label>
		                <label>
		                  <input type="radio" name="location_easy_use" value="3"> ปานกลาง
		                </label>
		                <label>
		                  <input type="radio" name="location_easy_use" value="2"> น้อย
		                </label>
		                <label>
		                  <input type="radio" name="location_easy_use" value="1"> ควรปรับปรุง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-12">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 12. ภาพรวมต่อการให้บริการข้อมูลข่าวสารของ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>/ศูนย์ข้อมูลข่าวสาร
						</a>
					</h4>
	            </div>
	            <div id="collapse-12" class="panel-collapse collapse in">
	              <div class="panel-body">
	              	<div class="checkbox">
		                <label>
		                  <input type="radio" name="overview_data" value="5"> ดีมาก
		                </label>
		                <label>
		                  <input type="radio" name="overview_data" value="4"> ดี
		                </label>
		                <label>
		                  <input type="radio" name="overview_data" value="3"> ปานกลาง
		                </label>
		                <label>
		                  <input type="radio" name="overview_data" value="2"> น้อย
		                </label>
		                <label>
		                  <input type="radio" name="overview_data" value="1"> ควรปรับปรุง
		                </label>
		            </div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-13">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 13. ความคิดเห็นเกี่ยวกับการเปิดเผยข้อมูลข่าวสารของ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>
						</a>
					</h4>
	            </div>
	            <div id="collapse-13" class="panel-collapse collapse in">
	              <div class="panel-body">
	              		<div class="controls">
			                <textarea id="" rows="5" name="comments_open_data" style="width: 100%;">
			                </textarea>
			                <div class="help-block with-errors"></div>
		              	</div>
	              </div>
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#toggle" href="#collapse-14">
							<i class="fa fa-angle-up control-icon"></i>
							<i class="fa fa-desktop"></i> 14. ข้อเสนอแนะ/สิ่งที่ควรปรับปรุงอื่น ๆ
						</a>
					</h4>
	            </div>
	            <div id="collapse-14" class="panel-collapse collapse in">
	              <div class="panel-body">
	              		<div class="controls">
			                <textarea id="" rows="5" name="comments_other" style="width: 100%;">
			                </textarea>
			                <div class="help-block with-errors"></div>
		              	</div>
	              </div>
	            </div>
	        </div>
			<br>
			{!! csrf_field() !!}
	        <div class="button-side" style="text-align: right;">
                <a href="{{ url('/') }}" class="btn-system border-btn btn-large"><i class="icon-gift-1"></i> กลับหน้าแรก</a>
                <button type="submit" class="btn-system border-btn btn-large btn-gray">
                บันทึก
                </button>
            </div>
		</div>
		</form>
    </div>

  </div>
  <!-- End Page Content-->

		<!--Sidebar-->
      <div class="col-md-1">

      </div>

    </div>
  </div>
</div>
<!-- End Content -->

<style type="text/css">
    @media (min-width: 992px){
        .col-md-3 {
            width: 24%;
        }
    }
    .blog-post{
    	border-bottom: none;
    	margin-bottom: 0px !important;
    	padding-bottom: 0px !important;
    }
    .checkbox label {
    	display: block;
    }
</style>

@endsection
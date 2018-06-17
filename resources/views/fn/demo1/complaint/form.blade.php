<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo \Config::get('config_memu.main_3'); ?></h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="#">หน้าแรก</a></li>
          <li><?php echo \Config::get('config_memu.main_3'); ?></li>
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
      <div class="col-md-3 sidebar right-sidebar custom-page-content">

        <!-- Search Widget -->
        @include('fn.demo1.main.module_search')

        <!-- Popular Posts widget -->


        <!-- Tags Widget -->

      </div>
      <!--End sidebar-->

	<!-- Page Content -->
  <div class="col-md-9 page-content custom-right-sidebar">
<?php //echo "<pre>";print_r($contact_us[0]); ?>
    <div class="blog-post image-post">
      <!-- Post Content -->
      <div class="post-content" style="text-align: center;padding-left: 0px;">
        <h2><a href="#"><?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?></a></h2>
        <ul class="post-meta">
          <li>รับแจ้งข้อมูลทุจริต ประพฤติมิชอบ ไม่บริการประชาชนของพนักงานและลูกจ้าง 
            <?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>
            <br><br>
- ช่องทางให้หน่วยงานภาครัฐ ภาคเอกชน นิติบุคคล ประชาชนทั่วไป แจ้งปัญหา เรื่องร้องเรียน สอบถามข้อมูล หรือข้อเสนอแนะให้<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>ออนไลน์ <br>
คำแนะนำ : [คู่มือการแจ้งเรื่องร้องเรียน]

หรือสามารถยื่นผ่านช่องทางการรับเรื่องร้องเรียนร้องทุกข์อื่น ๆ ดังนี้ <br>
<p style="text-align: left;">
1. ติดต่อด้วยตนเอง <br>
2. ทางจดหมาย ถึง <?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?> <?php echo isset($contact_us[0]->address)? $contact_us[0]->address:""; ?><br>
3. ทางอีเมล์อิเล็กทรอนิกส์ - Email Address : <?php echo isset($contact_us[0]->email)? $contact_us[0]->email:""; ?><br>
4. ตู้รับฟังความคิดเห็น<br>
5. ผู้บังคับบัญชา หรือนายก<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?><br>
6. อื่นๆ (เพจ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?> หรือ <a href="<?php echo isset($contact_us[0]->facebook_url)? $contact_us[0]->facebook_url:""; ?>" target="_blank"><?php echo isset($contact_us[0]->facebook_url)? $contact_us[0]->facebook_url:""; ?></a>)
</p>
          </li>
          <!-- <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li> -->
          <!-- <li><a href="#">4 Comments</a></li>  -->
        </ul>
        <!-- <hr> -->
      </div>
        <?php if(session('bg_color')){ ?>
            <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo session('msg'); ?>
            </div>
        <?php } ?>
      <form action="{{ url('complaint/save') }}" method="post" id="contactForm" role="form">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group has-feedback">
                <label class="control-label">ชื่อ-สกุล ผู้ส่ง</label>
                <div class="controls">
                  <input class="form-control" name="full_name" id="full_name" type="text" required="true">
                   <i class="fa fa-pencil form-control-feedback" style="color: red;"></i>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="form-group has-feedback">
                <label class="control-label">เลขบัตรประชาชน</label>
                <div class="controls">
                  <input class="form-control" name="thai_id" id="thai_id" type="text" required="true">
                   <i class="fa fa-pencil form-control-feedback" style="color: red;"></i>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback">
                <label class="control-label">อายุ</label>
                <div class="controls">
                  <input class="form-control" name="age" id="age" type="number">
                   <i class="fa fa-pencil form-control-feedback"></i>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group has-feedback">
                    <label class="control-label">เพศ</label>
                    <div class="controls">
                        <select class="form-control" name="sex" id="sex">
                            <option value="ชาย" selected>ชาย</option>
                            <option value="หญิง">หญิง</option>
                        </select>
                       <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group has-feedback">
                    <label class="control-label">อาชีพ</label>
                    <div class="controls">
                        <select class="form-control" name="career" id="career">
                            <option value="" selected>กรุณาเลือก</option>
                            <option value="รับราชการ">รับราชการ</option>
                            <option value="รัฐวิสาหกิจ">รัฐวิสาหกิจ</option>
                            <option value="ผู้ประกอบการภาคเอกชน">ผู้ประกอบการภาคเอกชน</option>
                            <option value="ประชาชนทั่วไป">ประชาชนทั่วไป</option>
                        </select>
                       <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-feedback">
                <label class="control-label">โทรศัพท์</label>
                <div class="controls">
                  <input class="form-control" name="tel" id="tel" type="text" required="true">
                   <i class="fa fa-pencil form-control-feedback" style="color: red;"></i>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group has-feedback">
                    <label class="control-label">เบอร์แฟกซ์</label>
                    <div class="controls">
                      <input class="form-control" name="fax" id="fax" type="text">
                       <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label">อีเมล</label>
                <div class="controls">
                  <input class="form-control" name="email" id="email" type="text">
                   <i class="fa fa-pencil form-control-feedback"></i>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2"></div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group has-feedback">
                <label class="control-label">ที่อยู่</label>
                <div class="controls">
                    <textarea name="address" id="address" rows="3" placeholder="" required="" class="form-control"></textarea>
                   <i class="fa fa-pencil form-control-feedback"></i>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group has-feedback">
                <label class="control-label">เรื่องที่ร้องเรียน/ร้องทุกข์</label>
                <div class="controls">
                  <input class="form-control" name="title" id="title" type="text">
                   <i class="fa fa-pencil form-control-feedback"></i>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group has-feedback">
                <label class="control-label">รายละเอียด</label>
                <div class="controls">
                    <textarea name="detail" id="detail" rows="7" placeholder="" required="" class="form-control"></textarea>
                   <i class="fa fa-pencil form-control-feedback"></i>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
            <div class="col-md-4">
                {!! captcha_image_html('ExampleCaptcha') !!}
                <input type="text" id="CaptchaCode" name="CaptchaCode">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>

          <div style="padding: 6px 40px;" class="call-action call-action-boxed call-action-style1 clearfix">
            <!-- Call Action Button -->
            {!! csrf_field() !!}
            <div class="button-side">
                <a href="{{ url('/') }}" class="btn-system border-btn btn-large"><i class="icon-gift-1"></i> กลับหน้าแรก</a>
                <button type="submit" class="btn-system border-btn btn-large btn-gray">
                ส่งเรื่อง
                </button>
            </div>
          </div>
        </form>
    </div>

  </div>
  <!-- End Page Content-->

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
</style>

@endsection
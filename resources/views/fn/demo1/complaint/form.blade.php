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
        <div class="widget widget-search">
          <form action="#">
            <input type="search" placeholder="Enter Keywords..." />
            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>

        <!-- Popular Posts widget -->
        <div class="widget widget-popular-posts">
          <h4>Title <span class="head-line"></span></h4>
          <ul>
            <?php
                if(isset($informationAll[0])){
                    foreach ($informationAll as $key => $value) {
            ?>
            <li>
              <div class="widget-thumb">
                <a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
              </div>
              <div class="widget-content">
                <h5><a href="#">{{ $value->title }}</a></h5>
                <span>เมื่อวันที่ {{ date("d-m-Y", strtotime($value->post_date)) }}</span>
              </div>
              <div class="clearfix"></div>
            </li>
            <?php }} ?>
          </ul>
        </div>

        <!-- Tags Widget -->
        <div class="widget widget-tags">
          <h4>Tags <span class="head-line"></span></h4>
          <div class="tagcloud">
            <a href="#">Portfolio</a>
            <a href="#">Theme</a>
            <a href="#">Mobile</a>
            <a href="#">Design</a>
            <a href="#">Wordpress</a>
            <a href="#">Jquery</a>
            <a href="#">CSS</a>
            <a href="#">Modern</a>
            <a href="#">Theme</a>
            <a href="#">Icons</a>
            <a href="#">Google</a>
          </div>
        </div>

      </div>
      <!--End sidebar-->

	<!-- Page Content -->
  <div class="col-md-9 page-content custom-right-sidebar">

    <div class="blog-post image-post">
      <!-- Post Content -->
      <div class="post-content" style="text-align: center;padding-left: 0px;">
        <h2><a href="#"><?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?></a></h2>
        <ul class="post-meta">
          <li>รับแจ้งข้อมูลทุจริต ประพฤติมิชอบ ไม่บริการประชาชนของพนักงานและลูกจ้าง 
            <?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>
          </li>
          <!-- <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
          <li><a href="#">4 Comments</a></li> -->
        </ul>
        <hr>
      </div>
        <?php if(session('bg_color') == 'success'){ ?>
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
                <label class="control-label">เลขบัตรประชาชน</label>
                <div class="controls">
                  <input class="form-control" name="thai_id" id="thai_id" type="text" required="true">
                   <i class="fa fa-pencil form-control-feedback"></i>
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
                   <i class="fa fa-pencil form-control-feedback"></i>
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
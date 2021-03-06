<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>วิดีโอวิดิทัศน์</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="#">หน้าแรก</a></li>
          <li>วิดีโอวิดิทัศน์</li>
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
          <h4>วิดีโอวิดิทัศน์ <span class="head-line"></span></h4>
          <ul>
            <?php
                if(isset($vdo_youtube_all[0])){
                    foreach ($vdo_youtube_all as $key => $value) {
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
      <div class="post-content">
        <div class="post-type"><i class="fa fa-pencil"></i></div>
        <h2><a href="#">{{ $vdo_youtube[0]->title }}</a></h2>
        <ul class="post-meta">
          <li>By <a href="#">Administrator</a></li>
          <li>เมื่อวันที่ {{ date("d-m-Y", strtotime($vdo_youtube[0]->post_date)) }}</li>
          <!-- <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
          <li><a href="#">4 Comments</a></li> -->
        </ul>
        <p><?php echo $vdo_youtube[0]->detail1 ?></p>
        <!-- <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a> -->
        <br>
        <iframe width="259" height="151" src="{{ $vdo_youtube[0]->file_path }}">
        </iframe>
      </div>

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
<style type="text/css">
.carousel{
    background: white;
    margin-top: 20px;
}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
    margin: 20px;
}
.fa-angle-double-left, .fa-angle-double-right {
    margin: 130px 56px;
}
</style>
@endsection
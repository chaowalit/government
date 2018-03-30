<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>สถานที่สำคัญ (ท่องเที่ยว)ทั้งหมด</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="#">หน้าแรก</a></li>
          <li>สถานที่สำคัญ (ท่องเที่ยว)ทั้งหมด</li>
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
        <!-- <div class="widget widget-search">
          <form action="#">
            <input type="search" placeholder="Enter Keywords..." />
            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div> -->
        @include('fn.demo1.main.module-news')

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
        <div class="post-type"><i class="fa fa-play"></i></div>
        <h2><a href="#"> สถานที่สำคัญ (ท่องเที่ยว)ทั้งหมด </a></h2>
        <ul class="post-meta">
          <li>By <a href="#">Administrator</a></li>
          <li>อัพเดตวันที่ {{ date("d-m-Y") }} </li>
          <!-- <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
          <li><a href="#">4 Comments</a></li> -->
        </ul>
        <!-- <p> echo $information[0]->detail1 </p> -->
        <!-- <a class="main-button" href="#">Read More <i class="fa fa-angle-right"></i></a> -->

        <table id="dataTableNews" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width: 12%;"></th>
                    <th>หัวข้อข่าว</th>
                    <th style="width: 16%;"></th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($landmarks[0])){ 
                    foreach ($landmarks as $key => $value) {
                ?>
                <tr>
                    <td style="text-align: center;">
                        <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="width: 100%;"/>
                    </td>
                    <td>{{ $value->title }}</td>
                    <td style="text-align: center;">
                        <a class="main-button" href="<?php echo url('detail/landmarks').'/'.$value->id; ?>">อ่านเพิ่มเติม
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>

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

@endsection
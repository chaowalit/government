<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>พันธกิจและวิสัยทัศน์</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">เกี่ยวกับหน่วยงาน</a></li>
              <li>พันธกิจและวิสัยทัศน์</li>
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


          <!-- Page Content -->
          <div class="col-md-9 page-content custom-page-content">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>พันธกิจและวิสัยทัศน์ <?php echo @$contact_us[0]->location_name; ?></span></h4>

            <div class="row">

                <!-- Start Image Service Box 1 -->
                <div class="col-md-1 image-service-box">
                </div>
                <!-- End Image Service Box 1 -->

                <!-- Start Image Service Box 2 -->
                <!-- <div class="col-md-10 image-service-box" style="text-align: center;">
                  <img class="img-thumbnail" src="<?php echo @$history_detail[0]->logo; ?>" alt="" style="width: 140px;height: 140px;">
                  <h4>ตราสัญลักษณ์ <?php echo @$contact_us[0]->location_name; ?></h4>
                  <p></p>
                </div> -->
                <!-- End Image Service Box 2 -->

                <!-- Start Image Service Box 3 -->
                <div class="col-md-1 image-service-box">

                </div>
                <!-- End Image Service Box 3 -->

            </div>

            <!-- Some Text -->
            <p><?php echo @$missio_vision[0]->detail1; ?></p>
            <p></p>

            <!-- Divider -->
            <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div>

          </div>
          <!-- End Page Content-->


          <!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar custom-right-sidebar">

            <!-- Search Widget -->
            <div class="widget widget-search">
              <form action="#">
                <input type="search" placeholder="Enter Keywords..." />
                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <!-- Categories Widget -->
            <div class="widget widget-categories">
              <h4>โครงสร้างบุคลากร <span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="#">Brandign</a>
                </li>
                <li>
                  <a href="#">Design</a>
                </li>
                <li>
                  <a href="#">Development</a>
                </li>
                <li>
                  <a href="#">Graphic</a>
                </li>
              </ul>
            </div>

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4>Popular Post <span class="head-line"></span></h4>
              <ul>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>

            <!-- Video Widget -->
            <div class="widget">
              <h4>Video <span class="head-line"></span></h4>
              <div>
                <iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450"></iframe>
              </div>
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
<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><?php echo \Config::get('config_memu.main_2.level_4'); ?></h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">เกี่ยวกับหน่วยงาน</a></li>
              <li><?php echo \Config::get('config_memu.main_2.level_4'); ?></li>
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
            <div class="blog-post image-post" style="padding-bottom: 0px;border-bottom: none;">
                <div class="post-content">
                    <div class="post-type"><i class="fa fa-users"></i></div>
                    <h2 class="classic-title"><a href="#">{{ $head_name }}</a></h2>
                    <ul class="post-meta">
                      <li>By <a href="#">Administrator</a></li>
                      <li>
                        <?php echo date('F').' '.date('d').', '.date('Y'); ?>
                    </li>
                      <!-- <li><a href="#">CMS</a>, <a href="#">Graphic</a></li> -->
                      <li><a href="#"><?php echo count($staff_structure_info); ?> Users</a></li>
                    </ul>
                </div>
            </div>

            <?php if(isset($staff_structure_info[0])){ ?>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="team-member" style="text-align: center;">
                    <!-- Memebr Photo, Name & Position -->
                    <div class="member-photo" style="border: none;">
                      <img alt="" src="/<?php echo $staff_structure_info[0]->img_profile; ?>" style="width: 200px;height: 230px;" />
                      <div class="member-name">
                        {{ $staff_structure_info[0]->full_name }}
                        <!-- <span>นักวิเคราะห์นโยบายและแผนปฏิบัติการ</span> -->
                      </div>
                    </div>
                    <!-- Memebr Words -->
                    <div class="member-info" style="padding: 8px 6px 12px 6px;">
                      <b>{{ $staff_structure_info[0]->position }}</b>
                    </div>
                    <!-- Memebr Social Links -->
                    <!-- <div class="member-socail">
                      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                      <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                      <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                      <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                    </div> -->
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12"></div>
            </div>

            <?php if(isset($staff_structure_info[1])){ 
                    for ($i = 1; $i < count($staff_structure_info) ; $i++) {
            ?>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <?php if(isset($staff_structure_info[$i])){ ?>
                    <div class="team-member" style="text-align: center;">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo" style="border: none;">
                          <img alt="" src="/<?php echo $staff_structure_info[$i]->img_profile; ?>" style="width: 200px;height: 230px;" />
                          <div class="member-name">
                            {{ $staff_structure_info[$i]->full_name }}
                          </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info" style="padding: 8px 6px 12px 6px;">
                          <b>{{ $staff_structure_info[$i]->position }}</b>
                        </div>
                    </div>
                    <?php } $i++; ?>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <?php if(isset($staff_structure_info[$i])){ ?>
                    <div class="team-member" style="text-align: center;">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo" style="border: none;">
                          <img alt="" src="/<?php echo $staff_structure_info[$i]->img_profile; ?>" style="width: 200px;height: 230px;" />
                          <div class="member-name">
                            {{ $staff_structure_info[$i]->full_name }}
                          </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info" style="padding: 8px 6px 12px 6px;">
                          <b>{{ $staff_structure_info[$i]->position }}</b>
                        </div>
                    </div>
                    <?php } $i++; ?>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <?php if(isset($staff_structure_info[$i])){ ?>
                    <div class="team-member" style="text-align: center;">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo" style="border: none;">
                          <img alt="" src="/<?php echo $staff_structure_info[$i]->img_profile; ?>" style="width: 200px;height: 230px;" />
                          <div class="member-name">
                            {{ $staff_structure_info[$i]->full_name }}
                          </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info" style="padding: 8px 6px 12px 6px;">
                          <b>{{ $staff_structure_info[$i]->position }}</b>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <?php } } } ?>
            <!-- Some Text -->
            <!-- <p><?php //echo @$history_detail[0]->detail1; ?></p>
            <p></p> -->

            <h4 class="classic-title">
                <span>บทบาทและหน้าที่</span>
            </h4>
            <p><?php echo @$role; ?></p>
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
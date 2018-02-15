<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title><?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?></title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Prompt:200,400" rel="stylesheet">
  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">

    <?php if($template == 'demo1'){ ?>
    @include('fn.demo1.layouts.header')
    <?php } ?>

    <style type="text/css">
        .facebook:hover {
            background-color: #507CBE !important;
        }
    </style>
</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <!-- <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                </li> -->
                <li><a href="#"><i class="fa fa-envelope-o"></i> <?php echo isset($contact_us[0]->email)? $contact_us[0]->email:""; ?></a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> <?php echo isset($contact_us[0]->tel)? $contact_us[0]->tel:""; ?></a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <!-- Start Social Links -->
              <!-- <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
              </ul> -->
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50" style="height: 112px;">
        <div class="container" style="height: 100%;">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="#" style="padding: 6px 0;">
              <img alt="" src="<?php echo '/'.$logo_url; ?>" style="width: 100px;height: 100px;">
            </a>
          </div>
          <div class="navbar-collapse collapse" style="padding-top: 20px;">
            <!-- Stat Search -->
            <div class="search-side">
                <a class="show-search facebook itl-tooltip " data-placement="bottom" title="Facebook" data-original-title="Facebook" href="#">
                    <i class="fa fa-facebook"></i>
                </a>
                
              <!-- <a class="show-search"><i class="fa fa-facebook"></i></a> -->
              <!-- <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div> -->
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="<?php echo $menu_nav == 'index'? "active":""; ?>" href="{{ url('/') }}">หน้าแรก</a>
              </li>
              <li>
                <a href="#" class="<?php echo $menu_nav == 'about'? "active":""; ?>">เกี่ยวกับหน่วยงาน</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/history') }}" class="<?php echo ($menu_l1 == '1' && $menu_nav == 'about')? "active":""; ?>">ประวัติความเป็นมา</a>
                  </li>
                  <li><a href="{{ url('/mission_vision') }}" class="<?php echo ($menu_l1 == '2' && $menu_nav == 'about')? "active":""; ?>">พันธกิจและวิสัยทัศน์</a>
                  </li>
                  <li><a href="{{ url('/executive_messages') }}" class="<?php echo ($menu_l1 == '3' && $menu_nav == 'about')? "active":""; ?>">สานส์จากผู้บริหาร</a>
                  </li>
                  <li class="treeview">
                        <a href="#" class="<?php echo ($menu_l1 == '4' && $menu_nav == 'about')? "active":""; ?>">โครงสร้างบุคคลากร
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                                if(isset($staff_structure[0])){
                                    foreach ($staff_structure as $key => $value) {
                            ?>
                                    <li><a href="<?php echo url('staff_structure').'/'.$value->id; ?>" class="<?php echo ($menu_l2 == $value->id && $menu_l1 == '4' && $menu_nav == 'about')? "active":""; ?>"> {{ $value->sub_menu_name }}</a></li>
                            <?php } } ?>
                        </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">ร้องเรียน/ร้องทุกข์</a>
                <!-- <a href="#">ข้อมูลบริการ</a> -->
                <!-- <ul class="dropdown">
                    <li class="treeview">
                        <a href="#">แผนงาน
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"> ChartJS</a></li>
                            <li><a href="#"> Morris</a></li>
                            <li><a href="#"> Flot</a></li>
                            <li><a href="#"> Inline charts</a></li>
                        </ul>
                  </li>
                  <li class="treeview">
                        <a href="#">รายงาน
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"> ChartJS</a></li>
                            <li><a href="#"> Morris</a></li>
                            <li><a href="#"> Flot</a></li>
                            <li><a href="#"> Inline charts</a></li>
                        </ul>
                  </li>
                  <li><a href="#">เอกสารเผยแพร่</a>
                  </li>
                  <li><a href="#">คู่มือประชาชน</a>
                  </li>
                </ul> -->
              </li>
              <li>
                <a href="#" class="<?php echo $menu_nav == 'news_government'? "active":""; ?>">ศูนย์ข้อมูลข่าวสารราชการ</a>
                <ul class="dropdown" style="width: 245px;">
                    <li class="treeview">
                        <a href="{{ url('/online_electronic') }}" class="<?php echo ($menu_l1 == '1' && $menu_nav == 'news_government')? "active":""; ?>">ดัชนีรวม / ดัชนีประจำแฟ้ม
                            
                        </a>
                        
                    </li>
                    <li class="treeview">
                        <a href="#">ข้อมูลข่าวสารตามมาตรา 7
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                                if(isset($menu_government_online['online_data_section_7'][0])){
                                foreach ($menu_government_online['online_data_section_7'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/online_data_section_7').'/'.$value->id; ?>"> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">ข้อมูลข่าวสารตามมาตรา 9
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                                if(isset($menu_government_online['online_data_section_9'][0])){
                                foreach ($menu_government_online['online_data_section_9'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/online_data_section_9').'/'.$value->id; ?>"> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">จัดซื้อจัดจ้าง/การเงิน <!-- สัญญาอื่นๆ -->
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                                if(isset($menu_government_online['online_contract_other'][0])){
                                foreach ($menu_government_online['online_contract_other'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/online_contract_other').'/'.$value->id; ?>"> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">สรุปรายงาน <!-- เอกสารอื่นๆที่ต้องรายงาน -->
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                                if(isset($menu_government_online['other_neccessary'][0])){
                                foreach ($menu_government_online['other_neccessary'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/other_neccessary').'/'.$value->id; ?>"> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">ข้อมูลข่าวสารอื่นๆ  <!--ข้อมูลข่าวสารที่น่าสนใจ-->
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                                if(isset($menu_government_online['document_interesting'][0])){
                                foreach ($menu_government_online['document_interesting'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/document_interesting').'/'.$value->id; ?>"> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                        </ul>
                    </li>
                  <!-- <li><a href="{{ url('/online_electronic') }}" class="<?php echo ($menu_l1 == '1' && $menu_nav == 'news_government')? "active":""; ?>">ข้อมูลข่าวสารอิเล็กทรอนิกส์ของราชการ</a>
                  </li> -->
                  <!-- <li><a href="#">ร้องเรียน/ร้องทุกข์</a>
                  </li> -->
                  <li class="treeview">
                        <a href="#">สำรวจการให้บริการศูนย์ข้อมูลฯ
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"> แบบฟอร์มสำรวจความพึงพอใจ</a></li>
                            <li><a href="#"> สรุปผลความพึงพอใจ</a></li>
                            <li><a href="#"> สถิติผู้เข้าใช้บริการ</a></li>
                            <li><a href="#"> กระดานถาม-ตอบข้อคิดเห็น</a></li>
                        </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">สมุดเยื่ยม</a>
              </li>
              <li><a href="{{ url('/contact_us') }}" class="<?php echo $menu_nav == 'contact_us'? "active":""; ?>">ติดต่อเรา</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.html">Home</a>
            <ul class="dropdown">
              <li><a href="index-01.html">Home Version 1</a>
              </li>
              <li><a href="index-02.html">Home Version 2</a>
              </li>
              <li><a class="active" href="index-03.html">Home Version 3</a>
              </li>
              <li><a href="index-04.html">Home Version 4</a>
              </li>
              <li><a href="index-05.html">Home Version 5</a>
              </li>
              <li><a href="index-06.html">Home Version 6</a>
              </li>
              <li><a href="index-07.html">Home Version 7</a>
              </li>
              <li><a href="index-08.html">HSome Version 8</a>
              </li>
              <li><a href="index-09.html">Home Version 9</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a href="about.html">About</a>
              </li>
              <li><a href="services.html">Services</a>
              </li>
              <li><a href="right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="tabs.html">Tabs</a>
              </li>
              <li><a href="buttons.html">Buttons</a>
              </li>
              <li><a href="forms.html">Forms</a></li>
              <li><a href="action-box.html">Action Box</a>
              </li>
              <li><a href="testimonials.html">Testimonials</a>
              </li>
              <li><a href="latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="pricing.html">Pricing Tables</a>
              </li>
              <li><a href="animated-graphs.html">Animated Graphs</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

    @yield('content')

    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>เกี่ยวกับหน่วยงาน<span class="head-line"></span></h4>

              <ul>
                <li>
                  <a href="#"><b>ประวัติความเป็นมา</b></a>
                </li>
                <li>
                  <a href="#"><b>พันธกิจและวิสัยทัศน์</b></a>
                </li>
                <li>
                  <a href="#"><b>สานส์จากผู้บริหาร</b></a>
                </li>
                <li>
                  <a href="#"><b>โครงสร้างบุคคลากร</b></a>
                  <ul>
                    <?php
                                if(isset($staff_structure[0])){
                                    foreach ($staff_structure as $key => $value) {
                            ?>
                                    <li>&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo url('staff_structure').'/'.$value->id; ?>">
                                            - {{ $value->sub_menu_name }}
                                        </a>
                                    </li>
                            <?php } } ?>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="footer-widget social-widget">
              <h4>ร้องเรียน/ร้องทุกข์<span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="#"><b>ร้องเรียน/ร้องทุกข์</b></a>
                </li>
            </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget twitter-widget  -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>ศูนย์ข้อมูลข่าวสารราชการ<span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="#"><b>ดัชนีรวม / ดัชนีประจำแฟ้ม</b></a>
                </li>
                <li>
                  <a href="#"><b>ข้อมูลข่าวสารตามมาตรา 7</b></a>
                  <ul>
                      <?php
                            if(isset($menu_government_online['online_data_section_7'][0])){
                            foreach ($menu_government_online['online_data_section_7'] as $key => $value) {
                                if($value->active == '1'){
                        ?>
                                    <li>&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo url('sub_online_electronic/online_data_section_7').'/'.$value->id; ?>">
                                            - {{ $value->sub_menu_name }}
                                        </a>
                                    </li>
                        <?php
                                }
                            }
                        }
                        ?>
                  </ul>
                </li>
                <li>
                  <a href="#"><b>ข้อมูลข่าวสารตามมาตรา 9</b></a>
                  <ul>
                      <?php
                                if(isset($menu_government_online['online_data_section_9'][0])){
                                foreach ($menu_government_online['online_data_section_9'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                    <li>&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo url('sub_online_electronic/online_data_section_9').'/'.$value->id; ?>">
                                            - {{ $value->sub_menu_name }}
                                        </a>
                                    </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget flickr-widget-->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>ศูนย์ข้อมูลข่าวสารราชการ<span class="head-line"></span></h4>
              <ul>
                    <li>
                        <a href="#"><b>จัดซื้อจัดจ้าง/การเงิน</b></a>
                        <?php
                            if(isset($menu_government_online['online_contract_other'][0])){
                            foreach ($menu_government_online['online_contract_other'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                    <li>&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo url('sub_online_electronic/online_contract_other').'/'.$value->id; ?>">
                                            - {{ $value->sub_menu_name }}
                                        </a>
                                    </li>
                            <?php
                                    }
                                } 
                            }
                        ?>
                    </li>
                    <li>
                        <a href="#"><b>สรุปรายงาน</b></a>
                        <?php
                            if(isset($menu_government_online['other_neccessary'][0])){
                            foreach ($menu_government_online['other_neccessary'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                    <li>&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo url('sub_online_electronic/other_neccessary').'/'.$value->id; ?>">
                                            - {{ $value->sub_menu_name }}
                                        </a>
                                    </li>
                        <?php
                                }
                            } 
                        }
                        ?>
                    </li>
                    <li>
                        <a href="#"><b>ข้อมูลข่าวสารอื่นๆ</b></a>
                        <?php
                                if(isset($menu_government_online['document_interesting'][0])){
                                foreach ($menu_government_online['document_interesting'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                    <li>&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo url('sub_online_electronic/document_interesting').'/'.$value->id; ?>">
                                            - {{ $value->sub_menu_name }}
                                        </a>
                                    </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                    </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget contact-widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget" style="margin-bottom: 12px;">
              <h4>ศูนย์ข้อมูลข่าวสารราชการ<span class="head-line"></span></h4>
              <ul>
                <li>
                    <a href="#"><b>สำรวจการให้บริการศูนย์ข้อมูลฯ</b></a>
                    <li>&nbsp;&nbsp;&nbsp;<a href="#"> - แบบฟอร์มสำรวจความพึงพอใจ</a></li>
                    <li>&nbsp;&nbsp;&nbsp;<a href="#"> - สรุปผลความพึงพอใจ</a></li>
                    <li>&nbsp;&nbsp;&nbsp;<a href="#"> - สถิติผู้เข้าใช้บริการ</a></li>
                    <li>&nbsp;&nbsp;&nbsp;<a href="#"> - กระดานถาม-ตอบข้อคิดเห็น</a></li>
                </li>
              </ul>
            </div>
            <div class="footer-widget social-widget" style="margin-bottom: 12px;">
              <ul>
                <li>
                  <a href="#"><b>สมุดเยื่ยม</b></a>
                </li>
            </ul>
            </div>
            <div class="footer-widget social-widget">
              <ul>
                <li>
                  <a href="#"><b>ติดต่อเรา</b></a>
                </li>
            </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- row -->


      </div>
      <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <!-- <p>&copy; 2016 Margo - All Rights Reserved <a href="http://graygrids.com">GrayGrids</a> </p> -->
            </div>
            <div class="col-md-6">
              <!-- <ul class="footer-nav">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul> -->
            </div>
          </div>
        </div>
        <!-- End Copyright -->
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <?php if($template == 'demo1'){ ?>
    @include('fn.demo1.layouts.footer')
    <?php } ?>

</body>

</html>
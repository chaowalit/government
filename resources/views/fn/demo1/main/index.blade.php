<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')
    <style type="text/css">
        .hide-module {
            display: none;
        }
        .circle-style-big {
            background: #337ab7;
            margin: 0px;
            padding: 4px;
            border-radius: 100%;
            color: white;
        }
        .circle-style-small {
            background: #337ab7;
            margin: 0px;
            padding: 5px;
            border-radius: 100%;
            color: white;
        }
        .classic-testimonials .testimonial-content-v2 {
            padding: 5px 8px !important;
        }
    </style>
    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
                if(isset($slide_banner[0])){
                foreach ($slide_banner as $key => $value) {
            ?>
                  <li data-target="#main-slide" data-slide-to="{{ $key }}" class="<?php echo ($key == 0)? "active":""; ?>">
                  </li>
            <?php } } ?>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <?php
                if(isset($slide_banner[0])){
                foreach ($slide_banner as $key => $value) {
            ?>
              <div class="item <?php echo ($key == 0)? " active":""; ?>">
                <img class="img-responsive" src="<?php echo asset($value->img_banner); ?>" alt="slider">
                <div class="slider-content">
                  <div class="col-md-12 text-center">
                    <h3 class="animated2">
                        <?php
                            if(!empty($value->text1)){
                        ?>
                            <!-- <span><strong style="color: #000;">{{ $value->text1 }}</strong></span> -->
                        <?php } ?>
                      <!-- <span>Welcome to <strong>Margo</strong></span> -->
                    </h3>
                    <!-- <h3 class="animated3">
                       <span>The ultimate aim of your business</span>
                    </h3> -->
                    <!-- <p class="animated4">
                        <a href="#" class="slider btn btn-system btn-large">Check Now</a>
                    </p> -->
                  </div>
                </div>
              </div>
                <!--/ Carousel item end -->
            <?php } } ?>
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Content -->
    <div id="content" style="padding: 0px;">

        <!-- Start Portfolio Section -->
      <div class="project" style="padding-top: 15px;padding-bottom: 10px;">
        <div class="container">
            <!-- Classic Heading -->
            <!-- <h4 class="classic-title"><span>Testimonials</span></h4> -->

            <!-- Start Testimonials Carousel -->
            <div class="custom-carousel-slide-news show-one-slide touch-carousel slide_news" data-appeared-items="1">
              <!-- Testimonial 1 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content" style="border-radius: 20px;padding: 6px 18px;box-shadow: 1px 4px 3px -1px rgba(50, 50, 50, 0.75);background-color: #fff;">
                  <p style="font-size: 14px;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              </div>
              <!-- Testimonial 1 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content" style="border-radius: 20px;padding: 6px 18px;box-shadow: 1px 4px 3px -1px rgba(50, 50, 50, 0.75);background-color: #fff;">
                  <p style="font-size: 14px;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              </div>

            </div>
            <!-- End Testimonials Carousel -->

        </div>
        <!-- .container -->
      </div>
      <!-- End Portfolio Section -->
        
        <div class="container">
            <div class="row sidebar-page">

              <!-- Page Content -->
              <div class="col-md-9 page-content">

                <!-- Divider -->
                <!-- <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div> -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.information') == 1)? '':' hide-module'; ?>" id="accordion_1">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_1" href="#collapse-1" style="color: #004160;">
                                <span id="click_information" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> ข่าวประชาสัมพันธ์
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-1" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="information-carousel show-one-slide touch-carousel" data-appeared-items="1">
                              <!-- Testimonial 1 -->
                              <?php
                                if(isset($information[0])){
                                    for ($i = 0 ; $i < count($information) ; $i++) {
                              ?>
                              <div class="classic-testimonials item">
                                <?php 
                                for ($j = 0 ; $j < 5 ; $j++) {
                                    $k = $i + $j;
                                if(isset($information[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content testimonial-content-v2">
                                          
                                        <h5 class="post-title post-text-hide">
                                            <i class="fa fa-bullhorn circle-style-small"></i>
                                            <a href="<?php echo url('detail/information').'/'.$information[$k]->id; ?>" class="<?php echo "information_".$k; ?>">
                                                <span style="font-size: 12px;color: #999;">
    {{ date("d-m-Y", strtotime($information[$k]->post_date)) }}
                                                </span>
                                                {{ $information[$k]->title }}
                                            </a>
                                        </h5>
                                            <style type="text/css">
                                                <?php echo ".information_".$k; ?>:hover {
                                                  color: #ee3733;
                                                }
                                                <?php echo ".information_".$k; ?> {
                                                    color: #444;
                                                }
                                            </style>
                                        </div>
                                        <div class="testimonial-author" style="margin-bottom: 10px;">
                                            <!-- <span>เมื่อวันที่</span>  {{ date("d-m-Y", strtotime($information[$k]->post_date)) }} -->
                                        </div>
                                    </div>
                                <?php } } $i = $k; ?>

                              </div>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.purchase_news') == 1)? '':' hide-module'; ?>" id="accordion_2">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_2" href="#collapse-2" style="color: #004160;">
                                <span id="click_purchase_news" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> ข่าวจัดซื้อจัดจ้าง
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-2" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                              <!-- Testimonial 1 -->
                              <?php
                                if(isset($purchase_news[0])){
                                    for ($i = 0 ; $i < count($purchase_news) ; $i++) {
                              ?>
                              <div class="classic-testimonials item">
                                <?php 
                                for ($j = 0 ; $j < 5 ; $j++) {
                                    $k = $i + $j;
                                if(isset($purchase_news[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content testimonial-content-v2">
                                          
                                        <h5 class="post-title post-text-hide">
                                            <i class="fa fa-bullhorn circle-style-small"></i>
                                            <a href="<?php echo asset($purchase_news[$k]->file_path); ?>" class="<?php echo "purchase_news_".$k; ?>" target="_blank">
                                                <span style="font-size: 12px;color: #999;">
    {{ date("d-m-Y", strtotime($purchase_news[$k]->post_date)) }}
                                                </span>
                                                {{ $purchase_news[$k]->title }}
                                            </a>
                                        </h5>
                                            <style type="text/css">
                                                <?php echo ".purchase_news_".$k; ?>:hover {
                                                  color: #ee3733;
                                                }
                                                <?php echo ".purchase_news_".$k; ?> {
                                                    color: #444;
                                                }
                                            </style>
                                        </div>
                                        <div class="testimonial-author" style="margin-bottom: 10px;">
                                        </div>
                                    </div>
                                <?php } } $i = $k; ?>

                              </div>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.calculate_middle_price') == 1)? '':' hide-module'; ?>" id="accordion_3">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_3" href="#collapse-3" style="color: #004160;">
                                <span id="click_calculate_middle_price" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> เผยแพร่การคำนวนราคากลาง
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-3" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                              <!-- Testimonial 1 -->
                              <?php
                                if(isset($calculate_middle_price[0])){
                                    for ($i = 0 ; $i < count($calculate_middle_price) ; $i++) {
                              ?>
                              <div class="classic-testimonials item">
                                <?php 
                                for ($j = 0 ; $j < 5 ; $j++) {
                                    $k = $i + $j;
                                if(isset($calculate_middle_price[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content testimonial-content-v2">
                                          
                                        <h5 class="post-title post-text-hide">
                                            <i class="fa fa-bullhorn circle-style-small"></i>
                                            <a href="<?php echo asset($calculate_middle_price[$k]->file_path); ?>" class="<?php echo "calculate_middle_price_".$k; ?>" target="_blank">
                                                <span style="font-size: 12px;color: #999;">
    {{ date("d-m-Y", strtotime($calculate_middle_price[$k]->post_date)) }}
                                                </span>
                                                {{ $calculate_middle_price[$k]->title }}
                                            </a>
                                        </h5>
                                            <style type="text/css">
                                                <?php echo ".calculate_middle_price_".$k; ?>:hover {
                                                  color: #ee3733;
                                                }
                                                <?php echo ".calculate_middle_price_".$k; ?> {
                                                    color: #444;
                                                }
                                            </style>
                                        </div>
                                        <div class="testimonial-author" style="margin-bottom: 10px;">
                                        </div>
                                    </div>
                                <?php } } $i = $k; ?>

                              </div>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.activity_news') == 1)? '':' hide-module'; ?>" id="accordion_4">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_4" href="#collapse-4" style="color: #004160;">
                                <span id="click_activity_news" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> ข่าวกิจกรรม
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-4" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="recent-projects">
                            <h4 class="title" style="border-bottom: none;padding-bottom: 8px;">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="news-activity-carousel show-one-slide touch-carousel" data-appeared-items="3">
                                <?php
                                    if(isset($activity_news[0])){
                                        foreach ($activity_news as $key => $value) {
                                ?>
                                <div class="portfolio-item item" style="padding-right: 5px;">
                                  <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="" title="This is an image title" href="<?php echo url('detail/activity').'/'.$value->id; ?>">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="<?php echo url('detail/activity').'/'.$value->id; ?>">
                                        <!-- <h4>Lorem Ipsum Dolor</h4> -->
                                        <span>{{ $value->title }}</span>
                                        <!-- <span>Drawing</span> -->
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.presentation') == 1)? '':' hide-module'; ?>" id="accordion_5">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_5" href="#collapse-5" style="color: #004160;">
                                <span id="click_presentation" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> นำเสนอผลงาน อปท.
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-5" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="recent-projects">
                            <h4 class="title" style="border-bottom: none;padding-bottom: 8px;">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="presentation-carousel show-one-slide touch-carousel" data-appeared-items="3">
                                <?php
                                    if(isset($presentation[0])){
                                        foreach ($presentation as $key => $value) {
                                ?>
                                <div class="portfolio-item item" style="padding-right: 5px;">
                                  <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="" title="This is an image title" href="<?php echo url('detail/presentation').'/'.$value->id; ?>">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="<?php echo url('detail/presentation').'/'.$value->id; ?>">
                                        <!-- <h4>Lorem Ipsum Dolor</h4> -->
                                        <span>{{ $value->title }}</span>
                                        <!-- <span>Drawing</span> -->
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.resolution_of_meeting') == 1)? '':' hide-module'; ?>" id="accordion_6">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_6" href="#collapse-6" style="color: #004160;">
                                <span id="click_resolution_of_meeting" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> มติประชุม
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-6" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                              <!-- Testimonial 1 -->
                              <?php
                                if(isset($resolution_of_meeting[0])){
                                    for ($i = 0 ; $i < count($resolution_of_meeting) ; $i++) {
                              ?>
                              <div class="classic-testimonials item">
                                <?php 
                                for ($j = 0 ; $j < 5 ; $j++) {
                                    $k = $i + $j;
                                if(isset($resolution_of_meeting[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content testimonial-content-v2">
                                          
                                        <h5 class="post-title post-text-hide">
                                            <i class="fa fa-bullhorn circle-style-small"></i>
                                            <a href="<?php echo asset($resolution_of_meeting[$k]->file_path); ?>" class="<?php echo "resolution_of_meeting_".$k; ?>" target="_blank">
                                                <span style="font-size: 12px;color: #999;">
    {{ date("d-m-Y", strtotime($resolution_of_meeting[$k]->post_date)) }}
                                                </span>
                                                {{ $resolution_of_meeting[$k]->title }}
                                            </a>
                                        </h5>
                                            <style type="text/css">
                                                <?php echo ".resolution_of_meeting_".$k; ?>:hover {
                                                  color: #ee3733;
                                                }
                                                <?php echo ".resolution_of_meeting_".$k; ?> {
                                                    color: #444;
                                                }
                                            </style>
                                        </div>
                                        <div class="testimonial-author" style="margin-bottom: 10px;">
                                        </div>
                                    </div>
                                <?php } } $i = $k; ?>

                              </div>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.vdo_youtube') == 1)? '':' hide-module'; ?>" id="accordion_7">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_7" href="#collapse-7" style="color: #004160;">
                                <span id="click_vdo_youtube" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> วิดีโอวิดิทัศน์
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-7" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="recent-projects">
                            <h4 class="title" style="border-bottom: none;padding-bottom: 8px;">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="presentation-carousel show-one-slide touch-carousel" data-appeared-items="3">
                                <?php
                                if(isset($vdo_youtube[0])){
                                    foreach ($vdo_youtube as $key => $value) {
                                ?>
                                <div class="portfolio-item item" style="padding-right: 5px;">
                                  <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <iframe width="259" height="151" src="{{ $value->file_path }}">
                                        </iframe>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="<?php echo url('detail/vdo_youtube').'/'.$value->id; ?>">
                                        <!-- <h4>Lorem Ipsum Dolor</h4> -->
                                        <span>{{ $value->title }}</span>
                                        <!-- <span>Drawing</span> -->
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <?php }} ?>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.landmarks') == 1)? '':' hide-module'; ?>" id="accordion_8">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_8" href="#collapse-8" style="color: #004160;">
                                <span id="click_landmarks" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> สถานที่สำคัญ (ท่องเที่ยว)
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-8" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="recent-projects">
                            <h4 class="title" style="border-bottom: none;padding-bottom: 8px;">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="landmarks-carousel show-one-slide touch-carousel" data-appeared-items="3">
                                <?php
                                    if(isset($landmarks[0])){
                                        foreach ($landmarks as $key => $value) {
                                ?>
                                <div class="portfolio-item item" style="padding-right: 5px;">
                                  <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="" title="This is an image title" href="<?php echo url('detail/landmarks').'/'.$value->id; ?>">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="<?php echo url('detail/landmarks').'/'.$value->id; ?>">
                                        <!-- <h4>Lorem Ipsum Dolor</h4> -->
                                        <span>{{ $value->title }}</span>
                                        <!-- <span>Drawing</span> -->
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.otop') == 1)? '':' hide-module'; ?>" id="accordion_9">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_9" href="#collapse-9" style="color: #004160;">
                                <span id="click_otop" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> ผลิตภัณฑ์ OTOP
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-9" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="recent-projects">
                            <h4 class="title" style="border-bottom: none;padding-bottom: 8px;">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="otop-carousel show-one-slide touch-carousel" data-appeared-items="3">
                                <?php
                                    if(isset($otop[0])){
                                        foreach ($otop as $key => $value) {
                                ?>
                                <div class="portfolio-item item" style="padding-right: 5px;">
                                  <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="" title="This is an image title" href="<?php echo url('detail/otop').'/'.$value->id; ?>">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="<?php echo url('detail/otop').'/'.$value->id; ?>">
                                        <!-- <h4>Lorem Ipsum Dolor</h4> -->
                                        <span>{{ $value->title }}</span>
                                        <!-- <span>Drawing</span> -->
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group <?php echo (\Config::get('config_module.transfer_news') == 1)? '':' hide-module'; ?>" id="accordion_10">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_10" href="#collapse-10" style="color: #004160;">
                                <span id="click_transfer_news" class="right-detail-all" style="">ดูทั้งหมด</span>
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-bullhorn circle-style-big"></i> ข่าวโอนย้าย
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-10" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                            <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                              <!-- Testimonial 1 -->
                              <?php
                                if(isset($transfer_news[0])){
                                    for ($i = 0 ; $i < count($transfer_news) ; $i++) {
                              ?>
                              <div class="classic-testimonials item">
                                <?php 
                                for ($j = 0 ; $j < 5 ; $j++) {
                                    $k = $i + $j;
                                if(isset($transfer_news[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content testimonial-content-v2">
                                          
                                        <h5 class="post-title post-text-hide">
                                            <i class="fa fa-bullhorn circle-style-small"></i>
                                            <a href="<?php echo asset($transfer_news[$k]->file_path); ?>" class="<?php echo "transfer_news_".$k; ?>" target="_blank">
                                                <span style="font-size: 12px;color: #999;">
    {{ date("d-m-Y", strtotime($transfer_news[$k]->post_date)) }}
                                                </span>
                                                {{ $transfer_news[$k]->title }}
                                            </a>
                                        </h5>
                                            <style type="text/css">
                                                <?php echo ".transfer_news_".$k; ?>:hover {
                                                  color: #ee3733;
                                                }
                                                <?php echo ".transfer_news_".$k; ?> {
                                                    color: #444;
                                                }
                                            </style>
                                        </div>
                                        <div class="testimonial-author" style="margin-bottom: 10px;">
                                        </div>
                                    </div>
                                <?php } } $i = $k; ?>

                              </div>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

              </div>
              <!-- End Page Content-->


              <!--Sidebar-->
              <div class="col-md-3 sidebar right-sidebar">

                <!-- Search Widget -->
                <div class="widget widget-search">
                  <form action="#">
                    <input type="search" placeholder="Enter Keywords..." />
                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>

                <!-- Categories Widget -->
                <div class="widget widget-categories">
                  <!-- <h4>Categories <span class="head-line"></span></h4> -->
                  <ul>
                    <?php if(isset($other_link[0])){ 
                        foreach ($other_link as $key => $value) {
                    ?>
                    <li style="">
                        <a href="<?php echo $value->title; ?>" style="border: none;">
                      <img src="<?php echo asset($value->file_path); ?>" style="border-radius: 10px;box-shadow: 0px 4px 2px 0px rgba(50, 50, 50, 0.75);">
                        </a>
                    </li>
                    <?php } } ?>
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

                <?php if(isset($vdo_youtube[0])){ ?>
                <!-- Video Widget -->
                <div class="widget">
                  <h4>วิดีโอ <span class="head-line"></span></h4>
                  <div>
                    <iframe src="{{ $vdo_youtube[0]->file_path }}" width="800" height="450"></iframe>
                  </div>
                </div>
                <?php } ?>

              </div>
              <!--End sidebar-->


            </div>
        </div>


      <!-- Divider -->
      <!-- <div class="hr1 margin-60"></div> -->


      <!-- Divider -->
      <div class="hr1 margin-50" style="margin-bottom: 10px;"></div>

    </div>
    <!-- End Content -->
@endsection
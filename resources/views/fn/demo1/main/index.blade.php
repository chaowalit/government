<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')

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
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              </div>
              <!-- Testimonial 2 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              </div>
              <!-- Testimonial 3 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                <div class="panel-group" id="accordion_1">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_1" href="#collapse-1">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> ข่าวประชาสัมพันธ์
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-1" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <!-- Start Recent Posts Carousel -->
                            <div class="latest-posts">
                              <h4 class="classic-title" style="border-bottom: none;padding-bottom: 8px;">
                                <span style="border-bottom: none;"> &nbsp;</span>
                            </h4>
                              <div class="latest-posts-classic information-carousel touch-carousel" data-appeared-items="1">
                                <?php
                                if(isset($information[0])){
                                    for($i = 0; $i < count($information); $i++){
                                ?>
                                <!-- Posts 1 -->
                                <div class="post-row item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php if(isset($information[$i])){ ?>
                                            <div class="left-meta-post">
                                                <div class="post-date">
                                                    <span class="day">
                                                        <?php echo date("d", strtotime($information[$i]->post_date));
                                                        ?>
                                                    </span>
                                                    <span class="month">
                                                        <?php echo showMonth((int)date("m", strtotime($information[$i]->post_date))); ?>
                                                    </span>
                                                    <span class="year">
                                                        <?php echo showYear(
                                                                date("Y", strtotime($information[$i]->post_date)),
                                                                'th'
                                                            ); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <h5 class="post-title">
                                                <a href="#">{{ $information[$i]->title }}</a>
                                            </h5>
                                            <div class="post-content">
                                                <p>
                                                <a class="read-more" href="#">Read More...</a></p>
                                            </div>
                                            <?php } $i++; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if(isset($information[$i])){ ?>
                                            <div class="left-meta-post">
                                                <div class="post-date">
                                                    <span class="day">
                                                        <?php echo date("d", strtotime($information[$i]->post_date));
                                                        ?>
                                                    </span>
                                                    <span class="month">
                                                        <?php echo showMonth((int)date("m", strtotime($information[$i]->post_date))); ?>
                                                    </span>
                                                    <span class="year">
                                                        <?php echo showYear(
                                                                date("Y", strtotime($information[$i]->post_date)),
                                                                'th'
                                                            ); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <h5 class="post-title">
                                                <a href="#">{{ $information[$i]->title }}</a>
                                            </h5>
                                            <div class="post-content">
                                                <p>
                                                <a class="read-more" href="#">Read More...</a></p>
                                            </div>
                                            <?php } $i++; ?>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php if(isset($information[$i])){ ?>
                                            <div class="left-meta-post">
                                                <div class="post-date">
                                                    <span class="day">
                                                        <?php echo date("d", strtotime($information[$i]->post_date));
                                                        ?>
                                                    </span>
                                                    <span class="month">
                                                        <?php echo showMonth((int)date("m", strtotime($information[$i]->post_date))); ?>
                                                    </span>
                                                    <span class="year">
                                                        <?php echo showYear(
                                                                date("Y", strtotime($information[$i]->post_date)),
                                                                'th'
                                                            ); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <h5 class="post-title">
                                                <a href="#">{{ $information[$i]->title }}</a>
                                            </h5>
                                            <div class="post-content">
                                                <p>
                                                <a class="read-more" href="#">Read More...</a></p>
                                            </div>
                                            <?php } $i++; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if(isset($information[$i])){ ?>
                                            <div class="left-meta-post">
                                                <div class="post-date">
                                                    <span class="day">
                                                        <?php echo date("d", strtotime($information[$i]->post_date));
                                                        ?>
                                                    </span>
                                                    <span class="month">
                                                        <?php echo showMonth((int)date("m", strtotime($information[$i]->post_date))); ?>
                                                    </span>
                                                    <span class="year">
                                                        <?php echo showYear(
                                                                date("Y", strtotime($information[$i]->post_date)),
                                                                'th'
                                                            ); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <h5 class="post-title">
                                                <a href="#">{{ $information[$i]->title }}</a>
                                            </h5>
                                            <div class="post-content">
                                                <p>
                                                <a class="read-more" href="#">Read More...</a></p>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>

                              </div>
                            </div>
                            <!-- End Recent Posts Carousel -->

                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group" id="accordion_2">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_2" href="#collapse-2">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> ข่าวจัดซื้อจัดจ้าง
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-2" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title" style="border-bottom: none;padding-bottom: 8px;">
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
                                for ($j = 0 ; $j < 3 ; $j++) {
                                    $k = $i + $j;
                                if(isset($purchase_news[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content" style="margin-bottom: 0px;">
                                          
                                        <h5 class="post-title" style="font-size: 12px;">
                                            <a href="#" class="<?php echo "purchase_news_".$k; ?>">{{ $purchase_news[$k]->title }}</a>
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
                                            <span>เมื่อวันที่</span>  {{ date("d-m-Y", strtotime($purchase_news[$k]->post_date)) }}
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
                <div class="panel-group" id="accordion_3">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_3" href="#collapse-3">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> เผยแพร่การคำนวนราคากลาง
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-3" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title" style="border-bottom: none;padding-bottom: 8px;">
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
                                for ($j = 0 ; $j < 3 ; $j++) {
                                    $k = $i + $j;
                                if(isset($calculate_middle_price[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content" style="margin-bottom: 0px;">
                                          
                                        <h5 class="post-title" style="font-size: 12px;">
                                            <a href="#" class="<?php echo "calculate_middle_price_".$k; ?>">{{ $calculate_middle_price[$k]->title }}</a>
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
                                            <span>เมื่อวันที่</span>  {{ date("d-m-Y", strtotime($calculate_middle_price[$k]->post_date)) }}
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
                <div class="panel-group" id="accordion_4">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_4" href="#collapse-4">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> ข่าวกิจกรรม
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
                                        <a class="" title="This is an image title" href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="#">
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
                <div class="panel-group" id="accordion_5">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_5" href="#collapse-5">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> นำเสนอผลงาน อปท.
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
                                        <a class="" title="This is an image title" href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="#">
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
                <div class="panel-group" id="accordion_6">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_6" href="#collapse-6">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> มติประชุม
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-6" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title" style="border-bottom: none;padding-bottom: 8px;">
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
                                for ($j = 0 ; $j < 3 ; $j++) {
                                    $k = $i + $j;
                                if(isset($resolution_of_meeting[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content" style="margin-bottom: 0px;">
                                          
                                        <h5 class="post-title" style="font-size: 12px;">
                                            <a href="#" class="<?php echo "resolution_of_meeting_".$k; ?>">{{ $resolution_of_meeting[$k]->title }}</a>
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
                                            <span>เมื่อวันที่</span>  {{ date("d-m-Y", strtotime($resolution_of_meeting[$k]->post_date)) }}
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
                <div class="panel-group" id="accordion_7">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_7" href="#collapse-7">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> วิดีโอวิดิทัศน์
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
                                
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>

                </div>
                <!-- End Accordion -->

                <!-- Accordion -->
                <div class="panel-group" id="accordion_8">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_8" href="#collapse-8">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> สถานที่สำคัญ (ท่องเที่ยว)
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
                                        <a class="" title="This is an image title" href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="#">
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
                <div class="panel-group" id="accordion_9">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_9" href="#collapse-9">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> ผลิตภัณฑ์ OTOP
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
                                        <a class="" title="This is an image title" href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="/public/uploads/news/<?php echo $value->file_path.'/'.$value->show_img; ?>" style="height: 151px;width: 100%;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                      <a href="#">
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
                <div class="panel-group" id="accordion_10">

                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Heading -->
                    <div class="panel-heading">
                      <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_10" href="#collapse-10">
                                <i class="fa fa-angle-up control-icon"></i>
                                <i class="fa fa-desktop"></i> ข่าวโอนย้าย
                            </a>
                        </h4>
                    </div>
                    <!-- Toggle Content -->
                    <div id="collapse-10" class="panel-collapse collapse in">
                      <div class="panel-body">
                            <h4 class="classic-title" style="border-bottom: none;padding-bottom: 8px;">
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
                                for ($j = 0 ; $j < 3 ; $j++) {
                                    $k = $i + $j;
                                if(isset($transfer_news[$k])){ ?>
                                    <div class="col-md-12">
                                        <div class="testimonial-content" style="margin-bottom: 0px;">
                                          
                                        <h5 class="post-title" style="font-size: 12px;">
                                            <a href="#" class="<?php echo "transfer_news_".$k; ?>">{{ $transfer_news[$k]->title }}</a>
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
                                            <span>เมื่อวันที่</span>  {{ date("d-m-Y", strtotime($transfer_news[$k]->post_date)) }}
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
                  <h4>Categories <span class="head-line"></span></h4>
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


      <!-- Divider -->
      <!-- <div class="hr1 margin-60"></div> -->


      <!-- Divider -->
      <div class="hr1 margin-50"></div>


      <!-- Start Clients/Partner Section -->
      <div class="container">
        <div class="our-clients">

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>ลิ้งหน่วยงานอื่นๆ</span></h4>

          <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

            <!-- Client 1 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c1.png" alt="" /></a>
            </div>

            <!-- Client 2 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c2.png" alt="" /></a>
            </div>

            <!-- Client 3 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c3.png" alt="" /></a>
            </div>

            <!-- Client 4 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c4.png" alt="" /></a>
            </div>

            <!-- Client 5 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c5.png" alt="" /></a>
            </div>

            <!-- Client 6 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c6.png" alt="" /></a>
            </div>

            <!-- Client 7 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c7.png" alt="" /></a>
            </div>

            <!-- Client 8 -->
            <div class="client-item item">
              <a href="#"><img src="/public/fn/demo1/images/c8.png" alt="" /></a>
            </div>

          </div>
        </div>
      </div>
      <!-- .container -->
      <!-- End Clients/Partner Section -->


    </div>
    <!-- End Content -->
@endsection
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
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="<?php echo asset('fn/'.$template.'/images/slider/bg1x.jpg'); ?>" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Welcome to <strong>Margo</strong></span>
                </h2>
                <h3 class="animated3">
                   <span>The ultimate aim of your business</span>
                  </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo asset('fn/'.$template.'/images/slider/bg2.jpg'); ?>" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                  <span><strong>Margo</strong> for the highest</span>
                </h2>
                <h3 class="animated5">
                  <span>The Key of your Success</span>
                </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo asset('fn/'.$template.'/images/slider/bg3.jpg'); ?>" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                  <span>The way of <strong>Success</strong></span>
                </h2>
                <h3 class="animated8 white">
                  <span>Why you are waiting</span>
                </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
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
    <div id="content">


      <!-- Start Services Section -->
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <i class="fa fa-globe fa-4x"></i>
            </div>
            <div class="service-content">
              <h4>Web Hosting</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <i class="fa fa-magic fa-4x"></i>
            </div>
            <div class="service-content">
              <h4>Web Hosting</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <i class="fa fa-rocket fa-4x"></i>
            </div>
            <div class="service-content">
              <h4>Web Hosting</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
      <!-- End Services Section -->


      <!-- Start Portfolio Section -->
      <div class="project">
        <div class="container">
          <!-- Start Recent Projects Carousel -->
          <div class="recent-projects">
            <h4 class="title"><span>Recent Projects</span></h4>
            <div class="projects-carousel touch-carousel">

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="images/portfolio-1/1.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Website</span>
                      <span>Drawing</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/2.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Logo</span>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/3.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Drawing</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/4.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Website</span>
                      <span>Ilustration</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a class="lightbox" title="This is an image title" href="images/portfolio-big-02.jpg">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/5.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Logo</span>
                      <span>Drawing</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/6.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a class="lightbox" title="This is an image title" href="images/portfolio-big-03.jpg">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/7.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Website</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/8.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Ilustration</span>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/9.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Ilustration</span>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/10.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Ilustration</span>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/11.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Ilustration</span>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <div class="portfolio-thumb">
                    <a href="#">
                      <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                      <img alt="" src="images/portfolio-1/12.jpg" />
                    </a>
                  </div>
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>Lorem Ipsum Dolor</h4>
                      <span>Ilustration</span>
                      <span>Animation</span>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Recent Projects Carousel -->
        </div>
        <!-- .container -->
      </div>
      <!-- End Portfolio Section -->


      <!-- Divider -->
      <div class="hr1 margin-60"></div>


      <!-- Start News & Skill Section -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Latest News</span></h4>

            <!-- Start Latest Posts -->
            <div class="latest-posts-classic">

              <!-- Post 1 -->
              <div class="post-row">
                <div class="left-meta-post">
                  <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                  <div class="post-type"><i class="fa fa-picture-o"></i></div>
                </div>
                <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                <div class="post-content">
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet <a class="read-more" href="#">Read More...</a></p>
                </div>
              </div>

              <!-- Post 2 -->
              <div class="post-row">
                <div class="left-meta-post">
                  <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                  <div class="post-type"><i class="fa fa-picture-o"></i></div>
                </div>
                <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                <div class="post-content">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a class="read-more" href="#">Read More...</a></p>
                </div>
              </div>

            </div>
            <!-- End Latest Posts -->
          </div>
          <!-- .col-md-6 -->

          <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Skills</span></h4>

            <div class="skill-shortcode">
              <div class="skill">
                <p>Web Design</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="60">
                    <span class="progress-bar-span">60%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>Wordpress</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="80">
                    <span class="progress-bar-span">80%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>CSS 3</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="90">
                    <span class="progress-bar-span">90%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>HTML 5</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" data-percentage="100">
                    <span class="progress-bar-span">100%</span>
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- .col-md-6 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
      <!-- End News & Skill Section -->


      <!-- Divider -->
      <div class="hr1 margin-60"></div>


      <!-- Start Clients/Partner Section -->
      <div class="container">
        <div class="our-clients">

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Our Clients</span></h4>

          <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

            <!-- Client 1 -->
            <div class="client-item item">
              <a href="#"><img src="images/c1.png" alt="" /></a>
            </div>

            <!-- Client 2 -->
            <div class="client-item item">
              <a href="#"><img src="images/c2.png" alt="" /></a>
            </div>

            <!-- Client 3 -->
            <div class="client-item item">
              <a href="#"><img src="images/c3.png" alt="" /></a>
            </div>

            <!-- Client 4 -->
            <div class="client-item item">
              <a href="#"><img src="images/c4.png" alt="" /></a>
            </div>

            <!-- Client 5 -->
            <div class="client-item item">
              <a href="#"><img src="images/c5.png" alt="" /></a>
            </div>

            <!-- Client 6 -->
            <div class="client-item item">
              <a href="#"><img src="images/c6.png" alt="" /></a>
            </div>

            <!-- Client 7 -->
            <div class="client-item item">
              <a href="#"><img src="images/c7.png" alt="" /></a>
            </div>

            <!-- Client 8 -->
            <div class="client-item item">
              <a href="#"><img src="images/c8.png" alt="" /></a>
            </div>

          </div>
        </div>
      </div>
      <!-- .container -->
      <!-- End Clients/Partner Section -->


    </div>
    <!-- End Content -->

@endsection
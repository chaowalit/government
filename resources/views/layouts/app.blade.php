<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ระบบผู้บริหาร | Queensway</title>

    @include('layouts.header')
  </head>


  <body class="nav-md" style="background: #F7F7F7;">
    <div class="container body" style="height: 100%;min-height: 100%;">
      <div class="main_container">
        <div class="col-md-3 left_col" style="background: #2A3F54;height: 100%;">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Administrator</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{ asset('assets/images/user_1.ico') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>ยินดีต้อนรับ,</span>
                <h2>ผู้บริหาร Queensway</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                    <li class="{{ ($menu_nav == 'dashboard')? 'active':'' }}"><a><i class="fa fa-home"></i> ภาพรวม <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: {{ ($menu_nav == 'dashboard')? 'block':'none' }};">
                            <li class="{{ ($menu_nav == 'dashboard' && $menu_level == '1')? 'current-page':'' }}"><a href="{{ url('dashboard') }}">ภาพรวมทั้งหมด</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ ($menu_nav == 'branch')? 'active':'' }}"><a><i class="fa fa-sitemap"></i> สาขา <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: {{ ($menu_nav == 'branch')? 'block':'none' }};">
                          <li class="{{ ($menu_nav == 'branch' && $menu_level == '1')? 'current-page':'' }}"><a href="{{ url('branch') }}">จัดการสาขา</a>
                          </li>

                        </ul>
                    </li>
                    <li class=""><a><i class="fa fa-table"></i> รายงาน <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: {{ ($menu_nav == 'report')? 'block':'none' }};">
                          <!-- <li><a href="#">ออกรายงานรายคน</a>
                          </li> -->
                          <li class="{{ ($menu_nav == 'report' && $menu_level == '1')? 'current-page':'' }}">
                            <a href="{{ url('report/month') }}">ออกรายงานรายเดือน</a>
                          </li>
                          <li class="{{ ($menu_nav == 'report' && $menu_level == '2')? 'current-page':'' }}">
                            <a href="{{ url('report/year') }}">ออกรายงานรายปี</a>
                          </li>
                        </ul>
                    </li>

                </ul>
              </div>
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/images/user_1.ico') }}" alt="">ผู้บริหาร Queensway
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li> -->
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>



              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="height: 100%;min-height: 100%;" id="main_content_view">

            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- <footer class="navbar-default navbar-fixed-bottom" style="background: #F7F7F7;">
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    @include('layouts.footer')

    <script>
      $(document).ready(function() {
          $("#btn_update_branch").click(function(){
              if(confirm('คุณแน่ใจหรือไม่ ที่จะอัพเดตข้อมูลสาขานี้')){
                  $("#form_update_branch").submit();
              }
          });

          $("#btn_update_user_login_branch").click(function(){
              if(confirm('คุณแน่ใจหรือไม่ ที่จะอัพเดตข้อมูลการ login สาขานี้')){
                  $("#form_update_user_login_branch").submit();
              }
          });
      });
    </script>

    <!-- jQuery Smart Wizard -->
    <script>
      $(document).ready(function() {

      });
    </script>
    <!-- /jQuery Smart Wizard -->
    <style>

    </style>
  </body>
</html>

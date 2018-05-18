<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator</title>

  @include('admin.layouts.header')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/config_menu') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>MT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Administrator</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('admin/assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('admin/assets/dist/img/avatar2.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->full_name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('admin/assets/dist/img/avatar2.png') }}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->full_name }} - {{ Auth::user()->position }}
                  <small>Member since - {{ date("d-m-Y", strtotime(Auth::user()->created_at)) }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">ออกจากระบบ</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/assets/dist/img/avatar2.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->full_name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <!-- <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span> -->
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">หน้าแรก</li>
        <li class="<?php echo ($menu_nav == 'config_menu')? 'active':''; ?>">
            <a href="{{ url('/config_menu') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "ภาพรวมเมนู"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'popup_banner')? 'active':''; ?>">
            <a href="{{ url('admin/popup_banner') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "Popup Banner"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'slide_banner')? 'active':''; ?>">
            <a href="{{ url('admin/slide_banner') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "Slide Banner"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'bg_config')? 'active':''; ?>">
            <a href="{{ url('admin/bg_config') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "ตั้งค่าพื้นหลัง"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'other_link')? 'active':''; ?>">
            <a href="{{ url('admin/other_link') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "ลิ้งหน่วยงานอื่นๆ"; ?></span>
            </a>
        </li>
       <!--  <li class="<?php echo ($menu_nav == 'information')? 'active':''; ?>">
            <a href="{{ url('admin/information') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "ข่าวประชาสัมพันธ์"; ?></span>
            </a>
        </li> -->

        <li class="treeview <?php echo ($menu_nav == 'information')? 'active menu-open':''; ?>">
          <a href="#">
            <i class="fa fa-space-shuttle"></i>
            <span style="font-size: 12px;">โมดูลข่าวต่างๆ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/information') }}" style="font-size: 12px;">
                <i class="fa fa-circle-o"></i> ข่าวประชาสัมพันธ์</a>
            </li>
            <li>
                <a href="{{ url('/admin/purchase') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> ข่าวจัดซื้อ-จัดจ้าง
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/cal_mid_price') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> เผยแพร่การคำนวณราคากลาง
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/transfer_news') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> ข่าวโอนย้าย
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/resolution_of_meeting') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> มติประชุม
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/activity_news') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> หน้าข่าวกิจกรรม
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/presentation') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> นำเสนอผลงาน อปท.
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/landmarks') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> สถานที่สำคัญ(ท่องเที่ยว)
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/otop') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> ผลิตภัณฑ์OTOP
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/vdo') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> วีดีโอวิดิทัศน์
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/vdo_youtube') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> วีดีโอวิดิทัศน์ (Youtube)
                </a>
            </li>
          </ul>
        </li>


        <li class="header"><?php echo \Config::get('config_memu.main_2.main_show'); ?></li> <!--เกี่ยวกับหน่วยงาน -->
        <li class="<?php echo ($menu_nav == 'history_detail')? 'active':''; ?>">
            <a href="{{ url('/about/history_detail') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo \Config::get('config_memu.main_2.level_1'); ?><?php //echo "ประวัติความเป็นมา"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'mission_vision')? 'active':''; ?>">
            <a href="{{ url('/about/mission_vision') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo \Config::get('config_memu.main_2.level_2'); ?><?php //echo "พันธกิจและวิสัยทัศน์"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'executive_messages')? 'active':''; ?>">
            <a href="{{ url('/about/executive_messages') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo \Config::get('config_memu.main_2.level_3'); ?><?php //echo "สานส์จากผู้บริหาร"; ?></span>
            </a>
        </li>
        <!-- <li class="<?php echo ($menu_nav == 'staff_structure')? 'active':''; ?>">
            <a href="{{ url('/admin/staff_structure') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "โครงสร้างบุคคลากร"; ?></span>
            </a>
        </li> -->

        <li class="treeview <?php echo ($menu_nav == 'staff_structure')? 'active menu-open':''; ?>">
          <a href="#">
            <i class="fa fa-space-shuttle"></i>
            <span style="font-size: 12px;"><?php echo \Config::get('config_memu.main_2.level_4'); ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/admin/staff_structure/category') }}" style="font-size: 12px;">
                <i class="fa fa-circle-o"></i> จัดการหมวดหมู่</a>
            </li>
            <li>
                <a href="{{ url('/admin/staff_structure') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> แสดงรายการทั้งหมด
                </a>
            </li>
          </ul>
        </li>

        <!-- <li class="header">ข้อมูลบริการ</li>
        <li class="<?php echo ($menu_nav == '')? 'active':''; ?>">
            <a href="{{ url('/') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "แผนงาน"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == '')? 'active':''; ?>">
            <a href="{{ url('/') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "รายงาน"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == '')? 'active':''; ?>">
            <a href="{{ url('/') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "เอกสารเผยแพร่"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == '')? 'active':''; ?>">
            <a href="{{ url('/') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "คู่มือประชาชน"; ?></span>
            </a>
        </li> -->

        <li class="header">ศูนย์ข้อมูลข่าวสารออนไลน์</li>
        <!-- <li class="<?php echo ($menu_nav == 'online_electronic_data')? 'active':''; ?>">
            <a href="{{ url('/online_electronic_data') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo "ข่าวสารอิเล็กทรอนิกส์ของราชการ"; ?></span>
            </a>
        </li> -->

        <li class="treeview <?php echo ($menu_nav == 'online_electronic_data')? 'active menu-open':''; ?>">
          <a href="#">
            <i class="fa fa-space-shuttle"></i>
            <span style="font-size: 12px;"><?php echo \Config::get('config_memu.main_4.main_show'); ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/online_electronic_data/category') }}" style="font-size: 12px;">
                <i class="fa fa-circle-o"></i> จัดการหมวดหมู่</a>
            </li>
            <li>
                <a href="{{ url('/online_electronic_data') }}" style="font-size: 12px;">
                    <i class="fa fa-circle-o"></i> แสดงรายการทั้งหมด
                </a>
            </li>
          </ul>
        </li>

        <li class="<?php echo ($menu_nav == 'complaint')? 'active':''; ?>">
            <a href="{{ url('admin/complaint') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php echo \Config::get('config_memu.main_3'); ?><?php //echo "ร้องเรียน/ร้องทุกข์"; ?></span>
            </a>
        </li>
        <li class="<?php echo ($menu_nav == 'survey')? 'active':''; ?>">
            <a href="{{ url('admin/survey') }}"><i class="fa fa-space-shuttle"></i> 
                <span style="font-size: 12px;"><?php // echo \Config::get('config_memu.main_4.level_7'); ?><?php echo "สรุปผลความพึงพอใจ"; ?></span>
            </a>
        </li>

        <li class="header">อื่นๆ</li>
        <!-- <li class="<?php echo ($menu_nav == 'visit_book')? 'active':''; ?>">
            <a href="{{ url('/visit_book') }}"><i class="fa fa-space-shuttle"></i> <span><?php echo \Config::get('config_memu.main_5'); ?><?php //echo "สมุดเยี่ยม"; ?></span></a>
        </li> -->
        <li class="<?php echo ($menu_nav == 'contact_us')? 'active':''; ?>">
            <a href="{{ url('/admin/contact_us') }}"><i class="fa fa-whatsapp"></i> <span><?php echo \Config::get('config_memu.main_6'); ?><?php //echo "ติดต่อเรา"; ?></span></a>
        </li>

        <li class="<?php echo ($menu_nav == 'user')? 'active':''; ?>">
            <a href="{{ url('/admin/user') }}"><i class="fa fa-space-shuttle"></i> <span>
                จัดการผู้ใช้งาน
            </span></a>
        </li>

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="#">chaodev.com</a>.</strong> All rights
    reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('admin.layouts.footer')

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>

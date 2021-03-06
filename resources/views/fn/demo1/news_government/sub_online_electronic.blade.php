<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><?php echo \Config::get('config_memu.main_4.main_show'); ?></h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">{{ $main_menu_name }}</a></li>
              <!-- <li>ประวัติความเป็นมา</li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">


          <!--Sidebar-->
          <div class="col-md-3 sidebar left-sidebar custom-page-content">

            <div class="tabs-section">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active" style="width: 100%;"><a href="#tab-4" data-toggle="tab" aria-expanded="true" style="margin-right: 0px;color: #fff;background-color: #ee3733;text-align: center;">โปรดเลือกรายการข้อมูลที่ต้องการ</a></li>
              </ul>

              <!-- Tab Panels -->
              <div class="tab-content" style="height: 100%;">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade active in" id="tab-4">

                    <div class="widget widget-categories" style="margin-bottom: 0px;">
                      <h4 style="font-size: 13px;"><a href="{{ url('/online_electronic') }}"><i class="fa fa-fw fa-folder-open"></i> <?php echo \Config::get('config_memu.main_4.level_1'); ?></a> <span class="head-line"></span></h4>
                      <!-- <ul>
                        <li>
                          <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> Brandign</a>
                        </li>
                        <li>
                          <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> Design</a>
                        </li>
                        <li>
                          <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> Development</a>
                        </li>
                        <li>
                          <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> Graphic</a>
                        </li>
                      </ul> -->
                    </div>
                  <div class="widget widget-categories" style="margin-bottom: 10px;">
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> <?php echo \Config::get('config_memu.main_4.level_2'); ?> <span class="head-line"></span></h4>
                      <ul>
                        <?php
                                if(isset($menu_government_online['online_data_section_7'][0])){
                                foreach ($menu_government_online['online_data_section_7'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/online_data_section_7').'/'.$value->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                      </ul>
                    </div>
                    <div class="widget widget-categories" style="margin-bottom: 10px;">
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> <?php echo \Config::get('config_memu.main_4.level_3'); ?> <span class="head-line"></span></h4>
                      <ul>
                        <?php
                                if(isset($menu_government_online['online_data_section_9'][0])){
                                foreach ($menu_government_online['online_data_section_9'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/online_data_section_9').'/'.$value->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                      </ul>
                    </div>
                    <div class="widget widget-categories" style="margin-bottom: 10px;">
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> <?php echo \Config::get('config_memu.main_4.level_4'); ?> <!-- สัญญาอื่นๆ --><span class="head-line"></span></h4>
                      <ul>
                        <?php
                                if(isset($menu_government_online['online_contract_other'][0])){
                                foreach ($menu_government_online['online_contract_other'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/online_contract_other').'/'.$value->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                      </ul>
                    </div>
                    <div class="widget widget-categories" style="margin-bottom: 10px;">
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> <?php echo \Config::get('config_memu.main_4.level_5'); ?> <!-- เอกสารอื่นๆที่ต้องรายงาน --><span class="head-line"></span></h4>
                      <ul>
                        <?php
                                if(isset($menu_government_online['other_neccessary'][0])){
                                foreach ($menu_government_online['other_neccessary'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/other_neccessary').'/'.$value->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                      </ul>
                    </div>
                    <div class="widget widget-categories" style="margin-bottom: 10px;">
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> <?php echo \Config::get('config_memu.main_4.level_6'); ?>  <!--ข้อมูลข่าวสารที่น่าสนใจ--><span class="head-line"></span></h4>
                      <ul>
                        <?php
                                if(isset($menu_government_online['document_interesting'][0])){
                                foreach ($menu_government_online['document_interesting'] as $key => $value) {
                                    if($value->active == '1'){
                            ?>
                                        <li>
                                            <a href="<?php echo url('sub_online_electronic/document_interesting').'/'.$value->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-file-text"></i> {{ $value->sub_menu_name }}
                                            </a>
                                        </li>
                            <?php
                                    }
                                } 
                            }
                            ?>
                      </ul>
                    </div>
                </div>

              </div>
              <!-- End Tab Panels -->

            </div>

          </div>
          <!--End sidebar-->


          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box custom-right-sidebar">

            <!-- Start Post -->
            <div class="blog-post image-post">
              <!-- Post Thumb -->
              <!-- <div class="post-head">
                <a class="lightbox" title="This is an image title" href="images/blog-01.jpg">
                  <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                  <img alt="" src="images/blog-01.jpg">
                </a>
              </div> -->

            <div class="call-action call-action-boxed call-action-style3 clearfix" style="padding: 5px 40px;">
                <!-- Call Action Text -->
                <h3 class="primary" style="color: #fff;text-align: center;">{{ $main_menu_name }}</h3>
            </div>
            <br>
            <div class="box-body table-responsive no-padding">
                <?php if(isset($news_online_type[0])){ 
                        foreach ($news_online_type as $k => $v) {
                            if($id_selected == $v->id){
                ?>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                  <th colspan="5" style="text-align: center;">
                                    <?php 
                                        echo $v->sub_menu_name;
                                    ?>
                                    </th>
                                </tr>
                                <tr>
                                  <th style="text-align: center;">#</th>
                                  <th>หัวเรื่อง</th>
                                  <th style="text-align: center;">ชั้นวาง</th>
                                  <th style="text-align: center;">แฟ้มที่</th>
                                  <th style="text-align: center;">ดาวน์โหลด</th>
                                </tr>
                                    <?php 
                                        if(isset($news_online_info[0])){
                                            foreach ($news_online_info as $key => $value) {
                                                if($v->sub_menu_name == $value->sub_menu_name){
                                    ?>
                                                <tr>
                                                    <td style="text-align: center;">{{ ++$key }}</td>
                                                  <td>{{ $value->news_info_name }}</td>
                                                  <td style="text-align: center;">{{ $value->floor_at }}</td>
                                                  <td style="text-align: center;">{{ $value->doc_at }}</td>
                                                  <td style="text-align: center;">
                                                    <a href="/<?php echo $value->file_name; ?>" target="_blank"><span class="label label-primary">โหลด</span></a>
                                                    </td>
                                                </tr>
                                    <?php } } } ?>
                              </tbody>
                        </table>
                <?php }else{
                    continue;
                } } } ?>
            </div>

            </div>
            <!-- End Post -->

            <!-- Start Pagination -->
            <!-- <div id="pagination">
              <span class="all-pages">Page 1 of 3</span>
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <a class="next-page" href="#">Next</a>
            </div> -->
            <!-- End Pagination -->

          </div>
          <!-- End Blog Posts -->


        </div>
      </div>
    </div>
    <!-- End Content -->

    <style type="text/css">
        @media (min-width: 992px){
            .col-md-9 {
                width: 74%;
            }
        }
    </style>

@endsection
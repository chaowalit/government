<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>ข้อมูลข่าวสารอิเล็กทรอนิกส์ของราชการ</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">ดัชนีรวม / ดัชนีประจำแฟ้ม</a></li>
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
          <div class="col-md-3 sidebar left-sidebar">

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
                      <h4 style="font-size: 13px;"><a href="{{ url('/online_electronic') }}"><i class="fa fa-fw fa-folder-open"></i> ดัชนีรวม / ดัชนีประจำแฟ้ม</a> <span class="head-line"></span></h4>
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
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> ข้อมูลข่าวสารตามมาตรา 7 <span class="head-line"></span></h4>
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
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> ข้อมูลข่าวสารตามมาตรา 9 <span class="head-line"></span></h4>
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
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> จัดซื้อจัดจ้าง/การเงิน <!-- สัญญาอื่นๆ --><span class="head-line"></span></h4>
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
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> สรุปรายงาน <!-- เอกสารอื่นๆที่ต้องรายงาน --><span class="head-line"></span></h4>
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
                      <h4 style="font-size: 13px;"><i class="fa fa-fw fa-folder-open"></i> ข้อมูลข่าวสารอื่นๆ  <!--ข้อมูลข่าวสารที่น่าสนใจ--><span class="head-line"></span></h4>
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
          <div class="col-md-9 blog-box">

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
                <h3 class="primary" style="color: #fff;text-align: center;">ข้อมูลข่าวสารตามมาตรา 7</h3>
            </div>
            <br>
            <div class="box-body table-responsive no-padding">
                <?php if(isset($Section7[0])){ 
                        foreach ($Section7 as $k => $v) {
                ?>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                  <th colspan="5" style="text-align: center;">{{ $v->sub_menu_name }}</th>
                                </tr>
                                <tr>
                                  <th style="text-align: center;">#</th>
                                  <th>หัวเรื่อง</th>
                                  <th style="text-align: center;">ชั้นวาง</th>
                                  <th style="text-align: center;">แฟ้มที่</th>
                                  <th style="text-align: center;">ดาวน์โหลด</th>
                                </tr>
                                    <?php 
                                        if(isset($Section7Info[0])){
                                            foreach ($Section7Info as $key => $value) {
                                                if($v->id == $value->online_data_section_7_id){
                                    ?>
                                                <tr>
                                                    <td style="text-align: center;">{{ ++$key }}</td>
                                                  <td>{{ $value->news_info_name }}</td>
                                                  <td style="text-align: center;">{{ $value->floor_at }}</td>
                                                  <td style="text-align: center;">{{ $value->doc_at }}</td>
                                                  <td style="text-align: center;">
                                                    <a href="<?php echo $value->file_name; ?>" target="_blank"><span class="label label-primary">โหลด</span></a>
                                                    </td>
                                                </tr>
                                    <?php } } } ?>
                              </tbody>
                        </table>
                <?php } } ?>
            </div>

            <div class="call-action call-action-boxed call-action-style3 clearfix" style="padding: 5px 40px;">
                <!-- Call Action Text -->
                <h3 class="primary" style="color: #fff;text-align: center;">ข้อมูลข่าวสารตามมาตรา 9</h3>
            </div>
            <br>
            <div class="box-body table-responsive no-padding">
              <?php if(isset($Section9[0])){ 
                        foreach ($Section9 as $k => $v) {
                ?>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                  <th colspan="5" style="text-align: center;">{{ $v->sub_menu_name }}</th>
                                </tr>
                                <tr>
                                  <th style="text-align: center;">#</th>
                                  <th>หัวเรื่อง</th>
                                  <th style="text-align: center;">ชั้นวาง</th>
                                  <th style="text-align: center;">แฟ้มที่</th>
                                  <th style="text-align: center;">ดาวน์โหลด</th>
                                </tr>
                                    <?php 
                                        if(isset($Section9Info[0])){
                                            foreach ($Section9Info as $key => $value) {
                                                if($v->id == $value->online_data_section_9_id){
                                    ?>
                                                <tr>
                                                    <td style="text-align: center;">{{ ++$key }}</td>
                                                  <td>{{ $value->news_info_name }}</td>
                                                  <td style="text-align: center;">{{ $value->floor_at }}</td>
                                                  <td style="text-align: center;">{{ $value->doc_at }}</td>
                                                  <td style="text-align: center;">
                                                    <a href="<?php echo $value->file_name; ?>" target="_blank"><span class="label label-primary">โหลด</span></a>
                                                    </td>
                                                </tr>
                                    <?php } } } ?>
                              </tbody>
                        </table>
                <?php } } ?>
            </div>

            <div class="call-action call-action-boxed call-action-style3 clearfix" style="padding: 5px 40px;">
                <!-- Call Action Text -->
                <h3 class="primary" style="color: #fff;text-align: center;">จัดซื้อจัดจ้าง/การเงิน</h3>
            </div>
            <br>
            <div class="box-body table-responsive no-padding">
              <?php if(isset($ContractOther[0])){ 
                        foreach ($ContractOther as $k => $v) {
                ?>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                  <th colspan="5" style="text-align: center;">{{ $v->sub_menu_name }}</th>
                                </tr>
                                <tr>
                                  <th style="text-align: center;">#</th>
                                  <th>หัวเรื่อง</th>
                                  <th style="text-align: center;">ชั้นวาง</th>
                                  <th style="text-align: center;">แฟ้มที่</th>
                                  <th style="text-align: center;">ดาวน์โหลด</th>
                                </tr>
                                    <?php 
                                        if(isset($ContractOtherInfo[0])){
                                            foreach ($ContractOtherInfo as $key => $value) {
                                                if($v->id == $value->online_contract_other_id){
                                    ?>
                                                <tr>
                                                    <td style="text-align: center;">{{ ++$key }}</td>
                                                  <td>{{ $value->news_info_name }}</td>
                                                  <td style="text-align: center;">{{ $value->floor_at }}</td>
                                                  <td style="text-align: center;">{{ $value->doc_at }}</td>
                                                  <td style="text-align: center;">
                                                    <a href="<?php echo $value->file_name; ?>" target="_blank"><span class="label label-primary">โหลด</span></a>
                                                    </td>
                                                </tr>
                                    <?php } } } ?>
                              </tbody>
                        </table>
                <?php } } ?>
            </div>

            <div class="call-action call-action-boxed call-action-style3 clearfix" style="padding: 5px 40px;">
                <!-- Call Action Text -->
                <h3 class="primary" style="color: #fff;text-align: center;">สรุปรายงาน</h3>
            </div>
            <br>
            <div class="box-body table-responsive no-padding">
              <?php if(isset($OtherNeccessary[0])){ 
                        foreach ($OtherNeccessary as $k => $v) {
                ?>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                  <th colspan="5" style="text-align: center;">{{ $v->sub_menu_name }}</th>
                                </tr>
                                <tr>
                                  <th style="text-align: center;">#</th>
                                  <th>หัวเรื่อง</th>
                                  <th style="text-align: center;">ชั้นวาง</th>
                                  <th style="text-align: center;">แฟ้มที่</th>
                                  <th style="text-align: center;">ดาวน์โหลด</th>
                                </tr>
                                    <?php 
                                        if(isset($OtherNeccessaryInfo[0])){
                                            foreach ($OtherNeccessaryInfo as $key => $value) {
                                                if($v->id == $value->online_document_other_neccessary_id){
                                    ?>
                                                <tr>
                                                    <td style="text-align: center;">{{ ++$key }}</td>
                                                  <td>{{ $value->news_info_name }}</td>
                                                  <td style="text-align: center;">{{ $value->floor_at }}</td>
                                                  <td style="text-align: center;">{{ $value->doc_at }}</td>
                                                  <td style="text-align: center;">
                                                    <a href="<?php echo $value->file_name; ?>" target="_blank"><span class="label label-primary">โหลด</span></a>
                                                    </td>
                                                </tr>
                                    <?php } } } ?>
                              </tbody>
                        </table>
                <?php } } ?>
            </div>

            <div class="call-action call-action-boxed call-action-style3 clearfix" style="padding: 5px 40px;">
                <!-- Call Action Text -->
                <h3 class="primary" style="color: #fff;text-align: center;">ข้อมูลข่าวสารอื่นๆ</h3>
            </div>
            <br>
            <div class="box-body table-responsive no-padding">
              <?php if(isset($DocumentInteresting[0])){ 
                        foreach ($DocumentInteresting as $k => $v) {
                ?>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                  <th colspan="5" style="text-align: center;">{{ $v->sub_menu_name }}</th>
                                </tr>
                                <tr>
                                  <th style="text-align: center;">#</th>
                                  <th>หัวเรื่อง</th>
                                  <th style="text-align: center;">ชั้นวาง</th>
                                  <th style="text-align: center;">แฟ้มที่</th>
                                  <th style="text-align: center;">ดาวน์โหลด</th>
                                </tr>
                                    <?php 
                                        if(isset($DocumentInterestingInfo[0])){
                                            foreach ($DocumentInterestingInfo as $key => $value) {
                                                if($v->id == $value->online_document_interesting_id){
                                    ?>
                                                <tr>
                                                    <td style="text-align: center;">{{ ++$key }}</td>
                                                  <td>{{ $value->news_info_name }}</td>
                                                  <td style="text-align: center;">{{ $value->floor_at }}</td>
                                                  <td style="text-align: center;">{{ $value->doc_at }}</td>
                                                  <td style="text-align: center;">
                                                    <a href="<?php echo $value->file_name; ?>" target="_blank"><span class="label label-primary">โหลด</span></a>
                                                    </td>
                                                </tr>
                                    <?php } } } ?>
                              </tbody>
                        </table>
                <?php } } ?>
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

@endsection
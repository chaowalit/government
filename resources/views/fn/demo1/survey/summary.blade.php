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
          <li><a href="#">หน้าแรก</a></li>
          <li><?php echo \Config::get('config_memu.main_4.level_7'); ?></li>
          <li>สรุปผลความพึงพอใจ</li>
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

      <!--Sidebar-->
      <div class="col-md-1">

      </div>
      <!--End sidebar-->

	<!-- Page Content -->
  <div class="col-md-10 page-content custom-right-sidebar">

    <div class="blog-post image-post">
      <!-- Post Content -->
      <div class="post-content" style="text-align: center;padding-left: 0px;">
        <h2>
        	สรุปผลความพึงพอใจเกี่ยวกับการให้บริการข้อมูลข่าวสาร<br>
        	<a href="#"><?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>
        	</a>
        </h2>
        <ul class="post-meta">
          <li style="float: left;text-align: left;">
          	 	<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          	 	โปรดคลิกเลือกในรายการตามความเป็นจริง หรือที่ตรงกับความคิดเห็นหรือความรู้สึกของท่านมากที่สุด เพื่อนำข้อมูลที่ได้รับไปใช้ประโยชน์ในการพัฒนาและปรับปรุงการบริหารจัดการด้านการเปิดเผยและให้บริการข้อมูลข่าวสารของ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?> ให้มีประสิทธิภาพมากยิ่งขึ้น -->
          </li>
          <!-- <li><a href="#">WordPress</a>, <a href="#">Graphic</a></li>
          <li><a href="#">4 Comments</a></li> -->
        </ul><hr>
      </div>
        <?php if(session('bg_color')){ ?>
            <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo session('msg'); ?>
            </div>
        <?php } ?>
      	
		<div class="row pricing-tables">

          <div class="col-md-6 col-sm-6">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>หัวข้อ</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li><strong>
                  	1. ความสะดวก รวดเร็วในการค้นหาข้อมูล/เข้าถึงข้อมูลข่าวสาร
                  </strong>
                  </li>
                  <li> โหวต ดีมาก</li>
                  <li> โหวต ดี</li>
                  <li> โหวต ปานกลาง</li>
                  <li> โหวต น้อย</li>
                  <li> โหวต ควรปรับปรุง</li>
                </ul>
              </div>

            </div>
          </div>

          <div class="col-md-2 col-sm-2">
            <div class="pricing-table highlight-plan">
              <div class="plan-name">
                <h3>เปอร์เซ็น</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li>
                    <?php
                    	echo $summary_survey['easy_data']['_5'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['easy_data']['_4'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['easy_data']['_3'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['easy_data']['_2'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['easy_data']['_1'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                </ul>
              </div>

            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>จำนวน</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['easy_data']['_5']; ?></li>
                  <li><?php echo $summary_survey['easy_data']['_4']; ?></li>
                  <li><?php echo $summary_survey['easy_data']['_3']; ?></li>
                  <li><?php echo $summary_survey['easy_data']['_2']; ?></li>
                  <li><?php echo $summary_survey['easy_data']['_1']; ?></li>
                </ul>
              </div>

            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>ทั้งหมด</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <div class="row pricing-tables">

          <div class="col-md-6 col-sm-6">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>หัวข้อ</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li><strong>
                  	2. ข้อมูลมีความถูกต้องและเป็นปัจจุบัน
                  </strong>
                  </li>
                  <li> โหวต ดีมาก</li>
                  <li> โหวต ดี</li>
                  <li> โหวต ปานกลาง</li>
                  <li> โหวต น้อย</li>
                  <li> โหวต ควรปรับปรุง</li>
                </ul>
              </div>

            </div>
          </div>

          <div class="col-md-2 col-sm-2">
            <div class="pricing-table highlight-plan">
              <div class="plan-name">
                <h3>เปอร์เซ็น</h3>
              </div>
              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li>
                    <?php
                    	echo $summary_survey['correct_data']['_5'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['correct_data']['_4'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['correct_data']['_3'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['correct_data']['_2'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['correct_data']['_1'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>จำนวน</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['correct_data']['_5']; ?></li>
                  <li><?php echo $summary_survey['correct_data']['_4']; ?></li>
                  <li><?php echo $summary_survey['correct_data']['_3']; ?></li>
                  <li><?php echo $summary_survey['correct_data']['_2']; ?></li>
                  <li><?php echo $summary_survey['correct_data']['_1']; ?></li>
                </ul>
              </div>

            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>ทั้งหมด</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row pricing-tables">

          <div class="col-md-6 col-sm-6">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>หัวข้อ</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li><strong>
                  	3. ข้อมูลที่ได้รับนำไปใช้ประโยชน์ได้อย่างมีประสิทธิภาพ
                  </strong>
                  </li>
                  <li> โหวต ดีมาก</li>
                  <li> โหวต ดี</li>
                  <li> โหวต ปานกลาง</li>
                  <li> โหวต น้อย</li>
                  <li> โหวต ควรปรับปรุง</li>
                </ul>
              </div>

            </div>
          </div>

          <div class="col-md-2 col-sm-2">
            <div class="pricing-table highlight-plan">
              <div class="plan-name">
                <h3>เปอร์เซ็น</h3>
              </div>
              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li>
                    <?php
                    	echo $summary_survey['use_data']['_5'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['use_data']['_4'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['use_data']['_3'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['use_data']['_2'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['use_data']['_1'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>จำนวน</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['use_data']['_5']; ?></li>
                  <li><?php echo $summary_survey['use_data']['_4']; ?></li>
                  <li><?php echo $summary_survey['use_data']['_3']; ?></li>
                  <li><?php echo $summary_survey['use_data']['_2']; ?></li>
                  <li><?php echo $summary_survey['use_data']['_1']; ?></li>
                </ul>
              </div>

            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>ทั้งหมด</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row pricing-tables">

          <div class="col-md-6 col-sm-6">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>หัวข้อ</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li><strong>
                  	4. ภาพรวมต่อการให้บริการข้อมูลข่าวสารของ<?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?>/ศูนย์ข้อมูลข่าวสาร
                  </strong>
                  </li>
                  <li> โหวต ดีมาก</li>
                  <li> โหวต ดี</li>
                  <li> โหวต ปานกลาง</li>
                  <li> โหวต น้อย</li>
                  <li> โหวต ควรปรับปรุง</li>
                </ul>
              </div>

            </div>
          </div>

          <div class="col-md-2 col-sm-2">
            <div class="pricing-table highlight-plan">
              <div class="plan-name">
                <h3>เปอร์เซ็น</h3>
              </div>
              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li>
                    <?php
                    	echo $summary_survey['overview_data']['_5'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['overview_data']['_4'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['overview_data']['_3'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['overview_data']['_2'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                  <li>
                    <?php
                    	echo $summary_survey['overview_data']['_1'] / $summary_survey['total'] * 100;
                    ?> %
          		  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>จำนวน</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['overview_data']['_5']; ?></li>
                  <li><?php echo $summary_survey['overview_data']['_4']; ?></li>
                  <li><?php echo $summary_survey['overview_data']['_3']; ?></li>
                  <li><?php echo $summary_survey['overview_data']['_2']; ?></li>
                  <li><?php echo $summary_survey['overview_data']['_1']; ?></li>
                </ul>
              </div>

            </div>
          </div>


          <div class="col-md-2 col-sm-2">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>ทั้งหมด</h3>
              </div>

              <div class="plan-list">
                <ul>
                  <li>&nbsp;</li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                  <li><?php echo $summary_survey['total']; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

    </div>

  </div>
  <!-- End Page Content-->

		<!--Sidebar-->
      <div class="col-md-1">

      </div>

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
    .blog-post{
    	border-bottom: none;
    	margin-bottom: 0px !important;
    	padding-bottom: 0px !important;
    }
    .checkbox label {
    	display: block;
    }
</style>

@endsection
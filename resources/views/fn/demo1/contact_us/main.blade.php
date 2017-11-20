<?php if($template == 'demo1'){ ?>
@extends('fn.demo1.layouts.app')
<?php } ?>

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>ติดต่อเรา</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#"></a></li>
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

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>แผนที่ Google Map</span></h4>

            <!-- Start Map -->
            <div id="google-map">
            </div>
            <!-- End Map -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>ข้อมูล</span></h4>

            <!-- Some Info -->
            <p style="font-size: 16px;"><?php echo isset($contact_us[0]->location_name)? $contact_us[0]->location_name:""; ?></p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>ที่อยู่:</strong> <?php echo isset($contact_us[0]->address)? $contact_us[0]->address:""; ?></li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> <?php echo isset($contact_us[0]->email)? $contact_us[0]->email:""; ?></li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> <?php echo isset($contact_us[0]->tel)? $contact_us[0]->tel:""; ?></li>
              <li><i class="fa fa-mobile"></i> <strong>Fax:</strong> <?php echo isset($contact_us[0]->fax)? $contact_us[0]->fax:""; ?></li>
              <li><i class="fa fa-facebook"></i> <strong>Facebook:</strong> <?php echo isset($contact_us[0]->facebook_url)? $contact_us[0]->facebook_url:""; ?></li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>เวลาเปิดทำการ</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>ทุกวัน จันทร์ - ศุกร์</strong> : 8.00 AM ถึง 5.00 PM</li>
              <li><strong>เสาร์</strong> : ปิด</li>
              <li><strong>อาทิตย์</strong> : ปิด</li>
            </ul>

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->

@endsection
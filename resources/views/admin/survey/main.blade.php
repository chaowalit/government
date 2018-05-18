@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $menu_name; ?>
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> เมนูหลัก</a></li>
        <li><a href="#" class="active"><?php echo $menu_name; ?></a></li>
        <!-- <li class="active">Blank page</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title">แสดงผลความพึงพอใจ
                <small>สามารถสร้างรูปแบบเนื้อหาที่จะแสดงหน้าเว็บได้ตามต้องการ</small>
                <a href="{{ url('/admin/survey') }}"><u style="font-size: 12px;">รีเฟรส</u></a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{ url('/admin/survey') }}"><u style="font-size: 12px;">Export PDF</u></a>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <?php if(session('bg_color') == 'success'){ ?>
                    <div class="alert alert-<?php echo session('bg_color'); ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo session('msg'); ?>
                      </div>
                <?php } ?>

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th></th>
                          <th style="width: 90px">จำนวน</th>
                          <th style="width: 90px">คิดเป็น %</th>
                        </tr>

                        <tr>
                          <td>1.</td>
                          <td>เพศ
                            <ul class="">
                              <li><span class="badge bg-white">ชาย</span></li>
                              <li><span class="badge bg-white">หญิง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>อายุ
                            <ul class="">
                              <li><span class="badge bg-white">อายุต่ำ 20 ปี</span></li>
                              <li><span class="badge bg-white">อายุ 20-30</span></li>
                              <li><span class="badge bg-white">อายุ 30-40</span></li>
                              <li><span class="badge bg-white">อายุ 40 ปีขึ้นไป</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>อาชีพของผู้ขอรับบริการข้อมูล
                            <ul class="">
                              <li><span class="badge bg-white">ข้าราชการ</span></li>
                              <li><span class="badge bg-white">รัฐวิสาหกิจ</span></li>
                              <li><span class="badge bg-white">ผู้ประกอบการเอกชน</span></li>
                              <li><span class="badge bg-white">ประชาชนทัวไป</span></li>
                              <li><span class="badge bg-white">อื่นๆ</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>ข้อมูลข่าวสารที่ขอดู/ขอรับบริการ
                            <ul class="">
                              <li ><p class="break-word"><span class="badge bg-white">แผ่นพับแนะนำองค์การบริการส่วนตำบลเมืองเสือ(โครงสร้างและการจัดการองค์กรในการดำเนินงาน สรุปอำนาจหน้าที่ที่สำคัญและวิธีการดำเนินงานและสถานที่ติดต่อเพื่อขอรับข้อมูลข่าวสารหรือคำแนะนำในการติดต่อกลับกับหน่วยงานรัฐ)
                              </span></p>
                              </li>
                              <li ><p class="break-word"><span class="badge bg-white">กฏ มติคณะรัฐมนตรี ข้อบังคับ คำสั่ง หนังสือเวียน ระเบียบ แบบแผน นโยบายหรือการตีความ ทั้งนี้เฉพาะที่จัดให้มีขึ้นโดยมีสภาพอย่างกฏ เพื่อให้มีผลเป็นการทั้วไปต่อภาคเอกชน</span></p></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><p class=""><span class="badge bg-green">45%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">55%</span></p></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>ข้อมูลข่าวสารตามมาตรา9 แห่งกฏหมายข้อมุลข่าวสารราชการ
                            <ul class="">
                              <li ><p class="break-word"><span class="badge bg-white">ผลการพิจารณาหรือคำวินิจฉัยที่มีผลโดยตรงต่อเอกชน รวมทั้งความเห็นแย้งและคำสั่งที่เกี่ยวข้องในการพิจารณาวินิจฉัยดังกล่าว
                              </span></p>
                              </li>
                              <li ><p class="break-word"><span class="badge bg-white">นโยบายและการตีความ</span></p></li>
                              <li >
                                <p class="break-word">
                                <span class="badge bg-white">
                                    แผนงาน โครงการ และงบประมาณรายจ่ายประจำปีของปีที่กำลังดำเนินการ
                                </span>
                                </p>
                              </li>
                              <li >
                                <p class="break-word">
                                <span class="badge bg-white">
                                    คู่มือหรือคำสั่งเกี่ยวกับวิธีปฏิบัติงานของเจ้าหน้าที่ของรัฐซึ่งมีผลกระทบถึงสิทธิ หน้าที่ของเอกชน
                                </span>
                                </p>
                              </li>
                              <li >
                                <p class="break-word">
                                <span class="badge bg-white">
                                    สิ่งพิมพ์ที่ได้มีการอ้างถึงในราชกิจจานุเบกษา
                                </span>
                                </p>
                              </li>
                              <li >
                                <p class="break-word">
                                <span class="badge bg-white">
                                    สัญญาสัมปทาน สัญญาที่มีลักษณะเป็นการผูกขาดตัดตอน หรือสัญญาร่วมทุนกับเอกชนในการจัดทำบริการสาธารณะ
                                </span>
                                </p>
                              </li>
                              <li >
                                <p class="break-word">
                                <span class="badge bg-white">
                                    มติคณะรัฐมนตรี หรือมติคณะกรรมการที่แต่งตั้งโดยกฎหมายหรือโดยมติคณะรัฐมนตรี
                                </span>
                                </p>
                              </li>
                              <li >
                                <p class="break-word">
                                <span class="badge bg-white">
                                    ประกาศประกวดราคา ประกาศสอบราคา และสรุปผลการพิจารณาการจัดซื้อจัดจ้าง
                                </span>
                                </p>
                              </li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                  <li><p class=""><span class="badge bg-green">5</span></p></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><p class=""><span class="badge bg-green">45%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">55%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">45%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">55%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">45%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">55%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">45%</span></p></li>
                                  <li><p class=""><span class="badge bg-green">55%</span></p></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>6.</td>
                          <td>ข้อมูลข่าวสารอื่นเป็นการทั่วไป
                            <ul class="">
                              <li><span class="badge bg-white">แผ่นพับกระบวนงาน</span></li>
                              <li><span class="badge bg-white">รายงานวิชาการ</span></li>
                              <li><span class="badge bg-white">เอกสารเผยแพร่</span></li>
                              <li><span class="badge bg-white">โปสเตอร์</span></li>
                              <li><span class="badge bg-white">จุลสาร</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>7.</td>
                          <td>ความสะดวกทั่วไปในการค้นหาข้อมุล/เข้าถึงข้อมูล
                            <ul class="">
                              <li><span class="badge bg-white">ดีมาก</span></li>
                              <li><span class="badge bg-white">ดี</span></li>
                              <li><span class="badge bg-white">ปานกลาง</span></li>
                              <li><span class="badge bg-white">น้อย</span></li>
                              <li><span class="badge bg-white">ควรปรับปรุง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>8.</td>
                          <td>ข้อมูลมีความถูกต้องและเป็นปัจจุบัน
                            <ul class="">
                              <li><span class="badge bg-white">ดีมาก</span></li>
                              <li><span class="badge bg-white">ดี</span></li>
                              <li><span class="badge bg-white">ปานกลาง</span></li>
                              <li><span class="badge bg-white">น้อย</span></li>
                              <li><span class="badge bg-white">ควรปรับปรุง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>9.</td>
                          <td>ข้อมูลที่ได้รับนำไปใช้อย่างมีประสิทธิภาพ
                            <ul class="">
                              <li><span class="badge bg-white">ดีมาก</span></li>
                              <li><span class="badge bg-white">ดี</span></li>
                              <li><span class="badge bg-white">ปานกลาง</span></li>
                              <li><span class="badge bg-white">น้อย</span></li>
                              <li><span class="badge bg-white">ควรปรับปรุง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>10.</td>
                          <td>การให้บริการของเจ้าหน้าที่(ความกระตืรือร้น สุภาพ อ่อนโยน การยิ้มแย้มแจ่มใส และการช่วยเหลือในการค้นหาข้อมูล)
                            <ul class="">
                              <li><span class="badge bg-white">ดีมาก</span></li>
                              <li><span class="badge bg-white">ดี</span></li>
                              <li><span class="badge bg-white">ปานกลาง</span></li>
                              <li><span class="badge bg-white">น้อย</span></li>
                              <li><span class="badge bg-white">ควรปรับปรุง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>11.</td>
                          <td>ความสะดวกสบาย ความสะอาด และความสวยงานของสถานที่ที่ให้บริการข้อมุล
                            <ul class="">
                              <li><span class="badge bg-white">ดีมาก</span></li>
                              <li><span class="badge bg-white">ดี</span></li>
                              <li><span class="badge bg-white">ปานกลาง</span></li>
                              <li><span class="badge bg-white">น้อย</span></li>
                              <li><span class="badge bg-white">ควรปรับปรุง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>12.</td>
                          <td>ภาพรวมต่อให้บริการข้อมูลของการให้บริการข้อมูล
                            <ul class="">
                              <li><span class="badge bg-white">ดีมาก</span></li>
                              <li><span class="badge bg-white">ดี</span></li>
                              <li><span class="badge bg-white">ปานกลาง</span></li>
                              <li><span class="badge bg-white">น้อย</span></li>
                              <li><span class="badge bg-white">ควรปรับปรุง</span></li>
                            </ul>
                          </td>
                          <td>&nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                  <li><span class="badge bg-green">5</span></li>
                                </ul>
                          </td>
                          <td>
                              &nbsp;
                                <ul class="ul-non">
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">45%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                  <li><span class="badge bg-green">55%</span></li>
                                </ul>
                          </td>
                        </tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

    </section>
    <!-- /.content -->
  </div>
    <style type="text/css">
        .ul-non {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .break-word {
          width: 48em;
          /*background: lime;*/
          overflow-wrap: break-word;
        }
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 13px;
            font-weight: 500;
            line-height: 1.3;
            color: #fff;
            text-align: left;
            white-space: unset;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px;
        }
    </style>
@endsection
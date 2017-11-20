@extends('layouts.app')

@section('content')

<div class="">
    <div class="page-title">
      <div class="title_left">
	  	<i class="fa fa-table" style="font-size: 22px;"></i> <b>รายงาน >> รายงานรายเดือน</b>

      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="height:auto;">
          <div class="x_title">
            <h2>ออกรายงานรายเดือน (Month) ทุกสาขา</h2>
            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
          </div>

		  <div class="x_content">
              
				<div class="col-md-6 col-xs-12">
                  <form action="{{ url('report/gen_report_month') }}" method="POST" id="form_gen_report_month" class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">เดือน (Month)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="month_report" id="month_report" required>
								<option value="">กรุณาเลือกเดือน</option>
                                <option value="01">มกราคม</option>
								<option value="02">กุมภาพันธ์</option>
                                <option value="03">มีนาคม</option>
                                <option value="04">เมษายน</option>
                                <option value="05">พฤษภาคม</option>
                                <option value="06">มิถุนายน</option>
                                <option value="07">กรกฎาคม</option>
                                <option value="08">สิงหาคม</option>
                                <option value="09">กันยายน</option>
                                <option value="10">ตุลาคม</option>
                                <option value="11">พฤศจิกายน</option>
                                <option value="12">ธันวาคม</option>
							</select>
                          <!-- <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span> -->
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ปีที่ (Year)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          	<select class="form-control" name="year_report" id="year_report" required>
								<option value="">กรุณาเลือกปี</option>
                                <?php for($i = 2016 ; $i <= 2022 ; $i++){ ?>
								<option value="{{ $i }}">{{ $i }}</option>
                                <?php } ?>
							</select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ประเภทรายงาน</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          	<div class="radio" style="margin-top: 0px;">
								<label>
									<input name="type_report" value="credit" type="radio" class="ace" checked>
									<span class="lbl"> แบบวงเงิน</span>
								</label>
							</div>
                            <div class="radio" style="margin-top: 0px;">
								<label>
									<input name="type_report" value="debit" type="radio" class="ace" >
									<span class="lbl"> แบบรายคอร์ส</span>
								</label>
							</div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
							{!! csrf_field() !!}
                          <a href="{{ url('report/month') }}" class="btn btn-danger">ยกเลิก</a>
                          <button type="submit" id="" class="btn btn-success">ออกรายงาน</button>
                        </div>
                      </div>
                  </form>
              </div>

		  </div>

        </div>
      </div>
    </div>
  </div>

@endsection
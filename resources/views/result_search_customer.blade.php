<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ระบบค้นหาลูกค้า | แต่ละสาขา</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md" style="background: #fff;">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle" style="margin-top: 0%;">
			  <div class="text-center text-center">
				  <h1 class="">Result Search</h1>
				  <h2>ระบบค้นหาลูกค้า</h2>
	              <p><a href="{{ url('search_customer') }}"><b>ย้อนกลับไปค้นหาใหม่</b></a> <b><-- --></b> <a href="{{ url('login') }}"><b>หรือกลับหน้า login</b></a>
	              </p>
			  </div>
		  </div>
			  <div class="x_content">
				  <div class="col-md-2 col-sm-2 col-xs-2">

				  </div>
				  <div class="col-md-8 col-sm-8 col-xs-8">
				  <!-- start accordion -->
                  <?php //dump($result); ?>
				  <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                    @foreach($result as $key => $val)
					<div class="panel">
					  <a class="panel-heading {{ (($key+1) == 1)? "":"collapsed" }}" role="tab" id="" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne{{ $key+1 }}" aria-expanded="{{ (($key+1) == 1)? "true":"false" }}" aria-controls="collapseOne">
						<h4 class="panel-title">สาขาที่ #{{ $key+1 }} {{ $val['data_branch']['branch_name'] }}</h4>
					  </a>
					  <div id="collapseOne{{ $key+1 }}" class="panel-collapse collapse {{ (($key+1) == 1)? "in":"" }}" role="tabpanel" aria-labelledby="headingOne" aria-expanded="{{ (($key+1) == 1)? "true":"false" }}">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h5 class="panel-title text-center"><u>รายละเอียดข้อมูลสาขา</u></h5>
									<table class="table table-striped">
		  							<thead>
		  							  <tr>
		  								<th></th>

		  							  </tr>
		  							</thead>
		  							<tbody>
		  							  <tr>
		  								<th scope="row">
                                            ชื่อบริษัท : {{ $val['data_branch']['company_name'] }}<br>
                                            รหัสสาขา : {{ $val['data_branch']['branch_no'] }}, ชื่อสาขา : {{ $val['data_branch']['branch_name'] }}<br>
                                            ชื่อผู้รับผิดชอบ : {{ $val['data_branch']['first_name'] }} {{ $val['data_branch']['last_name'] }}<br>
                                            ที่อยู่ : {{ $val['data_branch']['address'] }}<br>
                                            โทร : {{ $val['data_branch']['tel'] }} <br>
                                            หมายเหตุ : {{ $val['data_branch']['comment'] }}
                                        </th>

		  							  </tr>

		  							</tbody>
		  						  </table>
			  				  	</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h5 class="panel-title text-center"><u>รายละเอียดข้อมูลลูกค้า</u></h5>
									<table class="table table-striped">
		  							<thead>
		  							  <tr>
		  								<th></th>

		  							  </tr>
		  							</thead>
		  							<tbody>
		  							  <tr>
		  								<th scope="row">
                                            รหัสลูกค้า : {{ $val['customer']['customer_number'] }} ,
                                            {{ $val['customer']['prefix'] }} {{ $val['customer']['full_name'] }} ({{ $val['customer']['nickname'] }})<br>
                                            หมายเลขประจำตัวประชาชน : {{ $val['customer']['thai_id'] }}<br>
                                            ที่อยู่ : {{ $val['customer']['address'] }}<br>
                                            โทร : {{ $val['customer']['tel'] }}<br>
                                            Email : {{ $val['customer']['email'] }}, วันเกิด : {{ $val['customer']['birthday'] }}<br>
                                            ประวัติการแพ้ยา : {{ $val['customer']['intolerance_history'] }}<br>
                                            หมายเหตุ : {{ $val['customer']['comment'] }}<br>
                                        </th>

		  							  </tr>

		  							</tbody>
		  						  </table>
			  				  	</div>
							</div>
							<div class="row">
								<h5 class="panel-title text-center"><u>รายละเอียดคอร์ส</u></h5>
								<table class="table table-striped">
								<thead>
								  <tr>
									<th>สถานะ</th>
									<th>ประเภทคอร์ส</th>
									<th>เล่มที่ใบเสร็จ</th>
									<th>เลขที่ใบเสร็จ</th>
                                    <th>ราคาทั้งหมด</th>
                                    <th>ยอดชำระ</th>
                                    <th>ยอดค้างชำระ</th>
                                    <th>Consultant</th>
								  </tr>
								</thead>
								<tbody>
                                    @foreach($val['all_course'] as $val)
								  <tr>
									<th scope="row">{{ $val['status_course'] }}</th>
									<td>{{ $val['type_course'] == 'credit'? "วงเงิน":"รายคอร์ส" }}</td>
									<td>{{ $val['book_no'] }}</td>
									<td>{{ $val['number_no'] }}</td>
                                    <th>{{ $val['total_price'] }}</th>
                                    <th>{{ $val['payment_amount_total'] }}</th>
                                    <th>{{ $val['accrued_expenses'] }}</th>
                                    <th>{{ $val['consultant'] }}</th>
								  </tr>
                                  @endforeach
								</tbody>
							  </table>
							</div>

						</div>
					  </div>
					</div>
                    @endforeach
                    @if(count($result) == 0)
                    <div class="text-center text-center">
                      <h1 class="">ไม่พบข้อมูลลูกค้านี้</h1>

                    </div>
                    @endif
				  </div>
				  <!-- end of accordion -->
			  </div>

			  <div class="col-md-2 col-sm-2 col-xs-2">

			  </div>
			</div>


        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

	<style>
		.accordion .panel-heading {
			background: #ccc;

		}
	</style>
  </body>
</html>

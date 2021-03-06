<?php //dump($result); 
?>
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
				  <!-- <h1 class="">Result Search</h1> -->
				  <h2>ลูกค้าที่ค้นหาเจอ</h2><p><h2>(กรุณาเลือกลูกค้าที่ต้องการทราบรายละเอียด)</h2>
	              <p><a href="{{ url('search_customer') }}"><b>ย้อนกลับไปค้นหาใหม่</b></a> <b><-- --></b> <a href="{{ url('login') }}"><b>หรือกลับหน้า login</b></a>
	              </p>
			  </div>
		  </div>
			  <div class="x_content">
				  <div class="col-md-2 col-sm-2 col-xs-2">

				  </div>
				  <div class="col-md-8 col-sm-8 col-xs-8">
				  <!-- start accordion -->
                  <?php //dump($result); 
                  ?>
				  <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                    @foreach($result as $key => $val)
					<div class="panel">
					  <a class="panel-heading {{ (($key+1) == 1)? "":"collapsed" }}" role="tab" id="" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne{{ $key+1 }}" aria-expanded="{{ (($key+1) == 1)? "true":"false" }}" aria-controls="collapseOne">
						<h4 class="panel-title">สาขาที่ #{{ $key+1 }} {{ $val['data_branch']['branch_name'] }}</h4>
					  </a>
					  <div id="collapseOne{{ $key+1 }}" class="panel-collapse collapse {{ (($key+1) == 1)? "in":"" }}" role="tabpanel" aria-labelledby="headingOne" aria-expanded="{{ (($key+1) == 1)? "true":"false" }}">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
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

							</div>
							<div class="row">
								<h5 class="panel-title text-center"><u>ลูกค้าที่ค้นหาเจอ</u></h5>
								<table class="table table-striped">
								<thead>
								  <tr>
									<th>รหัสลูกค้า</th>
									<th>ชื่อลูกค้า</th>
									<th>ชื่อเล่น</th>
									<th>หมายเลข ปปช.</th>
                                    <th>ที่อยู่</th>
                                    <th>โทร</th>
                                    <th>Email</th>
                                    <th>เลือก</th>
								  </tr>
								</thead>
								<tbody>
									@foreach($val['customer'] as $val_)
									<tr>
										<td scope="row">{{ $val_['customer_number'] }}</td>
										<td>{{ $val_['prefix'] }} {{ $val_['full_name'] }}</td>
										<td>{{ $val_['nickname'] }}</td>
										<td>{{ $val_['thai_id'] }}</td>
										  <td>{{ $val_['address'] }}</td>
										  <td>{{ $val_['tel'] }}</td>
										  <td>{{ $val_['email'] }}</td>
										  <td><a href="{{ url('result_search_customer') }}?keyword={{ $val_['id'] }}&url={{ base64_encode($val['url_branch']) }}"><label style="color: blue;">[เลือก]</label></a></td>
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

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
          <div class="col-middle">
            <div class="text-center text-center">
              <!-- <h1 class="error-number">404</h1> -->
              <h2>ระบบค้นหาลูกค้า</h2>
              <p>กรุณากรอกข้อมูลลูกค้าที่ต้องการค้นหา เช่น ชื่อ-นามสกุล, หมายเลข ปปช. / <a href="{{ url('login') }}"><b>หรือกลับหน้า login</b></a>
              </p>
              <div class="mid_center">
                <h3>ค้นหา</h3>
                <form action="{{ url('list_search_customer') }}" method="post">
                  <div class="col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" name="keyword" id="keyword" class="form-control" placeholder="กรุณากรอกคำค้นหา" required>
                      <span class="input-group-btn">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-default" type="submit">ค้นหา</button>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
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
  </body>
</html>

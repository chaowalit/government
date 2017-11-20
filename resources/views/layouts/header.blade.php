@if($menu_nav == 'dashboard' && $menu_level == 1)
<!-- Bootstrap -->
<link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

@elseif($menu_nav == 'branch' && $menu_level == 1)
<!-- Bootstrap -->
<link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

@elseif($menu_nav == 'report' && $menu_level == 1)
<!-- Bootstrap -->
<link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

@elseif($menu_nav == 'report' && $menu_level == 2)
<!-- Bootstrap -->
<link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

@endif

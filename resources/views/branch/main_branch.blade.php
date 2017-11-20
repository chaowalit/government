@extends('layouts.app')

@section('content')

<div class="">
    <div class="page-title">
      <div class="title_left">
	  	<i class="fa fa-sitemap" style="font-size: 22px;"></i> <b>สาขา >> จัดการสาขา</b>

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
            <h2>จัดการสาขา</h2>
            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
          </div>

		  <div class="x_content">
              @if(session('status'))
              <div class="alert alert-{{ (session('status') == 200)? 'success':'danger' }} alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>แจ้งเตือน : </strong> {{ session('msg') }}
              </div>
              @endif

			  <?php //dump($branch); ?>
			  <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">ชื่อบริษัท</th>
                          <th>รหัสสาขา</th>
                          <th>ชื่อสาขา</th>
                          <th>สถานะ</th>
                          <th style="width: 12%"></th>
                        </tr>
                      </thead>
                      <tbody>
						  @foreach($branch as $key => $val)
                        <tr>
                          <td>{{ ($key+1) }}</td>
                          <td>
                            <a>{{ $val['company_name'] }}</a>
                            <br>
                            <small>URL : {{ $val['url_branch'] }}</small>
                          </td>
                          <td>
                            {{ $val['branch_no'] }}
                          </td>
                          <td class="project_progress">
                            {{ $val['branch_name'] }}
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">เชื่อมต่อแล้ว</button>
                          </td>
                          <td>
                            <form action="{{ url('branch/show_edit_branch') }}" method="post">
                                <input type="hidden" name="id" value="{{ $val['id'] }}">
                                <input type="hidden" name="company_name" value="{{ $val['company_name'] }}">
                                <input type="hidden" name="branch_no" value="{{ $val['branch_no'] }}">
                                <input type="hidden" name="branch_name" value="{{ $val['branch_name'] }}">
                                <input type="hidden" name="first_name" value="{{ $val['first_name'] }}">
                                <input type="hidden" name="last_name" value="{{ $val['last_name'] }}">
                                <input type="hidden" name="address" value="{{ $val['address'] }}">
                                <input type="hidden" name="tel" value="{{ $val['tel'] }}">
                                <input type="hidden" name="url_branch" value="{{ $val['url_branch'] }}">
                                <input type="hidden" name="comment" value="{{ $val['comment'] }}">
                                <input type="hidden" name="email" value="{{ $val['email'] }}">
                                <input type="hidden" name="set_password_transection" value="{{ $val['set_password_transection'] }}">
                                {!! csrf_field() !!}
                                <button class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> จัดการข้อมูล </button>
                            </form>

                          </td>
                        </tr>
						@endforeach
                      </tbody>
                    </table>
		  </div>

        </div>
      </div>
    </div>
  </div>

@endsection

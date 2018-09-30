<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
{{--@include('includes.header')--}}
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	<header class="main-header">
		@include('includes.header')
		{{--@include("includes.nav-right")--}}
	</header>
	<!-- Left side column. contains the logo and sidebar -->
{{--@include('layouts.sidebar')--}}

<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		@yield('content')
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		@include('includes.footer')
	</footer>
	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Create the tabs -->
		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
			<li>
				<a href="#control-sidebar-home-tab" data-toggle="tab">
					<i class="fa fa-home"></i>
				</a>
			</li>
			<li>
				<a href="#control-sidebar-settings-tab" data-toggle="tab">
					<i class="fa fa-gears"></i>
				</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Home tab content -->
			<div class="tab-pane" id="control-sidebar-home-tab">
				<h3 class="control-sidebar-heading">Recent Activity</h3>
				<ul class="control-sidebar-menu">
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-birthday-cake bg-red"></i>
							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
								<p>Will be 23 on April 24th</p>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-user bg-yellow"></i>
							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
								<p>New phone +1(800)555-1234</p>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
								<p>nora@example.com</p>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-file-code-o bg-green"></i>
							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
								<p>Execution time 5 seconds</p>
							</div>
						</a>
					</li>
				</ul>
				<!-- /.control-sidebar-menu -->
				<h3 class="control-sidebar-heading">Tasks Progress</h3>
				<ul class="control-sidebar-menu">
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Custom Template Design
								<span class="label label-danger pull-right">70%</span>
							</h4>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Update Resume
								<span class="label label-success pull-right">95%</span>
							</h4>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-success" style="width: 95%"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Laravel Integration
								<span class="label label-warning pull-right">50%</span>
							</h4>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Back End Framework
								<span class="label label-primary pull-right">68%</span>
							</h4>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
							</div>
						</a>
					</li>
				</ul>
				<!-- /.control-sidebar-menu -->
			</div>
			<!-- /.tab-pane -->
			<!-- Stats tab content -->
			<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
			<!-- /.tab-pane -->
			<!-- Settings tab content -->
			<div class="tab-pane" id="control-sidebar-settings-tab">
				<form method="post">
					<h3 class="control-sidebar-heading">General Settings</h3>
					<div class="form-group">
						<label class="control-sidebar-subheading">
							Report panel usage <input type="checkbox" class="pull-right" checked>
						</label>
						<p>
							Some information about this general settings option
						</p>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label class="control-sidebar-subheading">
							Allow mail redirect <input type="checkbox" class="pull-right" checked>
						</label>
						<p>
							Other sets of options are available
						</p>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label class="control-sidebar-subheading">
							Expose author name in posts <input type="checkbox" class="pull-right" checked>
						</label>
						<p>
							Allow the user to show his name in blog posts
						</p>
					</div>
					<!-- /.form-group -->
					<h3 class="control-sidebar-heading">Chat Settings</h3>
					<div class="form-group">
						<label class="control-sidebar-subheading">
							Show me as online <input type="checkbox" class="pull-right" checked>
						</label>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label class="control-sidebar-subheading">
							Turn off notifications <input type="checkbox" class="pull-right">
						</label>
					</div>
					<!-- /.form-group -->
					<div class="form-group">
						<label class="control-sidebar-subheading">
							Delete chat history
							<a href="javascript:void(0)" class="text-red pull-right">
								<i class="fa fa-trash-o"></i>
							</a>
						</label>
					</div>
					<!-- /.form-group -->
				</form>
			</div>
			<!-- /.tab-pane -->
		</div>
	</aside>
	<!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
		 immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{url("public/vendor/adminlte")}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url("public/vendor/adminlte")}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{url("public/vendor/adminlte")}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url("public/vendor/adminlte")}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url("public/vendor/adminlte")}}/dist/js/demo.js"></script>
<script src="{{url("public/vendor/adminlte")}}/bower_components/toastr/toastr.min.js"></script>
<script src="{{url("public/vendor/adminlte")}}/bower_components/moment/min/moment.min.js"></script>
<script src="{{url("public/vendor/adminlte")}}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="{{url("public/vendor/adminlte")}}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="{{url("public/vendor/adminlte")}}/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script src="{{url("public/vendor/adminlte")}}/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script>
    toastr.options = {
        "closeButton"      :false,
        "debug"            :false,
        "newestOnTop"      :false,
        "progressBar"      :false,
        "positionClass"    :"toast-top-right",
        "preventDuplicates":false,
        "onclick"          :null,
        "showDuration"     :"300",
        "hideDuration"     :"1000",
        "timeOut"          :"5000",
        "extendedTimeOut"  :"1000",
        "showEasing"       :"swing",
        "hideEasing"       :"linear",
        "showMethod"       :"fadeIn",
        "hideMethod"       :""
    }
	@if ($errors->any())
			@foreach ($errors->all() as $error)
        toastr["error"]("{{$error}}")
	@endforeach
			@endif
			@if (!empty(session('error')) )
        toastr["error"]("{{session('error')}}")
	@endif

			@if (!empty(session('success')) )
        toastr["success"]("{{session('success')}}")

	@endif

    /**
     * fill data to name
     * @param data
     */
    function setData(data, elementParent, prefix){
        elementParent = elementParent || '';
        prefix = prefix || '';
        $.each(data, function(key, value){
            var _this = $(elementParent + ' input[name = ' + prefix + key + ']');
            if(! _this.length){
                _this = $(elementParent + ' select[name = ' + prefix + key + ']');
            }
            _this.val(value);
        });
    }

    function getDepartments(handleData){
        $.ajax({
            url       :"{{url('api/department')}}",
            type      :'get',
            beforeSend:function(xhr){
                xhr.setRequestHeader("Authorization", 'Bearer ' + getJwtToken());
            }
        }).done(function(response){
            handleData(response);
        }).fail(function(err){
            checkLogin(err);
            processErrors(err);
        });
    }

    function getGender(handleData){
        $.ajax({
            url       :"{{url('api/employment/gender')}}",
            type      :'get',
            beforeSend:function(xhr){
                xhr.setRequestHeader("Authorization", 'Bearer ' + getJwtToken());
            }
        }).done(function(response){
            handleData(response);
        }).fail(function(err){
            checkLogin(err);
            processErrors(err);
        });
    }

    function getType(handleData){
        $.ajax({
            url       :"{{url('api/employment/type')}}",
            type      :'get',
            beforeSend:function(xhr){
                xhr.setRequestHeader("Authorization", 'Bearer ' + getJwtToken());
            }
        }).done(function(response){
            handleData(response);
        }).fail(function(err){
            checkLogin(err);
            processErrors(err);
        });
    }

    function getPosition(handleData){
        $.ajax({
            url       :"{{url('api/employment_position')}}",
            type      :'get',
            beforeSend:function(xhr){
                xhr.setRequestHeader("Authorization", 'Bearer ' + getJwtToken());
            }
        }).done(function(response){
            handleData(response);
        }).fail(function(err){
            checkLogin(err);
            processErrors(err);
        });
    }

    /**
     * Reset form from button
     * @param _this
     */
    function formReset(_this, flag){
        flag = flag || false;
        var _form = $(_this).parent().closest('form');
        if(flag){
            _form = $(_this);
        }
        _form[0].reset();
        _form.on('reset', function(){
            $("input[type='hidden']", $(this)).each(function(){
                $(this).val('');
            });
        });
    }

    //For Token ====================================
    /**
     * Get token current
     * @returns {any}
     */
    function getJwtToken(){
        return window.sessionStorage.token;
    }

    /**
     * Check login
     */
    function checkLogin(data){
        if(data.status == 401){
            window.location.href = "{{url('login')}}";
        }
    }

    /**
     * Check token
     */
    function checkToken(token){
        $.ajax({
            url :"{{url('api/auth/me')}}",
            type:'get'
        }).done(function(response){
            handleData(response);
        }).fail(function(err){
            checkLogin(err);
            processErrors(err);
        });
    }

    /**
     * Process Error
     */
    function processErrors(data){
        if(data.status == 422){
            $.each(data.responseJSON.error.errors, function(key, value){
                toastr["error"](value);
            });
        }
        if(data.status == 403){
            toastr["error"](data.responseJSON.error.message);
        }
    }

    function alertDelete(){
    }
</script>
@stack('scripts')
<script>
    $(function(){
        //Date range picker
        $('#reservation').daterangepicker()
    });
</script>
</body>
</html>
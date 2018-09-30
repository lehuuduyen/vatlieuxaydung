<!-- Logo -->
<a href="{{url("public/vendor/adminlte")}}/index2.html" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	{{--{!! \Setting::get('logoMini') !!}--}}
	{{--<!-- logo for regular state and mobile devices -->--}}
	{{--{!! \Setting::get('logoLg') !!}--}}
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<a href="../../index2.html" class="navbar-brand"><b>Vật liệu </b>Xây Dựng</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="{{url("congtrinh")}}">
						<i class="fa fa-tasks"></i>
						<span>Công Trình</span>
					</a>
				</li>
				<li class="">
					<a href="{{url("qlkho")}}">
						<i class="fa fa-archive"></i>
						<span>Kho</span>
					</a>
				</li>
				<li class="">
					<a href="{{url("thuchi")}}">
						<i class="fa fa-usd"></i>
						<span>Thu Chi</span>
					</a>
				</li>
				<li class="">
					<a href="{{url("nhanvien")}}">
						<i class="fa fa-user"></i>
						<span>Nhân Viên</span>
					</a>
				</li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
				</div>
			</form>
		</div>
		<!-- /.navbar-collapse -->
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
					<!-- Menu Toggle Button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="hidden-xs">Admin</span>
					</a>
					<ul class="dropdown-menu">
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-right">
								<a href="#" class="btn btn-default btn-flat">Đăng xuất</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-custom-menu -->
	</div>
	<!-- /.container-fluid -->
</nav>
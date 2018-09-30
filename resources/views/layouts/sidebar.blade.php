<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{url("public/vendor/adminlte")}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				{{--<p>{{Auth::user()->name}}</p>--}}
				{{--<a href="#">--}}
				{{--<i class="fa fa-circle text-success"></i>--}}
				{{--Online--}}
				{{--</a>--}}
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">CHỨC NĂNG</li>
			<li>
				<a href="{{url("congtrinh")}}">
					<i class="fa fa-tasks"></i>
					<span>Công Trình</span>
				</a>
			</li>
			<li>
				<a href="{{url("qlkho")}}">
					<i class="fa fa-archive"></i>
					<span>Kho</span>
				</a>
			</li>
			<li>
				<a href="{{url("thuchi")}}">
					<i class="fa fa-usd"></i>
					<span>Thu Chi</span>
				</a>
			</li>
			<li>
				<a href="{{url("nhanvien")}}">
					<i class="fa fa-user"></i>
					<span>Nhân Viên</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
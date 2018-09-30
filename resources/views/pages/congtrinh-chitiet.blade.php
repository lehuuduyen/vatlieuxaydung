@extends('layouts.app')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			CÔNG TRÌNH
			<small>chi tiết công trình</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i>
					Home
				</a>
			</li>
			<li>
				<a href="#">công trình</a>
			</li>
			<li class="active">chi tiết công trình</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<h3 class="profile-username text-center">172/102 Nguyễn Trãi</h3>
						<p class="text-muted text-center">Dự Án</p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>Tiến độ</b>
								<a class="pull-right">{{rand(0,99)}}%</a>
							</li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				<!-- About Me Box -->
				<!-- /.box -->
			</div>
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Thông tin dự án</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<strong>
							<i class="fa fa-book margin-r-5"></i>
							Mô tả</strong>
						<p class="text-muted">
							Dự án xấy dự án xây dựng nhà ở số 172/102 Nguyễn Trãi, ngôi nhà tương đối lớn với nhiều kết
							cấu phức tạp
						</p>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#dutoan1" data-toggle="tab">Dự Toán</a>
						</li>
						<li>
							<a href="#thatdung" data-toggle="tab">Thật dùng</a>
						</li>
						<li>
							<a href="#thongke" data-toggle="tab">Thống kê</a>
						</li>
						<li>
							<a href="#traodoi" data-toggle="tab">Trao đổi</a>
						</li>
						<li>
							<a href="#chamcong" data-toggle="tab">Chấm công</a>
						</li>
						<li>
							<a href="#nhansu" data-toggle="tab">Nhân sự</a>
						</li>
					</ul>
					<div class="tab-content">
						<!--tab du toan -->
						@include('pages.congtrinh_tabDetail.dutoan')
						<!--tab phieu xuat -->
						@include('pages.congtrinh_tabDetail.phieuxuat')
						<!--tab thong ke -->
						@include('pages.congtrinh_tabDetail.thongke')
						<!--tab trao doi -->
						@include('pages.congtrinh_tabDetail.traodoi')
						<!--tab cham cong -->
						@include('pages.congtrinh_tabDetail.chamcong')
						<!--tab nhan su -->
						@include('pages.congtrinh_tabDetail.nhansu')
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
	</section>
	<!-- /.content -->

@endsection

@push('scripts')
	<script src="https://code.highcharts.com/highcharts.js"></script>
@endpush

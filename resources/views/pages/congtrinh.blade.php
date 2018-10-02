@extends('layouts.app')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			CÔNG TRÌNH 
			<small>Quản lý danh sách công trình</small>
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
			<li class="active">Data tables</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-md-6">
					<a data-toggle="modal" data-target="#modal-AddJob" class="btn btn-app js-open-modal-user">
						<i class="fa fa-edit"></i>
						THÊM CÔNG TRÌNH
					</a>
				</div>
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Bộ lọc</h3>
						</div>
						<div class="box-body">
							<!-- Date -->
							<div class="form-group">
								<label>Nội dung cần tìm</label>
								<input type="text" class="form-control" placeholder="Enter ...">
							</div>
							<!-- Date range -->
							<div class="form-group">
								<label>Thời gian:</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="reservation">
								</div>
								<!-- /.input group -->
							</div>
							<!-- /.form group -->
							<!-- Date and time range -->
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Lọc</button>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Danh Sach Công Trình</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Mã</th>
								<th>Tên</th>
								<th>Tiên độ theo ngày / Tiến độ</th><!-- -->
								<th>Tổng chi phí</th>
								<th>Giá trị hợp đồng</th>
								<th>Chi phí phát sinh</th>
								<th>Giá trị tổng</th>
								<th>Đội Trưởng</th>
								<th>Tình trạng</th>
								<th>Hành động</th>
							</tr>
							</thead>
							<tbody>
							@for($i = 1; $i < 40; $i++)
								<tr>
									<td>CT{{$i}}</td>
									<td>Xây nhà số {{rand(111,999)}}/{{rand(1111,9999)}} Nguyễn Trãi</td>
									<td>
										<div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 90%">
											</div>
										</div>
										<span class="badge bg-green">30%</span>
										Ngày thứ 30 trong 100 ngày <br> Tiên độ cập nhật:
										<span class="badge bg-light-blue">{{rand(0,99)}}%</span>
									</td>
									<td>
										1.000.000.000
									</td>
									<td>
										1.000.000.000
									</td>
									<td>
										10.000.000
									</td>
									<td>
										1.100.000.000
									</td>
									<td>
										Nguyễn Văn A
									</td>
									<td>
										<span class="label label-warning">Đang thi công</span>
									</td>
									<td>
										<a class="btn btn-xs btn-success" href="{{url("congtrinh_chitiet")}}">
											<i class="fa fa-eye"></i>&nbsp;&nbsp;Chi tiết
										</a>
										<a class="btn btn-xs btn-danger btn-Delete">
											<i class="fa fa-times"></i>&nbsp;&nbsp;Xóa
										</a>
									</td>
								</tr>
							@endfor
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<div class="col-xs-12 invoice">
				<div class="col-xs-6 col-xs-offset-6">
					<p class="lead">Thông tin dữ liệu hiện có</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
							<tr>
								<th>Tổng dự án</th>
								<td>17</td>
							</tr>
							<tr>
								<th>Tổng tiền:</th>
								<td>14.000.000.000 vnd</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
@endsection

<?php
	
	namespace App\Http\Controllers;
	use Illuminate\Routing\Controller as BaseController;
	class DashboardController extends BaseController{
		public function index(){
			return view( 'pages.dashboard' );
		}
		// CONG TRINH
		public function congtrinh(){
			return view( 'pages.congtrinh' );
		}
		public function congtrinh_chitiet(){
			return view( 'pages.congtrinh-chitiet' );
		}
	}

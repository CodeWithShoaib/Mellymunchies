@extends('theme.MellyMunchies.website')
<style>

/*======================================
   Login & Register & My Account CSS
========================================*/
.alert-success {
    color: #ffffff;
    background-color: #00b894;
    border-color: #00b894;
}

.alert-danger {
    color: #FFF;
    background-color: #ff4949;
    border-color: #ff4949;
}

.section{
	padding-top: 80px;
	padding-bottom: 50px;
}

.section-heading{
	text-align: center;
	font-weight: 600;
	margin-bottom: 60px;
	color: var(--primary-color);
	position: relative;
	line-height: 24px;
}

.section-heading::after{
	content: '';
    width: 60px;
    height: 6px;
    background: var(--primary-color);
    border-radius: 10px;
    position: absolute;
    display: block;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    margin-top: 15px;
}

#auth{
	padding: 60px 0px;
}

.login_register{
	background: #ffffff;
    padding: 50px;
    box-shadow: 1px 3px 10px #d8d8d8;
}

.login_register .form-control {
	height: auto;
    display: block;
    width: 100%;
   	padding: 15px;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #CCC;
    border-radius: .25rem;
    margin-top: 15px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.login_register .form-control:focus{
	outline: none;
	-webkit-box-shadow: none;
    box-shadow: none;
	border: 1px solid #000;
}

.login_register .btn-login{
	display: block;
    background: #FFF;
    padding: 18px 50px;
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
	transition: all 0.3s;
	width: 100%;
	margin-top: 30px;
}
.login_register .btn-login:hover{
    background: var(--primary-color);
    color: #FFF;
}

.login_register .right_link{
	color: var(--primary-color);
	margin-top: 15px;
	transition: all 0.3s;
	display: inline-block;
}

.login_register .right_link:hover{
	text-decoration: underline;
}

.create-account-link{
	color: var(--primary-color);
	display: inline-block;
	margin-top: 15px;
	transition: all 0.3s;
}

.create-account-link:hover{
	color: var(--primary-color);
	text-decoration: underline;
}

.customer_dashboard{
	box-shadow: 0 0 4px 0 #e9e9e9;
}

.customer_dashboard{
	box-shadow: 0 0 4px 0 #d0cfcf;
}

.customer_dashboard .nav-tabs li.nav-item a {
    text-align: left;
    padding: 12px 20px;
    border-radius: 0;
    border-bottom: 1px solid #efefef;
    color: #2b2f4c;
}
.customer_dashboard .nav-tabs li.nav-item a.active{
	background: #1d2224;
	color: #FFF;
}
.customer_dashboard .nav-tabs li.nav-item a i {
    margin-right: 8px;
    vertical-align: middle;
}

.dashboard_content .card-header {
    background-color: #1d2224;
    border-color: #1d2224;
    padding: 14px 20px;
}

.dashboard_content .card-header > h4 {
	font-size: 16px;
	color: #FFF;
	font-weight: 400;
	margin: 0;
}

.account_details .form-control {
	height: auto;
    display: block;
    width: 100%;
   	padding: 15px;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #CCC;
    border-radius: .25rem;
    margin-top: 15px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.account_details .form-control:focus{
	outline: none;
	-webkit-box-shadow: none;
    box-shadow: none;
	border: 1px solid #000;
}

.account_details .btn-login{
    background: #FFF;
    padding: 18px 50px;
    border: 1px solid #303952;
    color: #303952;
	transition: all 0.3s;
	margin-top: 30px;
}
.account_details .btn-login:hover{
    background: #303952;
    color: #FFF;
}
.btn-add-address{
	color: #FFF !important;
	padding: 6px 16px;
	display: inline-block;
	font-size: 14px;
	border: 1px solid #FFF;
	border-radius: 50px;
}

/*======================================
	End Login CSS
========================================*/

/*======================================
   Start Shop List CSS
========================================*/
.shop-list .list-content{
	margin-top:50px;
}
.shop-list .list-content .product-price{}
.shop-list .list-content .product-price span {
	font-size: 14px;
	font-weight: 600;
	margin-bottom: 3px;
	display: block;
}
.shop-list .list-content .title {
	line-height: 20px;
}
.shop-list .list-content .title a:hover{
	color:var(--primary-color);
}
.shop-list .list-content .title a {
	font-size: 18px;
	font-weight: 600;
}
.shop-list .list-content .rating {
	margin: 5px 0 8px 0;
}
.shop-list .list-content .rating li{
	display:inline-block;
}
.shop-list .list-content .rating li i{
	color: var(--primary-color);
}
.shop-list .list-content .rating li.total {
	color: #333;
	font-size: 12px;
	margin-left: 3px;
}
.shop-list .list-content .des{}
.shop-list .list-content .btn {
	margin-top: 22px;
	height: 42px;
	line-height: 15px;
	color: #333;
	background: transparent;
	border: 1px solid #cecece;
	font-size: 13px;
	border-radius: 30px;
	height: auto;
	line-height: a;
	padding: 13px 32px;
}
.shop-list .list-content .btn:hover{
	background:var(--primary-color);
	color:#fff;
	border-color:transparent;
}
/* Pagination CSS */
.pagination {
	text-align: left;
	margin: 50px 0 0 0;
	/*display:block;*/
}
.pagination.center {
	text-align: center;
}
.pagination .pagination-list li {
	margin-right: 5px;
	display: inline-block;
}
.pagination .pagination-list li:last-child{
	margin-right:0px;
}
.pagination .pagination-list li a {
	background: #F6F7FB;
	color: #666;
	padding: 6px 18px;
	font-weight: 400;
	border: 1px solid #e1e1e1;
	font-size: 16px;
	border-radius: 0px;
}
.pagination .pagination-list li.active a,
.pagination .pagination-list li:hover a{
	background: var(--primary-color);
	color: #fff;
	border-color: transparent;
}
.pagination .pagination-list li a i{
	font-size:13px;
}
.blog-grids.pagination{
	margin-top:50px;
	text-align:center;
}

.pagination .page-item.active a,
.pagination .page-item:hover a{
	background: var(--primary-color);
	color: #fff;
	border-color: transparent;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}
ul.bread-list {
    display: flex;
    display: flex;
    align-items: center;
    padding-top: 4rem;
    gap:1rem;
}
#auth {
    padding: 0px 0px;
}
ul.bread-list li a {
    color: #000;
}
</style>

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="{{ url('') }}">{{ _lang('Home') }}<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="">{{ _lang('My Orders') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
	
<!-- Login Screen -->
<section id="auth"> 
	<div class="container">
		<div class="row">
		   <div class="col-lg-3 col-md-4">
			  <div class="customer_dashboard">
				 @include('theme.default.customer.my_account.menu')
			  </div>
		   </div>
		   <div class="col-lg-9 col-md-8">
		   		@if(\Session::has('success'))
					<div class="alert alert-success mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('success')) !!}</span>
					</div>
				@endif

				@if(\Session::has('error'))
					<div class="alert alert-danger mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('error')) !!}</span>
					</div>
				@endif
							
				<div class="dashboard_content">
					<div class="card">
						<div class="card-header">
						   <h4>{{ _lang('My Orders') }}</h4>
						</div>
						<div class="card-body">
						   <div class="table-responsive">
						   		<table class="table table-bordered">
						   			<thead>
						   				<th>{{ _lang('Order ID') }}</th>
						   				<th>{{ _lang('Date') }}</th>
						   				<th>{{ _lang('Total') }}</th>
						   				<th>{{ _lang('Order Status') }}</th>
						   				<th>{{ _lang('Payment Status') }}</th>
						   				<th class="text-center">{{ _lang('Action') }}</th>
						   			</thead>
						   			<tbody>
						   				@if($orders->count() == 0)
											<tr>
							   					<td colspan="6" class="text-center">{{ _lang('No Order found !') }}</td>
							   				</tr>
						   				@endif
						   				
							   			@foreach($orders as $order)
							   				<tr>
							   					<td>{{ $order->id }}</td>
							   					<td>{{ $order->created_at }}</td>
							   					<td>{!! xss_clean(decimalPlace($order->total,$order->currency)) !!}</td>
							   					<td>{!! xss_clean($order->getStatus()) !!}</td>
							   					<td>{!! xss_clean($order->getPaymentStatus()) !!}</td>
							   					<td class="text-center">
							   						<a href="{{ url('/order_details/'.encrypt($order->id)) }}" class="btn-link">{{ _lang('View Details') }}</a>
							   						@if($order->status == $order::PENDING_PAYMENT)
							   							| <a href="{{ url('/payment/'.encrypt($order->id)) }}" class="btn-link">{{ _lang('Pay Now') }}</a>
							   						@endif
							   					</td>
							   				</tr>
							   			@endforeach
						   			</tbody>
						   		</table>
								{{ $orders->links() }}
						   </div>
						</div>
					</div>
				</div>
		   </div>
		</div>
	</div>
</section>
<!--/ End Login Screen -->
		

@endsection

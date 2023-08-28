@extends('theme.MellyMunchies.website')
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




	.col-lg-5 {
	    -ms-flex: 0 0 41.666667%;
	    flex: 0 0 41.666667%;
	    max-width: 41.666667%;
	}
	.col-lg-6 {
	    -ms-flex: 0 0 50%;
	    flex: 0 0 50%;
	    max-width: 50%;
	}
	.col-lg-7 {
	    -ms-flex: 0 0 58.333333%;
	    flex: 0 0 58.333333%;
	    max-width: 58.333333%;
	}
	.col-lg-8 {
	    -ms-flex: 0 0 66.666667%;
	    flex: 0 0 66.666667%;
	    max-width: 66.666667%;
	}
	.col-lg-9 {
	    -ms-flex: 0 0 75%;
	    flex: 0 0 75%;
	    max-width: 75%;
	}
	.col-lg-10 {
	    -ms-flex: 0 0 83.333333%;
	    flex: 0 0 83.333333%;
	    max-width: 83.333333%;
	}
	.col-lg-11 {
	    -ms-flex: 0 0 91.666667%;
	    flex: 0 0 91.666667%;
	    max-width: 91.666667%;
	}
	.col-lg-12 {
	    -ms-flex: 0 0 100%;
	    flex: 0 0 100%;
	    max-width: 100%;
	}
	.receipt-content .invoice-wrapper .line-items .items .item .unit_price,.receipt-content .invoice-wrapper .line-items .items .item .amount {
	    text-align: right;
	}

	.receipt-content{background: transparent;}
	.receipt-content .invoice-wrapper{
		border: none;
		padding: 0px;
	}

} 
ul.bread-list {
    display: flex;
}

ul.bread-list {
    padding-top: 4rem;
    display: flex;
    gap: 0.4rem;
}
div#cod-container {
    display: flex;
    justify-content: center;
    background: black;
    color: #fff;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    color: #fff;
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
						<li><a href="{{ url('/') }}">{{ _lang('Home') }}<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="">{{ _lang('Make Payment') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 
			<div class="col-12">
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
			</div>

			<div class="col-lg-6 col-12">
				<div class="order-details">
					<div class="single-widget">
						<h2>{{ _lang('Payment Methods') }}</h2>
						<div class="content">
							<div class="payment-methods">
								<ul>
									@if(get_option('paypal_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="paypal-method" value="paypal" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('paypal_description') }}">
												<label class="custom-control-label" for="paypal-method">{{ get_option('paypal_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('stripe_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="stripe-box" value="stripe" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('stripe_description') }}">
												<label class="custom-control-label" for="stripe-box">{{ get_option('stripe_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('razorpay_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="razorpay-box" value="razorpay" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('razorpay_description') }}">
												<label class="custom-control-label" for="razorpay-box">{{ get_option('razorpay_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('paystack_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="paystack-box" value="paystack" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('paystack_description') }}">
												<label class="custom-control-label" for="paystack-box">{{ get_option('paystack_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('cod_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="cod" value="cod" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('cod_description') }}">
												<label class="custom-control-label" for="cod">{{ get_option('cod_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('bank_transfer_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="bank_transfer" value="bank_transfer" name="payment_method" class="custom-control-input select-payment-method" data-description="{{ get_option('bank_transfer_description') }}">
												<label class="custom-control-label" for="bank_transfer">{{ get_option('bank_transfer_label') }}</label>
											</div>
										</li>
									@endif
								</ul>
							</div>

						</div>
					</div>

					
					<!--Payment Descriptions-->
					<div class="col-md-12">
						<span id="payment-descriptions">{{ _lang('Select Payment Method') }}</span>
					</div>
					<!--End Payment Descriptions-->
				</div>
			</div>

			<div class="col-lg-6 col-12">
				<div class="order-details">
					<div class="single-widget">
						<h2>{{ _lang('CART  TOTALS') }}</h2>
						<div class="content" id="cart-contents">
							<ul>
								<li>{{ _lang('Sub Total') }}<span>{!!  $order->sub_total !!}</span></li>
								<li>{{ _lang('Shipping Cost') }}<span>+ {!! $order->shipping_cost !!}</span></li>
								@if($order->coupon_id != null)
									<li>{{ _lang('Discount') }}<span>- {!! $order->discount !!}</span></li>
								@endif
								@foreach($order->taxes as $tax)
									<li>{{ $tax->translation->name }}<span>+ {!! $tax->order_tax->amount !!}</span></li>
								@endforeach
								<li class="last">{{ _lang('Total') }}<span><b>{!! $order->total !!}</b></span></li>
							</ul>
						</div>
					</div>	

					
					<div class="single-widget get-button">
						<div class="content">
							<div class="button" id="payment-button">
								<div id="paypal-container" class="d-none">
									@include('theme.default.gateways.paypal')
								</div>

								<div id="stripe-container" class="d-none">
									@include('theme.default.gateways.stripe')
								</div>

								<div id="razorpay-container" class="d-none">
									@include('theme.default.gateways.razorpay')
								</div>

								<div id="paystack-container" class="d-none">
									@include('theme.default.gateways.paystack')
								</div>

								<div id="cod-container" class="d-none">
									<a href="{{ url('gateway/confirm_order/cod/'.encrypt($order->id)) }}" id="confirm_order" class="btn">{{ _lang('Confirm Order') }}</a>
								</div>

								<div id="bank_transfer-container" class="d-none">
									<a href="{{ url('gateway/confirm_order/bank_transfer/'.encrypt($order->id)) }}" id="confirm_order" class="btn">{{ _lang('Confirm Order') }}</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->
@endsection
@section('js-script')
<script src="{{ asset('public/theme/default/js/checkout.js') }}"></script>
@endsection
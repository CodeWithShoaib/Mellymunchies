@extends('theme.MellyMunchies.website')
<style>

/*=============================
	22. Start Payment gateway CSS
===============================*/

.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
  width: 100%;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
 
 .pay-now-btn{
 	width: 100%;
    display: block;
    padding: 14px 15px;
    margin-top: 10px;
    background: #e91e63;
    color: #FFF;
 }

 .shop.checkout .single-widget .content form input.razorpay-payment-button {
    width: 100%;
    display: block;
    padding: 14px 15px;
    margin-top: 10px;
    background: #e91e63;
    color: #FFF;
    border: none;
}

 .order-success{
 	text-align: center;
 	padding: 80px 20px;
 }

 .order-success > i{
 	font-size: 60px;
 	color: #1dd1a1;
 }

  .order-success > h2{
 	padding: 15px 0px;
 }

 .order-success > p{
 	color: #000;
    font-size: 16px;
 }

 .order-success > .btn-back-to-store{
 	background: var(--primary-color);
    color: #FFF;
    padding: 12px 30px;
    display: inline-block;
    margin-top: 20px;
    border-radius: 2px;
 }
  /*=============================
	End Stripe CSS
===============================*/

/*=============================
	Start Receipt CSS
===============================*/
.receipt-content .logo a:hover {
  text-decoration: none;
  color: #7793C4; 
}

.receipt-content .invoice-wrapper {
  background: #FFF;
  border: 1px solid #CDD3E2;
  box-shadow: 0px 0px 1px #CCC;
  padding: 40px 40px 60px;
  margin-top: 40px;
  margin-bottom: 40px;
  border-radius: 4px; 
}

.receipt-content .invoice-wrapper .payment-details span {
  color: #A9B0BB;
  display: block; 
  overflow: hidden;
  width: 100%;
}
.receipt-content .invoice-wrapper .payment-details a {
  display: inline-block;
  margin-top: 5px; 
}

.receipt-content .invoice-wrapper .line-items .print a {
  display: inline-block;
  border: 1px solid #9CB5D6;
  padding: 13px 13px;
  border-radius: 5px;
  color: #708DC0;
  font-size: 13px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .line-items .print a:hover {
  text-decoration: none;
  border-color: #333;
  color: #333; 
}

.receipt-content {
  background: #ECEEF4; 
}
@media (min-width: 1200px) {
  .receipt-content .container {width: 900px; } 
}

.receipt-content .logo {
  text-align: center;
  margin-top: 50px; 
}

.receipt-content .logo a {
  font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
  font-size: 36px;
  letter-spacing: .1px;
  color: #555;
  font-weight: 300;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .intro {
  line-height: 25px;
  color: #444; 
}

.receipt-content .invoice-wrapper .payment-info {
  margin-top: 25px;
  padding-top: 15px; 
}

.receipt-content .invoice-wrapper .payment-info strong {
  display: block;
  color: #444;
  margin-top: 3px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-info .text-right {
  text-align: left !important;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .payment-details {
  border-top: 2px solid #EBECEE;
  margin-top: 30px;
  padding-top: 20px;
  line-height: 22px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-details .text-right {
  text-align: left !important;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .line-items {
  margin-top: 40px; 
}
.receipt-content .invoice-wrapper .line-items .headers {
  color: #A9B0BB;
  font-size: 13px;
  letter-spacing: .3px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 4px; 
}
.receipt-content .invoice-wrapper .line-items .items {
  margin-top: 8px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 8px; 
}
.receipt-content .invoice-wrapper .line-items .items .item {
  padding: 10px 0;
  color: #696969;
  font-size: 15px; 
}
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item {
  font-size: 13px; } 
}

.receipt-content .invoice-wrapper .line-items .items .item .unit_price {
  letter-spacing: 0.1px;
  color: #84868A;
  font-size: 16px;
  text-align: right;
 }
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item .unit_price {
  font-size: 13px;
  text-align: left; } 
}

.receipt-content .invoice-wrapper .line-items .items .item .amount {
  letter-spacing: 0.1px;
  color: #84868A;
  font-size: 16px;
  text-align: right;
 }
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item .amount {
  font-size: 13px;
  text-align: left; } 
}

.receipt-content .invoice-wrapper .line-items .total {
  margin-top: 30px; 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes {
  float: left;
  width: 40%;
  text-align: left;
  font-size: 13px;
  color: #7A7A7A;
  line-height: 20px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .total .extra-notes {
  width: 100%;
  margin-bottom: 30px;
  float: none; } 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
  display: block;
  margin-bottom: 5px;
  color: #454545; 
}

.receipt-content .invoice-wrapper .line-items .total .field {
  margin-bottom: 7px;
  font-size: 14px;
  color: #555; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
  margin-top: 10px;
  font-size: 16px;
  font-weight: 500; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
  color: #20A720;
  font-size: 16px; 
}

.receipt-content .invoice-wrapper .line-items .total .field span {
  display: inline-block;
  margin-left: 20px;
  min-width: 85px;
  color: #84868A;
  font-size: 15px; 
}

.receipt-content .invoice-wrapper .line-items .print {
  margin-top: 50px;
  text-align: center; 
}

.receipt-content .invoice-wrapper .line-items .print a i {
  margin-right: 3px;
  font-size: 14px; 
}

.receipt-content .footer {
  margin-top: 40px;
  margin-bottom: 110px;
  text-align: center;
  font-size: 12px;
  color: #969CAD; 
}  

.text-right-print{
	text-align: right !important;
}                  

/*=============================
	END Receipt CSS
===============================*/

/*======================================
   Start Wish List CSS
========================================*/
.table.wish-list-summery {
	background: #fff;
}
.wish-list {
	background: #f6f6f6;
	padding: 50px 0;
}
.wish-list-summery thead .main-hading{
	padding:0px 50px;
}
.wish-list-summery thead {
	background: var(--primary-color);
	color: #fff;
}
.wish-list-summery thead tr th {
	border: none;
	font-weight: 600;
	color: #fff;
	padding: 15px 30px;
}
.wish-list-summery tbody tr {
	border-bottom: 1px solid var(--primary-color);
	margin-top: 20px;
}
.wish-list-summery tbody tr img {
	border-radius: 0;
	width: 80px;
	height: 80px;
}

.wish-list-summery tbody .product-name a {
	font-weight: 600;
	color: #282828;
	font-weight: 600;
	font-size: 17px;
}
.wish-list-cart .table p {
	font-size: 14px;
	color: #666;
}
.wish-list-summery tbody .product-name a:hover{
	color:var(--primary-color);
}
.wish-list-summery tbody .product img {
	max-width: 70px;
	border-radius: 100%;
	max-height: 65px;
	border: 1px solid #e6e6e6;
	padding: 4px;
}
.wish-list-summery tbody .product:hover img{
	border-color:var(--primary-color);
	-webkit-transform:rotate(360deg);
	-moz-transform:rotate(360deg);
	transform:rotate(360deg);
}

.wish-list .table .remove-icon{
	font-size:16px;
}
.wish-list .table td {
	vertical-align: middle;
	border-top: 1px solid #eee;
	padding: 15px 30px;
}

.wish-list .table .add_to_cart{
	color: #FFF;
    background: var(--primary-color);
}

.wish-list .table .add_to_cart:hover{
    background: var(--secondary-color);
}

.wish-list .table .remove_item{
	color: #FFF;
    background: #34495e;
}

.wish-list .table .remove_item:hover{
    background: #2c3e50;
}

#quickShop .product_options{
	float: left;
    margin-right: 15px;
}

#quickShop .product_options h6{
	display: block;
    font-size: 13px;
    font-weight: 500;
    margin-top: 0px;
    margin-bottom: 5px;
}

#quickShop .product_options select{
	width: 100%;
}

/*=============================
	END Wish List CSS
===============================*/

/*======================================
   Start Brand Page CSS
========================================*/
</style>
@section('content')
<!-- Breadcrumbs -->
<!--<div class="breadcrumbs">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-12">-->
<!--				<div class="bread-inner">-->
<!--					<ul class="bread-list">-->
<!--						<li><a href="{{ url('') }}">{{ _lang('Home') }}<i class="ti-arrow-right"></i></a></li>-->
<!--						<li class="active"><a href="">{{ _lang('Order Placed') }}</a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-12">	
				<div class="order-success">
					<i class="ti-check-box"></i>
					<h2>{{ _lang('Your Order has been Placed Sucessfully') }}</h2>
					<p>{{ _lang('Your Order ID') }}#: {{ $order->id }}</p>
					<a href="{{ url('/shop') }}" class="btn-back-to-store">{{ _lang('Back to Store') }}</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->

@endsection


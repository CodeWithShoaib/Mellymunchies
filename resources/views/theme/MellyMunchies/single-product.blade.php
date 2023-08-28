@extends('theme.MellyMunchies.website')
@section('content')
<style>

/*======================================
   Start Single Product CSS
========================================*/
.product-area .nav-tabs {
	text-align: center;
	display: inline-block;
	width: 100%;
	border:none;
}
.product-area .nav-tabs .nav-item {
	margin-bottom: -1px;
	display: inline-block;
}
.product-area .nav-tabs li a {
	color: #333;
	text-transform: uppercase;
	display: inline-block;
	position: relative;
	margin-right: 5px;
	font-weight: 500;
	background: #fff;
	color: #333;
	padding: 3px 14px;
	border-radius: 3px;
	font-size: 13px;
}
.product-area .nav-tabs li:last-child a{
	border-color:transparent;
} 
.product-area .nav-tabs li a i{
	margin-right:10px;
}
.product-area .nav-tabs li a.active,
.product-area .nav-tabs li:hover a{
	background:var(--primary-color);
	color:#fff;
	border-color:transparent;
}

/* Sinlge Product */
.single-product{
	margin-top:50px;
	border: 1px solid #ebebeb;
	padding: 15px;
	transition: all 0.5s;
}
.single-product .product-img {
  position: relative;
  overflow: hidden;
  cursor:pointer;
}
.single-product .product-img a {
    display: block;
    position: relative;
    height: 200px;
    text-align: center;
}
.single-product .product-img a img {
  	max-height: 100%;
    max-width: 100%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.single-product:hover {
	box-shadow: 1px 1px 10px #cccccc;
}
.single-product .product-img a img.hover-img {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.5s ease, transform 2s cubic-bezier(0, 0, 0.44, 1.18), -webkit-transform 2s cubic-bezier(0, 0, 0.44, 1.18);
}


.single-product .product-img a span.price-dec {
	background-color: #f6931d;
	display: inline-block;
	font-size: 11px;
	color: #fff;
	right: 0px;
	top: 0px;
	padding: 1px 16px;
	font-weight: 700;
	border-radius: 0;
	text-align: center;
	position: absolute;
	text-transform: uppercase;
	border-radius: 30px;
	height: 26px;
	line-height: 25px;
}
.single-product .product-img a span.new {
	background-color: #28a745;
	display: inline-block;
	font-size: 11px;
	color: #fff;
	right: 0px;
	top: 0px;
	padding: 1px 16px;
	font-weight: 700;
	border-radius: 0;
	text-align: center;
	position: absolute;
	text-transform: uppercase;
	border-radius: 30px;
	height: 26px;
	line-height: 24px;
}
.single-product .product-img a span.featured {
	background-color: #007bff;
	display: inline-block;
	font-size: 11px;
	color: #fff;
	right: 0px;
	top: 0px;
	padding: 1px 16px;
	font-weight: 700;
	border-radius: 0;
	text-align: center;
	position: absolute;
	text-transform: uppercase;
	border-radius: 30px;
	height: 26px;
	line-height: 24px;
}
.single-product .product-img a span.on_sale {
	background-color: #ffc107;
	display: inline-block;
	font-size: 11px;
	color: #fff;
	right: 0px;
	top: 0px;
	padding: 1px 16px;
	font-weight: 700;
	border-radius: 0;
	text-align: center;
	position: absolute;
	text-transform: uppercase;
	border-radius: 30px;
	height: 26px;
	line-height: 24px;
}
.single-product .product-img a span.exclusive {
	background-color: #dc3545;
	display: inline-block;
	font-size: 11px;
	color: #fff;
	right: 0px;
	top: 0px;
	padding: 1px 16px;
	font-weight: 700;
	border-radius: 0;
	text-align: center;
	position: absolute;
	text-transform: uppercase;
	border-radius: 30px;
	height: 26px;
	line-height: 24px;
}
.single-product .product-img a span.out-of-stock {
	background-color: #ed1b24;
	display: inline-block;
	font-size: 11px;
	color: #fff;
	right: 0px;
	top: 0px;
	padding: 1px 16px;
	font-weight: 700;
	border-radius: 0;
	text-align: center;
	position: absolute;
	text-transform: uppercase;
	border-radius: 30px;
	height: 26px;
	line-height: 24px;
}
.single-product .product-img .product-action {
	display: inline-block;
	position: absolute;
	right: 2px;
	bottom: 0;
	z-index: 99;
	border-radius: 3px;
}
.single-product .product-img .product-action a {
	background-color: transparent;
	color: #333;
	display: block;
	font-size: 16px;
	display: inline-block;
	margin-right: 15px;
	text-align: right;
	height: 52px;
	position: relative;
	top: 2px;
}
.single-product .product-img .product-action a:last-child{
	margin-right:0;
	border:none;
}
.single-product .product-img .product-action a i {
  line-height: 40px;
}
.single-product .product-img .product-action a span {
	visibility: hidden;
	position: absolute;
	background: var(--primary-color) !important;
	color: #fff !important;
	text-align: center;
	padding: 5px 12px;
	z-index: 3;
	opacity: 0;
	-webkit-transition: opacity .6s, margin .3s;
	-o-transition: opacity .6s, margin .3s;
	transition: opacity .6s, margin .3s;
	font-size: 11px;
	right: 0;
	line-height: 14px;
	top: -12px;
	margin-top: -5px;
	margin-right: 0;
	display: inline-block;
	width: 120px;
	border-radius:15px 0 0 15px;
}
.single-product .product-img .button-head .product-action a span::after {
	position: absolute;
	content: "";
	right: 0;
	bottom: -12px;
	border: 6px solid var(--primary-color);
	border-left:0px solid transparent;
	border-right:6px solid transparent;
	border-bottom:6px solid transparent;
}
.single-product .product-img .product-action a:hover {
	color:var(--primary-color);
}
.single-product .product-img .product-action a:hover span {
  visibility: visible;
  opacity: 1;
  color:#333;
  background:#fff;
  margin-top: -12px;
}

.single-product .product-img .product-action.pro-action-width-dec a {
  width: 30px;
  height: 30px;
  font-size: 14px;
}
.single-product .product-img .product-action.pro-action-width-dec a i {
  line-height: 30px;
}
.single-product .product-img .product-action.pro-action-width-dec-2 {
  bottom: 45px;
}
.single-product .product-img .product-action-2 {
	position: absolute;
	left: 0;
	bottom: 0;
	text-align: left;
	z-index: 99;
	-webkit-transition: all 250ms ease-out;
	-o-transition: all 250ms ease-out;
	transition: all 250ms ease-out;
}
.single-product .product-img .product-action-2 a {
	display: block;
	background-color: transparent;
	color: #333;
	text-align: left;
	font-size: 12px;
	font-weight: 600;
	text-transform: uppercase;
	line-height: 1;
	display: inline-block;
	height: auto;
}
.single-product .product-img .product-action-2 a:hover {
  color:var(--primary-color);
}
.single-product .button-head {
	background: #fff;
	display: inline-block;
	height: 40px;
	width: 100%;
	position: absolute;
	left: 0;
	bottom: -50px;
	z-index: 9;
	height: 50px;
	line-height: 50px;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}

.single-product:hover .button-head{
	bottom:0;
}
.single-product .product-img .shop-list-quickview {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  left: 0;
  right: 0;
  text-align: center;
  z-index: 99;
  margin-top: 20px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all .35s ease 0s;
  -o-transition: all .35s ease 0s;
  transition: all .35s ease 0s;
}
.single-product .product-img .shop-list-quickview a {
  color: #000;
  background-color: #fff;
  display: inline-block;
  width: 50px;
  height: 50px;
  border-radius: 100%;
  font-size: 18px;
}
.single-product .product-img .shop-list-quickview a:hover {
  background-color: #222;
  color: #fff;
}
.single-product .product-img .shop-list-quickview a i {
  line-height: 50px;
}
.single-product .product-content{
	margin-top: 20px;
    display: -webkit-box;
    display: flex;
    height: 90px;
    padding-bottom: 9px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-box-pack: end;
    justify-content: flex-end;
    z-index: 0;
}
.single-product .product-img:hover.default-overlay::before {
  background-color: rgba(38, 38, 38, 0.2);
  z-index: 9;
  -webkit-transition: all 250ms ease-out;
  -o-transition: all 250ms ease-out;
  transition: all 250ms ease-out;
  pointer-events: none;
  opacity: 1;
}
.single-product .product-img:hover.default-overlay.metro-overlay::before {
  background-color: rgba(38, 38, 38, 0.4);
  z-index: 9;
  -webkit-transition: all 250ms ease-out;
  -o-transition: all 250ms ease-out;
  transition: all 250ms ease-out;
  pointer-events: none;
  opacity: 1;
}
.single-product .product-img:hover img.hover-img {
  opacity: 1;
}
.single-product .product-content h3 {
   line-height: 22px;
   overflow: hidden;
   text-overflow: ellipsis;
   white-space: nowrap;
   margin: 0;
}
.single-product .product-content h3 a {
	font-size: 14px;
	font-weight: 500;
	margin: 0;
}
.single-product .product-content h3 a:hover{
	color:var(--primary-color);
}
.single-product .product-content .product-price {
  margin: 6px 0 0 0;
}
.single-product .product-content .product-price span {
	font-size: 15px;
	font-weight: 500;
}
.single-product .product-content .product-price span.old {
  text-decoration: line-through;
  opacity: .6;
  margin-right: 2px;
}

.single-product .product-content .product-rating .reviews li{
	float: left;
}

.single-product .product-content .product-rating .reviews li > i{
	color:var(--primary-color);
}

/*======================================
   End Single Product CSS
========================================*/

/*======================================
   Start Shop Sidebar CSS
========================================*/
.shop-sidebar .single-widget {
	margin-top: 30px;
	background: #F6F7FB;
	padding: 30px;
}
.shop-sidebar .single-widget:first-child {
	margin-top: 0;
}
.shop-sidebar .single-widget .title {
	position: relative;
	font-size: 18px;
	font-weight: 500;
	text-transform: capitalize;
	margin-bottom: 25px;
	display: block;
	border-bottom: 1px solid #ddd;
	padding-bottom: 15px;
}
/* Shop Price */
.shop .range .price-filter {
	display: block;
	margin-top: 20px;
}
.shop .range #slider-range {
	box-shadow: none;
	border: none;
	height: 4px;
	background: var(--primary-color);
	color: var(--primary-color);
	border-radius: 0px;
}
.shop .range #slider-range .ui-slider-range {
	box-shadow: none;
	background: #222;
	border-radius: 0px;
	border: none;
}
.shop .range .ui-slider-handle.ui-state-default.ui-corner-all {
	width: 14px;
	height: 14px;
	line-height: 10px;
	background: #222;
	border: none;
	border-radius: 100%;
	top: -5px;
}
.shop .range .label-input {
	margin-top: 15px;
}
.shop .range .label-input span{
	margin-right:5px;
	color:#282828;
}
.shop .range .ui-slider-handle.ui-state-default.ui-corner-all {
	background: var(--primary-color);
	color: var(--primary-color);
	cursor:pointer;
}
.shop .range .label-input input {
	border: none;
	margin: 0;
	font-weight: 600;
	font-size: 14px;
	color: #222;
	background: transparent;
}
.shop .range .check-box-list {
	margin-top: 15px;
}
.shop .range .check-box-list li {
	margin-bottom: 5px;
}
.shop .range .check-box-list li:last-child{
	margin:0;
}
.shop .range .check-box-list li label input {
	display: inline-block;
	margin-right: 6px;
	position: relative;
	top: 1px;
}
.shop .range .check-box-list li label {
	margin: 0;
	font-size: 14px;
	font-weight: 400;
	color:#333;
	cursor:pointer;
}
.shop .range .check-box-list .count{
	margin-left:5px;
	color:#666;
}
/* Category List */
.shop-sidebar .categor-list {
	margin-top: 10px;
}
.shop-sidebar .categor-list li{
	
}
.shop-sidebar .categor-list li {
	margin-bottom: 10px;
}
.shop-sidebar .categor-list li:last-child{
	margin-bottom:0px;
}
.shop-sidebar .categor-list li a {
	display: inline-block;
	color: #666;
	font-weight: 400;
	font-size: 14px;
	text-transform: capitalize;
}
.shop-sidebar .categor-list li a:hover{
	color:var(--primary-color);
}
.shop-sidebar .categor-list li a.active {
	color:var(--primary-color);
}
/* Recent Post */
.shop-sidebar .single-post {
	position: relative;
	margin-top: 30px;
    padding-bottom: 30px;
	border-bottom: 1px solid #ddd;
}
.shop-sidebar .single-post.first{
	padding-top:0px;
}
.shop-sidebar .single-post:last-child{
	padding-bottom:0px;
	border:none;
}
.shop-sidebar .single-post .image img{
	height: 80px;
	width: 80px;
	position:absolute;
	left:0;
	top:0;
	border-radius:100%;
}
.shop-sidebar .single-post .content{
	padding-left:100px;
}
.shop-sidebar .single-post .content h5 {
	line-height: 18px;
}
.shop-sidebar .single-post .content h5 a {
	color: #222;
	font-weight: 500;
	font-size: 14px;
	font-weight: 500;
	display: block;
}
.shop-sidebar .single-post .content h5 a:hover{
	color:var(--primary-color);
}
.shop-sidebar .single-post .content .price {
	display: block;
	color: #333;
	font-weight: 500;
	margin: 5px 0 0px 0;
	text-transform: uppercase;
	font-size: 14px;
}
.shop-sidebar .single-post .reviews li{
	display:inline-block;
}
.shop-sidebar .single-post .reviews li i{
	color:#999;
}
.shop-sidebar .single-post .reviews li.yellow i{
	color:var(--primary-color);
}
/* Shop Topbar */
.shop .shop-top {
	clear: both;
    background: #f6f7fb;
    padding: 18px 20px 18px 20px;
    overflow: hidden;
}
.shop .shop-shorter {
	float: left;
}
.shop .single-shorter {
	display: inline-block;
	margin-right: 10px;
}
.shop .single-shorter:last-child{
	margin:0;
}
.shop .single-shorter label {
	display: inline-block;
	float: left;
	margin: 4px 5px 0 0;
	font-weight:500;
}
.shop .single-shorter select{
    margin-top: 4px;
}
.shop .single-shorter option{}
.shop .nice-select {
	clear: initial;
	display: inline-block;
	margin: 0;
	border: 1px solid #e6e6e6;
	border-radius: 0px;
	height: auto;
	width: auto;
	border-radius: 0px;
}
.shop .nice-select::after{
	border-color:#888;
}
.shop .nice-select .list {
	border-radius:0px;
}
.shop .nice-select .option.selected {
	font-weight: 500;
}
.shop .nice-select .list li{
	color:#666;
	border-radius:0px;
}
.shop .nice-select .list li:hover{
	background:var(--primary-color);
	color:#fff;
}
.shop .view-mode {
	float: right;
}
.shop .view-mode li {
	display: inline-block;
	margin-right: 5px;
}
.shop .view-mode li:last-child{
	margin:0;
}
.shop .view-mode li a {
	width: 43px;
	height: 32px;
	background: transparent;
	border: 1px solid #77777775;
	text-align: center;
	display: block;
	line-height: 32px;
	color: #888;
	border-radius: 0px;
}
.shop .view-mode li.active a,
.shop .view-mode li:hover a {
	background: var(--primary-color);
	color:#fff;
	border-color:transparent;
}
/*======================================
   End Shop Sidebar CSS
========================================*/

/*======================================
   Start Shop Single CSS
========================================*/
.shop.single{
	padding:70px 0 100px;
}
.shop.single .product-gallery {
	margin-top: 30px;
}
.shop.single .flexslider-thumbnails {
	position: relative;
	border: 1px solid #ece9e9;
}
.shop.single .product-gallery .slides li{
	position:relative;
}
.shop.single .product-gallery .slides li img{
	width:100%;
}
.shop.single .flex-control-nav{
	margin-top:15px;
}
.shop.single .flex-control-thumbs li {
	width: 20%;
	position: relative;
	margin: 0 8px 10px -3px;
}
.shop.single .flex-control-thumbs li img {
	border: none;
	padding: 0;
	border:1px solid transparent;
}
.shop.single .flex-control-thumbs li img.flex-active{
	border-color:var(--primary-color);
}
.shop.single .flex-direction-nav{
	display:none;
}
.shop.single .product-des{
	margin-top:30px;
}
.shop.single .product-des .short h4 {
	font-size: 22px;
	font-weight: 600;
	margin-top: -5px;
	line-height: 28px;
}
.shop.single .product-des .short .description {
	font-size: 14px;
	color: #555555;
	margin-top: 20px;
	margin-bottom: 20px;
	padding-bottom: 20px;
	border-bottom: 1px solid #eee;
}
.shop.single .product-des {}
.shop.single .product-des .total-review{
	font-size:14px;
	font-weight:500;
	margin-left:10px;
	display:inline-block;
}
.shop.single .product-des .total-review:hover{
	color:var(--primary-color);
}
.shop.single .product-des  .rating{
	margin-top:20px;
	display:inline-block;
}
.shop.single .product-des .rating li{
	display:inline-block;
}
.shop.single .product-des .rating li i{
	color:var(--primary-color);
}
.shop.single .product-des .rating li.dark i{
	color:#555;
}
.shop.single .product-des .price {
	font-size: 20px;
	color: #333;
	font-weight: 600;
	margin-top: 15px;
}
.shop.single .product-des .price s{
	color:#333;
}
.shop.single .product-des .price span{
	display:inline-block;
	margin-right:15px;
	color:var(--primary-color);
}
.shop.single .product-des .product-buy {
	margin-top: 40px;
}
.shop.single .product-des .product-buy{}
.shop.single .product-des .color {
	display: inline-block;
	margin-right: 50px;
}
.shop.single .product-des .color h4 {
	font-size: 18px;
	font-weight: 600;
}
.shop.single .product-des .color h4 span {
	display: block;
	font-size: 14px;
	font-weight: 500;
	margin-top: 4px;
}
.shop.single .product-des .color ul{
	margin-top: 10px;
}
.shop.single .product-des .color ul li{
	display:inline-block;
	margin-right:5px;
}
.shop.single .product-des .color ul li:last-child{
	margin-right:0;
}
.shop.single .product-des .color ul li a{
	height:30px;
	width:30px;
	line-height:30px;
	text-align:center;
	display:block;
	background:#333;
}
.shop.single .product-des .color ul li a i{
	font-size:11px;
	color:#fff;
	opacity:0;
	visibility:hidden;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.shop.single .product-des .color ul li a:hover i{
	opacity:1;
	visibility:visible;
}
.shop.single .product-des .color ul li .one{
	background:#3498db;
}
.shop.single .product-des .color ul li .two{
	background:var(--primary-color);
}
.shop.single .product-des .color ul li .three{
	background:#8e44ad;
}
.shop.single .product-des .color ul li .four{
	background:#2ecc71;
}
/* Size */
.shop.single .product-des .size{
	display:inline-block;
}
.shop.single .product-des .size h4{
	display: block;
	font-size: 14px;
	font-weight: 500;
	margin-top: 0px;
}
.shop.single .product-des .size ul{
	display:inline-block;
	margin-top: 10px;
}
.shop.single .product-des .size ul li {
	display: inline-block;
	margin-right: 5px;
}
.shop.single .product-des .size ul li:last-child{
	margin-right:0;
}
.shop.single .product-des .size ul li a {
	display: block;
	height: 30px;
	width: 36px;
	border: 1px solid #eee;
	text-align: center;
	line-height: 30px;
	font-size: 14px;
}
.shop.single .product-des .size ul li a:hover{
	color:var(--primary-color);
}

.shop.single .product-des .product_options{
	float: left;
    margin-right: 15px;
}

.shop.single .product-des .product_options h6{
	display: block;
    font-size: 13px;
    font-weight: 500;
    margin-top: 0px;
    margin-bottom: 5px;
}

.shop.single .product-des .product_options select{
	width: 100%;
}

.shop.single .quantity {
	display: inline-block;
	margin-right: 10px;
}
.shop.single .quantity h6 {
	display: inline-block;
	margin-right: 10px;
	font-size: 15px;
	font-weight: 500;
}
.shop.single .quantity .input-group {
	width: 151px;
	display: inline-block;
}
.shop.single .quantity .button {
	display: inline-block;
	position: absolute;
	top: 0;
	display:inline-block;
}
.shop.single .quantity .button.minus{
	left:0;
	border-radius:0;
	overflow:hidden;
}
.shop.single .quantity .button.plus {
	right: 0;
	border-radius:0;
	overflow:hidden;
}
.shop.single .quantity .button .btn {
	padding: 0;
	width: 35px;
	height: 45px;
	line-height: 45px;
	border-radius: 0px;
	background: transparent;
	color: #282828;
	font-size: 12px;
	border: none;
}
.shop.single .quantity .button .btn:hover{
	color:var(--primary-color);
}
.shop.single .quantity .input-number {
	border: 1px solid #eceded;
	width: 100%;
	text-align: center;
	height: 45px;
	border-radius: 0px;
	overflow: hidden;
	padding: 0px 38px;
}
.shop.single .add-to-cart {
	display:inline-block;
}
.shop.single .add-to-cart .btn {
	height: 45px;
	width: auto;
	padding: 0 30px;
	line-height: 44px;
	text-align: center;
	text-transform: capitalize;
	margin-right: 5px;
	border-radius: 0px;
	background: #333;
	color: #fff;
	display: inline-block;
	font-weight: 500;
}
.shop.single .add-to-cart .btn:hover{
	color:#fff;
	background:var(--primary-color);
}
.shop.single .add-to-cart .btn.min {
	padding: 0 20px;
	font-size: 17px;
	position: relative;
	top: 1px;
	line-height: 45px;
}
.shop.single .cat{
	font-size: 14px;
	font-weight: 500;
	color:#333;
	margin-top:30px;
}
.shop.single .cat a{
	display:inline-block;
	margin-left:10px;
}
.shop.single .cat a:hover{
	color:var(--primary-color);
}
.shop.single .availability{
	color:#333;
	font-size:14px;
	margin-top:6px;
}
/* Product Tab */
.shop.single .product-info {
	margin-top: 50px;
}
.shop.single .nav-tabs {
	border:none;
}
.shop.single .nav-tabs li {
	margin-right: 10px;
}
.shop.single .nav-tabs li:last-child{
	margin-right:0;
}
.shop.single .nav-tabs li a {
	border: 0px solid;
	border-radius: 0px;
	background: #fff;
	color: #333;
	padding: 10px 30px;
	font-weight: 500;
	font-size: 14px;
	border: 1px solid #eee;
}
.shop.single .nav-tabs li a i{
	margin-right:10px;
}
.shop.single .nav-tabs li a.active,
.shop.single .nav-tabs li:hover a{
	background:var(--primary-color);
	color:#fff;
	border-color:transparent;
}
.shop.single .tab-single {
	
}
.shop.single .single-des {
	margin-top:35px;
}
.shop.single .single-des h4{
	margin-bottom:15px;
	font-weight:500;
	font-size:22px;
	
}
.shop.single .single-des ul{}
.shop.single .single-des ul li {
	color: #555;
	display: block;
	margin-bottom: 10px;
	position:relative;
	padding-left:20px;
}
.shop.single .single-des ul li::before {
	position: absolute;
	content: "";
	left: 0;
	top: 9px;
	height: 7px;
	width: 7px;
	background: var(--primary-color);
	border-radius: 50%;
}
.shop.single .single-des p{
	margin-top: 1rem;
}

.shop.single .item-info {
	width: 100%;
}
.shop.single .item-info tbody{}
.shop.single .item-info tbody tr{}
.shop.single .item-info tbody td {
	border: 1px solid #e6e6e6;
	padding: 10px;
}
.shop.single .item-info tbody strong{}
.shop.single .ratting-main{}
.shop.single .avg-ratting {
	margin-bottom: 20px;
}
.shop.single .avg-ratting h4 {
	font-size: 18px;
	margin: 0;
}
.shop.single .avg-ratting h4 span{
	font-size:14px;
}
.shop.single .single-rating {
	margin-bottom: 20px;
}
.shop.single .single-rating:last-child{
	margin:0;
	border:none;
	padding:0;
}
.shop.single .rating-author {
	float: left;
	margin-right: 10px;
	padding: 20px;
	padding-right: 10px;
}
.shop.single .rating-author img {
	width: 60px;
	border-radius: 100%;
	height: 60px;
}
.shop.single .rating-des {
	padding-left: 72px;
	background: #f9f8f8;
	padding: 17px 20px 17px 107px;
}
.shop.single .rating-des .ratings {
	margin: 0;
}
.shop.single .rating-des h6 {
	font-size: 14px;
	font-weight: 600;
	line-height: 18px;
}
.shop.single .ratting-main .single-rating ul{}
.shop.single .ratting-main .single-rating ul li{
	display:inline-block;
}
.shop.single .ratting-main .single-rating ul li i{
	color:var(--primary-color);
	font-size:14px;
}
.shop.single .review-inner label {
	display: inline-block;
	margin: 0 5px 0 0;
}
.shop.single .review-inner .ratings {
	overflow: visible;
	display: inline-block;
	margin: 0;
}
.shop.single .review-inner .ratings ul{
	display:inline-block;
}
.shop.single .ratting-main .single-rating ul {
	display: inline-block;
	margin-right: 5px;
}
.shop.single .ratings .rate-count {
	display: inline-block;
	color: #666;
	font-size: 13px;
}
.shop.single .comment-review {
	margin-bottom: 30px;
}
.shop.single .comment-review .add-review{
	margin-top:30px;
}
.shop.single .comment-review .add-review h5{
	font-size: 18px;
	font-weight: 600;
	margin-bottom: 7px;
}
.shop.single .comment-review .add-review p{
	color:#333;
}
.shop.single .comment-review h4 {
	font-size: 15px;
	font-weight: 600;
	margin-bottom: 7px;
	margin-top:20px;
}
.shop.single .comment-review .review-inner{
	margin-bottom:15px;
	display:block;
}
.shop.single .comment-review .rating li {
	display:inline-block;
}
.shop.single .comment-review .rating li i{
	color:var(--primary-color);
	font-size: 14px;
}
.shop.single .rating-des p{
	margin-top:5px;
}
.shop.single .avg-ratting h4 {
	font-size: 20px;
	color: #333;
}
.shop.single .avg-ratting{}
.shop.single .form .form-group input {
	width: 100%;
	height: 45px;
	padding: 10px 20px;
	background: #fff;
	border: 1px solid #ddd;
	resize: none;
	border-radius: 0;
	color: #333;
}
.shop.single .form .form-group button {
	border: none;
	padding: 15px 50px;
}
.shop.single .form .form-group textarea {
	width: 100%;
	height:200px;
	border:1px solid #ddd;
	resize:none;
	border-radius:0;
	color:#333;
	padding: 10px 15px;
}
.shop.single .form .form-group label {
	color: #333;
	position: relative;
}
.shop.single .form .form-group label span {
	color: #ff2c18;
	display: inline-block;
	position: absolute;
	right: -12px;
	top: 4px;
	font-size: 16px;
}
.shop.single .review-panel{
	margin-top:35px;
}

/* Comments */
.shop .comments{
	margin-top:40px;
}
.shop .comments .comment-title {
	position: relative;
	font-size: 18px;
	font-weight: 600;
	text-transform: capitalize;
	margin-bottom: 30px;
	display: block;
	background: #fff;
	padding-left: 12px;
}
.shop .comments .comment-title:before{
	position: absolute;
	content: "";
	left: 0;
	bottom: -1px;
	height: 100%;
	width: 3px;
	background:#ee5253;
}

.shop .comments .single-comment {
	position: relative;
	margin-bottom: 15px;
	border-radius: 5px;
	padding-left: 95px;
}
.shop .comments .single-comment.left{
	margin-left:110px;
}
.shop .comments .single-comment img {
	height: 70px;
	width: 70px;
	border-radius: 100%;
	position: absolute;
	left: 0;
	border: 1px solid #eaeaea;
}

.shop .single-comment .content h4 {
	color: #333;
	font-size: 14px;
	font-weight: 500;
	margin-bottom: 10px;
	display: inline-block;
	margin-bottom: 12px;
	text-transform: capitalize;
}
.shop .single-comment .content h4 span {
	display: inline-block;
	font-size: 13px;
	color: #8D8D8D;
	margin: 0;
	font-weight: 400;
	text-transform: capitalize;
	display: block;
	margin-top: 5px;
}
.shop .single-comment .content p {
	color: #666;
	font-weight: 400;
	display: block;
	margin: 0;
	margin-bottom: 5px;
	line-height: 22px;
}
.shop .single-comment .content .btn {
	display: inline-block;
	color: #666;
	font-weight: 400;
	color: #6a6a6a;
	border-radius: 4px;
	text-transform: capitalize;
	font-size: 14px;
	background: transparent;
	padding: 0;
	margin-bottom: 15px;
}

.shop .single-comment .content a i{
	display:inline-block;
	margin-right:5px;
}
.shop .single-comment .content a:hover{
	color:#ee5253;
}
/* Comment Form */
.shop .reply form {
	padding: 40px;
	border: 1px solid #eee;
}
.shop .reply .reply-title {
	position: relative;
	font-size: 18px;
	font-weight: 600;
	text-transform: capitalize;
	margin-bottom: 30px;
	display: block;
	background: #fff;
	padding-left: 12px;
}
.shop .reply .reply-title:before{
	position: absolute;
	content: "";
	left: 0;
	bottom: -1px;
	height: 100%;
	width: 3px;
	background:#ee5253;
}
.shop .reply .form-group {
	margin-bottom: 20px;
}
.shop .reply .form-group input {
	width: 100%;
	height: 45px;
	line-height: 50px;
	padding: 0 20px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	border: 1px solid #eee;
}
.shop .reply .form-group textarea {
	width: 100%;
	height: 200px;
	padding: 10px 15px;
	border-radius: 0px;
	color: #333 !important;
	border: none;
	border: 1px solid #eee;
}
.shop .reply .form-group label {
	color: #333;
	position: relative;
}
.shop .reply .form-group label span {
	color:#ff2c18;
	display: inline-block;
	position: absolute;
	right: -12px;
	top: 4px;
	font-size: 16px;
}
.shop .reply .button {
	text-align: left;
	margin-bottom:0px;
}
.shop .reply .button .btn {
	height: 50px;
	border: none;
}

.btn:focus, .btn:active:focus, .btn.active:focus{
    outline:none;
    box-shadow:none;
}

.reply-form .btn-reply{
    padding: 10px 30px;
    color: #fff;
    background: #333;
    border: none;
    transition: all 0.5s;
}
ol.flex-control-nav.flex-control-thumbs img {
    width: 100px;
    height: 100px;
}

ol.flex-control-nav.flex-control-thumbs {
    display: flex;
}
.shop.single .nav-tabs li a.active, .shop.single .nav-tabs li:hover a {
    background: var(--primary-color);
    color: #000;
    border: 1px solid #000;
}
.shop.single .add-to-cart .btn:hover {
    color: #fff;
    /* background: var(--primary-color); */
    background: #1a191a;
}
.bundles_product {
    display: flex;
    justify-content: center;
    padding: 22px 0;
}
.bundles_product h4{
    font-size:77px;
}
.gift-card .our-product_content {
    padding-right: 30px;
    padding-left: 30px;
    box-shadow: var(--color-turshry) 0px 0px 214rem 2px;
    display: flex;
    justify-content: center;
    /* align-items: center; */
    /* margin-bottom: -25px; */
}
</style>
<link rel="stylesheet" href="{{ asset('public/theme/default/css/css-stars.css') }}">
<section class="shop single section">
	<div class="container">
		<div class="row"> 
			<div class="col-12">
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Product Slider -->
						<div class="product-gallery">
							<!-- Images slider -->
							<div class="flexslider-thumbnails">
								<ul class="slides">
							
									<li data-thumb="{{ asset('storage/app/'. $product->image->file_path) }}" rel="adjustX:10, adjustY:">
										<img src="{{ asset('storage/app/'. $product->image->file_path) }}" alt="#">
									</li>
									@if(isset($product->gallery_images))
										@foreach($product->gallery_images as $gallery_image)
											<li data-thumb="{{ asset('storage/app/'. $gallery_image->file_path) }}">
												<img src="{{ asset('storage/app/'. $gallery_image->file_path) }}" alt="#">
											</li>
										@endforeach
								    @endif
	
								</ul>
							</div>
							<!-- End Images slider -->
						</div>
						<!-- End Product slider -->
					</div>
					<div class="col-lg-6 col-12">
						<div class="product-des">
							<!-- Description -->
							<div class="short">
								<h4>{{ $product->translation->name }}</h4>
								
								<div class="rating-main">
									<ul class="rating">
										{!! xss_clean(show_rating($product->reviews->avg('rating'))) !!}
									</ul>
									<a href="#" class="total-review">({{ $product->reviews->count() }}) {{ _lang('Review') }}</a>
								</div>

								@if($product->product_type != 'variable_product')
									<p class="price">
										@if($product->special_price != '' || (int) $product->special_price != 0 )
											<span class="discount">{!! $product->special_price !!}</span>
											<s>{!! $product->price !!}</s> 
										@else
											<span class="discount">{!! $product->price !!}</span>
										@endif
									</p>
								@else
									<p class="price">
										@if($product->variation_prices[0]->special_price != '' || (int) $product->variation_prices[0]->special_price != 0 )
											<span class="discount">{!! xss_clean(show_price($product->variation_prices[0]->special_price)) !!}</span>
											<s>{!! $product->variation_prices[0]->price !!}</s> 
										@else
											<span class="discount">{!! $product->variation_prices[0]->price !!}</span>
										@endif
									</p>
								@endif

								<p class="description">{{ $product->translation->short_description }}</p>
							</div>
							<!--/ End Description -->


							<!-- Product Options -->
							@if(! $product->product_options->isEmpty())
								<form action="{{ url('products/get_variation_price/'.$product->id) }}" id="product-variation">
									@csrf
									@foreach($product->product_options as $product_option)	
										<div class="product_options">
											<h6>{{ $product_option->name }}</h6>
											<select name="product_option[]" class="select_product_option">
												@foreach($product_option->items as $item)
													<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
											</select>
										</div>
									@endforeach
								</form>
								<div class="clearfix"></div>
							@endif

							<!--/ End Product Options -->

							<!-- Product Buy -->
							<div class="product-buy">
								<div class="quantity">
									<h6>{{ _lang('Quantity') }} :</h6>
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quantity">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quantity" class="input-number" data-min="1" data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quantity">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>

								<div class="add-to-cart">
									@if($product->in_stock == 1)
										<a href="{{ url('add_to_cart/'.$product->id) }}" data-type="{{ $product->product_type }}" class="btn add_to_cart">{{ _lang('Add to Cart') }}</a>
									@else
										<a href="#" class="btn disabled">{{ _lang('Add to Cart') }}</a>
									@endif
									<a href="{{ wishlist_url($product) }}" class="btn min btn-wishlist"><i class="ti-heart"></i></a>
								</div>



								<p class="cat">{{ _lang('Category') }} : {{ $product->categories->count() == 0 ? _lang('N/A') : '' }}
									@foreach($product->categories as $category)
									<a href="{{ url('/categories/'.$category->slug) }}">{{ $category->translation->name }}</a>
									@endforeach
								</p>

								@if($product->sku != '')
									<p class="sku">{{ _lang('SKU') }} : {{ $product->sku }}</p>
								@endif

								@if($product->manage_stock == 1 && $product->in_stock == 1)
									<p class="availability">{{ _lang('Availability') }} : {{ $product->qty.' '._lang('Product In Stock') }}</p>
								@endif

								@if($product->in_stock == 0)
									<p class="availability">{{ _lang('Availability') }} : <span class="text-danger">{{ _lang('Out Of Stock') }}</span></p>
								@endif

							</div>
							<!--/ End Product Buy -->
						</div>
					</div>
				</div>
				
@if($product->is_gift)
    <div class='row bundles_product'>
        <h4>Bundle Products</h4>
    </div>
    @php
    $giftProducts = App\Entity\Product\Product::where('is_gift', 1)->get();
    $ids = json_decode($product->products_id);

    @endphp
    <div class='row'>
            @foreach($ids as $id)
                @php
                $productItem = App\Entity\Product\Product::where('id', $id)->first();
                $productsTranslation = App\Entity\Product\ProductTranslation::where('product_id', $productItem->id)->first();
                @endphp
            @if($productItem)
               <div class="col-12 col-lg-4 mt-5 p-0">
                    <a>
                        <div class="product-card gift-card">
                            <img src="{{ asset('storage/app/'. $productItem->image->file_path) }}"
                                class="img-fluid" alt="image" />
                            <div class="our-product_content">
                                <div class="justify-content-between align-items-center d-flex">
                                    <h4 style='color:#000;'>{{ $productsTranslation->name }}</h4>
                                </div>
                                <div class="align-items-center justify-content-between d-flex">
                                    <!-- Additional content for the product card if needed -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @endforeach
    </div>
@endif

				
				
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">{{ _lang('Description') }}</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">{{ _lang('Reviews') }} ({{ $product->reviews->count() }})</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#comments" role="tab">{{ _lang('Comments') }} ({{ $product->comments->count() }})</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Description Tab -->
								<div class="tab-pane fade show active" id="description" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-12">
												<div class="single-des">
													{!! xss_clean($product->translation->description) !!}
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Description Tab -->

								<!-- Reviews Tab -->
								<div class="tab-pane fade" id="reviews" role="tabpanel">
									<div class="tab-single review-panel">
										<div class="row">
											<div class="col-12">
												<div class="ratting-main">

													<div class="avg-ratting">
														<h5><span class="total-reviews">{{ $product->reviews->count() }}</span> {{ _lang('Reviews for').' '.$product->translation->name }}</h5>
													</div>

													@if(\Session::has('success'))
														<div class="alert alert-success mt-4">
															<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
															<span>{!! xss_clean(session('success')) !!}</span>
														</div>
													@endif

													@foreach($product->reviews as $review)
													<!-- Single Rating -->
													<div class="single-rating">
														<div class="rating-author">
															<img src="{{ profile_picture($review->user->profile_picture) }}" alt="{{ _lang('Profile Picture') }}">
														</div>
														<div class="rating-des">
															<h6>{{ $review->user->name }}</h6>
															<div class="ratings">
																<ul class="rating">
																	{!! xss_clean(show_rating($review->rating)) !!}
																</ul>
																<div class="rate-count">(<span>{{ $review->rating }}</span>)</div>
															</div>
															<p>{{ $review->comment }}</p>
														</div>
													</div>
													<!--/ End Single Rating -->
													@endforeach

												</div>
												<!-- Review -->
												<div class="comment-review">
													<div class="add-review">
														<h5>{{ _lang('Add A Review') }}</h5>

														@if(! auth()->check())
															<p>{{ _lang('You need to login for writing a review.') }} <a href="{{ url('sign_in') }}" class="btn-link">{{ _lang('Login to your account') }}</a></p>
														@endif
													</div>

												</div>
												<!--/ End Review -->
												<!-- Form -->
												<form class="form reviews-form" method="post" action="{{ route('reviews.store') }}">
													@csrf
													<div class="row">
														<div class="col-lg-12 col-12">
															<div class="form-group">
																<label>{{ _lang('Your Rating') }}<span>*</span></label>
																<select class="ratng-bar" name="rating" rquired>
																  <option value="1">{{ _lang('1') }}</option>
																  <option value="2">{{ _lang('2') }}</option>
																  <option value="3">{{ _lang('3') }}</option>
																  <option value="4">{{ _lang('4') }}</option>
																  <option value="5">{{ _lang('5') }}</option>
																</select>	
															</div>
														</div>
														
														<div class="col-lg-12 col-12">
															<div class="form-group">
																<label>{{ _lang('Write a review') }}<span>*</span></label>
																<textarea name="comment" rows="6" required="true" {{ ! auth()->check() ? 'disabled' : '' }}></textarea>
																<input type="hidden" name="product_id" value="{{ $product->id }}" />
															</div>
														</div>

														<div class="col-lg-12 col-12">
															<div class="form-group button5">	
																<button type="submit" class="btn" {{ ! auth()->check() ? 'disabled' : '' }}>{{ _lang('Submit') }}</button>
															</div>
														</div>
													</div>
												</form>
												<!--/ End Form -->
											</div>
										</div>
									</div>
								</div>
								<!--/ End Reviews Tab -->


								<!-- Comments Tab -->
								<div class="tab-pane fade" id="comments" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-12">
												<div class="comments">
													<h3 class="comment-title">{{ _lang('Comments') }} (<span class="comments-count">{{ $product->comments->count() }}</span>)</h3>
													
													@if(\Session::has('success'))
														<div class="alert alert-success mt-4">
															<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
															<span>{!! xss_clean(session('success')) !!}</span>
														</div>
													@endif

													<div id="comment-list">
														@if($product->comments->count() == 0)
															<p class="mb-4">{{ _lang('No Comments found !') }}</p>
														@endif

														@include('theme.default.components.comments', ['comments' => $product->comments, 'product_id' => $product->id])
													</div>

												</div>
											</div>

											<div class="col-12">			
												<div class="reply">
													<div class="reply-head">
														<h2 class="reply-title">{{ _lang('Leave Your Comment') }}</h2>
														
														@if(! auth()->check())
															<p>{{ _lang('You need login for posting a comment.') }} <a href="{{ url('sign_in') }}" class="btn-link">{{ _lang('Login to your account') }}</a></p>
														
														@endif
														<!-- Comment Form -->
														<form class="form comment-form" method="post" action="{{ route('comments.store') }}">
															@csrf
															<div class="row">
																<div class="col-12">
																	<div class="form-group">
																		<label>{{ _lang('Your Comment') }}<span>*</span></label>
																		<textarea name="body" required="true" {{ ! auth()->check() ? 'disabled' : '' }}></textarea>
																		<input type="hidden" name="product_id" value="{{ $product->id }}" />
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group button">
																		<button type="submit" class="btn" {{ ! auth()->check() ? 'disabled' : '' }}>{{ _lang('Post Comment') }}</button>
																	</div>
																</div>
															</div>
														</form>
														<!-- End Comment Form -->
														
													</div>
												</div>			
											</div>

										</div>
									</div>
								</div>
								<!--/ End Comments Tab -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('js-script')
<script src="{{ asset('public/theme/default/js/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('public/theme/default/js/product-options.js?v=1.1') }}"></script>
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
 
	<!-- Jquery -->
    <script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('public/theme/default/js/easing.js') }}"></script>

	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
	
	<script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>

	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
	
	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>

@endsection

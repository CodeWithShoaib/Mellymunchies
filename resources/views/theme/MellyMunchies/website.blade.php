
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
    <title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>

    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : get_option('meta_keywords') }}"/>
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : get_option('meta_description') }}"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ get_favicon() }}">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/bootstrap.css') }}">-->
	<!-- Magnific Popup -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/magnific-popup.min.css') }}">-->
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery.fancybox.min.css') }}">-->
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/niceselect.css') }}">-->
	<!-- Animate CSS -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/animate.css') }}">-->
	<!-- Flex Slider CSS -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/flex-slider.min.css') }}">-->
    <!-- Jquery Ui -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery-ui.css') }}">-->
	<!-- Owl Carousel -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/owl-carousel.css') }}">-->
	<!-- Slicknav -->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/slicknav.min.css') }}">-->

    <!--<link href="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" />-->
	
	<!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/reset.css') }}">-->
	<!--<link rel="stylesheet" href="{{ asset('public/theme/default/style.css?v=1.1') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('public/theme/default/css/responsive.css?v=1.1') }}">  -->
    <link href="{{ asset('public/theme/myweb/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src='https://code.jquery.com/jquery-3.6.4.min.js'></script>
    <style>



/* Preloader */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999999;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.2);
  overflow: hidden;
}
.preloader-inner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%,-50%);
  -moz-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
}
.preloader-icon {
  width: 100px;
  height: 100px;
  display: inline-block;
  padding: 0px;
}
.preloader-icon span {
  position: absolute;
  display: inline-block;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background:var(--primary-color);
  -webkit-animation: preloader-fx 1.6s linear infinite;
  animation: preloader-fx 1.6s linear infinite;
}
.preloader-icon span:last-child {
  animation-delay: -0.8s;
  -webkit-animation-delay: -0.8s;
}
@keyframes preloader-fx {
  0% {transform: scale(0, 0); opacity:0.5;}
  100% {transform: scale(1, 1); opacity:0;}
}
@-webkit-keyframes preloader-fx {
  0% {-webkit-transform: scale(0, 0); opacity:0.5;}
  100% {-webkit-transform: scale(1, 1); opacity:0;}
}
/* End Preloader */

/*======================================
	01. Header CSS
========================================*/
/* Topbar */
.topbar {
	background-color: #fff;
	border-bottom: 1px solid #e2e2e2;
	padding: 15px 0;
}
/* Logo */
.header .logo {
	float: left;
	margin-top: 35px;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header .navbar {
	padding: 0;
}
/* Main Menu */
.navbar-expand-lg .navbar-collapse{
	display:block !important;
}
.header.v3 .navbar-expand-lg .navbar-collapse{
	display:block !important;
	background:#333;
}
.header .nav li a i {
	margin-right: 4px;
	font-size: 14px;
}
/* Dropdown Menu */
.header .nav li .dropdown {
	background: #fff;
	width: 220px;
	position: absolute;
	top: 100%;
	z-index: 999;
	-webkit-box-shadow: 0px 3px 5px #3333334d;
	-moz-box-shadow: 0px 3px 5px #3333334d;
	box-shadow: 0px 3px 5px #3333334d;
	transform-origin: 0 0 0;
	transform: scaleY(0.2);
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	opacity: 0;
	visibility: hidden;
	padding: 0px;
	left: 0;
	margin: 0;
}
.header .nav li:hover .dropdown{
	opacity:1;
	visibility:visible;
	transform:translateY(0px);
}
.header .nav li .dropdown li{
	float:none;
	margin:0;
}
.header .nav li .dropdown li a {
	padding: 15px;
	color: #666;
	display: block;
	font-weight: 400;
	text-transform: capitalize;
	background: transparent;
}
.header .nav li .dropdown li a:before{
	display:none;
}
.header .nav li .dropdown li:last-child a{
	border-bottom:0px;
}
.header .nav li .dropdown li:hover a{
	color:#fff;
	background:var(--primary-color);
}
.header .nav li .dropdown li a:hover{
	border-color:transparent;
}
.header .nav li .dropdown li i {
	float: right;
	margin-top: 8px;
	font-size:10px;
	z-index:5;
}
.header .nav li .dropdown.sub-dropdown {
	background: #fff;
    width: 220px;
    position: absolute;
    left: 220px;
    top: 0;
    z-index: 999;
   -webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 3px 5px #3333334d;
    transform-origin: 0 0 0;
    transform: scaleY(0.2);
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    opacity: 0;
    visibility: hidden;
}
.header .nav li .dropdown li:hover .dropdown.sub-dropdown{
	opacity:1;
	visibility:visible;
	transform:translateY(0px);
}
.header .nav li .dropdown.sub-dropdown li a{
	padding: 15px;
	color: #666;
	display: block;
	font-weight: 400;
	text-transform: capitalize;
	background: transparent;
}
.header .nav li .dropdown li:hover .dropdown.sub-dropdown li a{
	background:transparent;
}
.header .nav li .dropdown li .dropdown.sub-dropdown li a:hover{
	color:#fff;
	background:var(--primary-color);
}
.header .nav li .dropdown.sub-dropdown li:last-child a{
	border-bottom: 0px solid;
}
.mobile-search{
	display:none;
}
.header.shop .topbar {
	border: none;
	padding: 12px 0px;
}
.header.shop .nav-inner {
	margin-right: 188px;
}
.header.shop .logo {
	float: left;
	margin-top: 35px;
}
.header.shop .top-contact {
	margin-top:0px;
}
.header.shop .topbar p {
	color: #ccc;
}
.header.shop .topbar .login a {
	color: var(--primary-color);
}
/* Topbar Left Nav */
.header.shop .left-nav{
	
}
.header.shop .top-left .list-main li:first-child{
	padding-left:0;
}
.header.shop .top-left .list-main li i{
	display: inline-block;
	margin-right: 4px;
	font-size: 15px;
	color: var(--primary-color);
	position: relative;
	top: 3px;
}
.header.shop .right-content{
	float:right;
}
.header.shop .list-main li {
	display: inline-block;
	color: #333;
	font-size: 13px;
	font-weight: 500;
	border-right: 1px solid #f0f0f0;
	padding: 0px 13px;
}
.header.shop .list-main li i {
	display: inline-block;
	margin-right: 4px;
	font-size: 15px;
	color: var(--primary-color);
	position: relative;
	top: 1px;
}
.header.shop .list-main li:last-child{
	padding-right:0;
	border:none;
}
.header.shop .list-main li a{
	color:#333;
	font-size: 14px;
}
.header.shop .list-main li a:hover{
	color:var(--primary-color);
}
.header.shop .nav li {
	margin-right: 40px;
	float: left;
	position: relative;
}
.header.shop .nav li {
	margin-right: 38px;
	position: relative;
}
.header.shop .nav li:last-child {
	margin: 0 !important;
}
.header.shop .nav li .new {
	background: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 10px;
	padding: 0px 9px;
	position: absolute;
	left: 0;
	top: 6px;
	font-weight: 500;
}
.header.shop .nav li .new::before {
	position: absolute;
	content: "";
	left: 4px;
	bottom: -8px;
	border: 4px solid var(--primary-color);
	border-bottom-color: transparent;
	border-left-color: transparent;
	border-right-color: transparent;
}
.header.shop .list-main li .dropdown-menu{
	margin-top: 30px;
	border: none;
	box-shadow: 1px 3px 15px #e2e2e2;
	transition: margin 0.3s;
	display: block;
	border-radius: 0px;
	opacity: 0;
	z-index: -99;
}
.header.shop .list-main li .dropdown-menu.show{
	opacity: 1;
	margin-top: 15px;
	z-index: 1;
}
/* Shopping Cart */
.header .shopping {
	display: inline-block;
	z-index: 9999;
}
.header .shopping .icon {
	position: relative;
	cursor:pointer;
	color:#222;
}
.header .shopping .shopping-item {
	position: absolute;
	top: 68px;
	right: 0;
	width: 300px;
	background: #fff;
	padding: 20px 25px;
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	-webkit-transform: translateY(10px);
	-moz-transform: translateY(10px);
	transform: translateY(10px);
	-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	opacity:0;
	visibility:hidden;
	z-index:99;
}
.header .shopping:hover .shopping-item{
	transform: translateY(0px);
	opacity:1;
	visibility:visible;
}
.header .shopping .dropdown-cart-header{
	padding-bottom: 10px;
    margin-bottom: 15px;
	border-bottom:1px solid #e6e6e6;
}
.header .shopping .dropdown-cart-header span {
	text-transform: uppercase;
	color: #222;
	font-size: 13px;
	font-weight: 600;
}
.header .shopping .dropdown-cart-header a {
	float: right;
	text-transform: uppercase;
	color: #222;
	font-size: 13px;
	font-weight: 600;
}
.header .shopping .dropdown-cart-header a:hover{
	color:var(--primary-color);
}
.header .shopping-list li {
	overflow: hidden;
	border-bottom: 1px solid #e6e6e6;
	padding-bottom: 15px;
	margin-bottom: 15px;
	position:relative;
}
.header .shopping-list li .remove {
    position: absolute;
    left: 0;
    bottom: 16px;
    margin-top: -20px;
    height: 29px;
    width: 39px;
    line-height: 18px;
    text-align: center;
    background: #fff;
    color: #222;
    border-radius: 0;
    font-size: 11px;
    border: 1px solid #ededed;
    display: flex;
    justify-content: center;
    align-items: center;
}
.header .shopping-list li .remove:hover{
	background:#222;
	color:#fff !important;
	border-color:transparent;
}
.header .shopping-list .cart-img {
	float: right;
	border: 1px solid #ededed;
	overflow:hidden;
}
.header .shopping-list .cart-img img {
	width: 70px;
	height: 70px;
	border-radius:0;
	
}
.header .shopping-list .cart-img:hover img{
	transform:scale(1.09);
}
.header .shopping-list .quantity{
	line-height: 22px;
    font-size: 13px;
	padding-bottom: 30px;
}
.header .shopping-list h4 {
	font-size: 14px;
}
.header .shopping-list h4 a {
	font-weight: 600;
	font-size: 13px;
	color: #333;
}
.header .shopping-list h4 a:hover{
	color:var(--primary-color);
}
.header .shopping-item .bottom {
	text-align: center;
}
.header .shopping-item .total {
	overflow:hidden;
	display: block;
    padding-bottom: 10px;
}
.header .shopping-item .total span {
	text-transform:uppercase;
	color:#222;
	font-size:13px;
	font-weight:600;
	float:left;
}
.header .shopping-item .total .total-amount {
	float:right;
	font-size:14px;
}
.header .shopping-item .bottom .btn {
    background: #efc7e4;
    padding: 10px 20px;
    display: block;
    color: #fff;
    margin-top: 10px;
    border-radius: 0px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
}
.header .shopping-item .bottom .btn:hover {
    background: var(--primary-color);
    color: #020000;
    border: 1px solid black;
}
.header.shop{
	background:#fff;
}
.header.shop .nav-inner {
	margin: 0;
	float: left;
}
.header.shop .topbar {
	background-color: #fff;
	border: none;
}
.header.shop.v3 .topbar{
	padding:0;
}
.header.shop.v3 .topbar .inner-content{
	border-bottom:1px solid #eee;
	padding: 12px 0px;
}
.header.shop .right-nav li a {
	color: #333;
}
.header.shop .logo {
	float: left;
	margin: 19px 0 0;
}
.header.shop .top-contact {
	margin-top:0px;
}
#mobile-cart{
	display:none;
}
/* Header Middle */
.header.shop .search-bar-top {
	text-align: center;
	margin-top: 10px;
}
.header.shop .search-bar {
	margin-top: 33px;
	width: 460px;
	height: 40px;
	display: inline-block;
	background: #fff;
	position: relative;
}
.header.shop .search-bar {
	width: 535px;
	height: 50px;
	display: inline-block;
	background: #fff;
	position: relative;
	margin: 0;
	line-height: 45px;
	border-radius: 5px;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #999
}

.twitter-typeahead{
	background: #FFF;
}

.tt-menu {    /* used to be tt-dropdown-menu in older versions */
  width: 385px;
  background-color: #fff;
  border-bottom: 2px solid var(--primary-color);
  text-align: left;      
}

.tt-suggestion {
  padding: 3px 20px;
  line-height: 24px;
}

.tt-suggestion.tt-cursor,.tt-suggestion:hover {
  background-color: #eaeaea;
  cursor: pointer;
}

.tt-suggestion p {
  margin: 0;
}

.search-suggestions .image{
	width: 50px;
	padding: 8px 0px;
	margin-right: 15px;
}

.search-suggestions .content{
	width: calc(100% - 50px);
}

.search-suggestions .content h5{
	font-size: 14px;
	font-weight: 500;
}

.header.shop .nice-select {
	clear: initial;
	margin: 0;
	height: 48px;
	width: 150px;
	border: none;
	text-align: center;
	background: transparent;
	text-transform: capitalize;
	padding: 0 0 0 20px;
	line-height: 45px;
	font-size: 12px;
	font-weight: 400;
	border: 1px solid #afafaf;
	border-right: none;
	border-top-left-radius: 25px;
}
.header.shop .nice-select::after {
	border-color: #666;
	right: 20px;
}
.header.shop .nice-select .list {
	border-radius:0px;
}
.header.shop .nice-select .list li.focus{
	font-weight:400;
}
.header.shop .nice-select .list li {
	color: #666;
	border-radius: 0px;
	font-size: 14px;
	font-weight: 400;
}
.header.shop .nice-select .list li:hover{
	background:var(--primary-color);
	color:#fff;
}
.header.shop .search-bar form {
	display: inline-block;
	float: left;
	width: 370px;
}
.header.shop .search-bar input {
	height: 48px;
	background: transparent;
	color: #666;
	border-radius: 0;
	border: 1px solid #afafaf;
	font-size: 14px;
	font-weight: 400;
	padding: 0 25px 0 20px;
	width: 385px;
	/* border-top-right-radius: 25px; */
	border-bottom-right-radius: 25px;
}
.header.shop .search-bar input:focus {
	border: 1px solid var(--primary-color);
	outline: none;
}
.header.shop .search-bar .btnn {
	height: 48px;
	line-height: 53px;
	text-align: center;
	font-size: 18px;
	color: #666;
	background: transparent;
	position: absolute;
	right: 15px;
	top: -1px;
	border: none;
	border-radius: 0 5px 5px 0;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header.shop .search-bar .btnn:hover{
	color: var(--primary-color);
}
.header.shop .search-bar .btnn:focus {
	outline: none;
	border:none;
}
/* Search Form */
.header.shop .search-top {
	opacity: 1;
	visibility: visible;
	top: 0;
	background: transparent;
	border: none;
	box-shadow: none;
	padding: 0;
	top: 0;
}
.header.shop .middle-inner {
	padding: 20px 0;
	background: #fff;
	border-top: 1px solid #eee;
}
.header.shop.v3 .middle-inner {
	border:none;
}
.header.shop .header-inner {
	background: #1d2224;
	height: 64px;
}
.header.shop.v3 .header-inner {
	background: transparent;
}
.header.shop.v2 .header-inner {
	background: #fff;
	border-top:1px solid #eee;
}
.header.shop .topbar p {
	color: #333;
}
.header.shop .all-category {
	color: #fff;
	background: transparent;
	position: relative;
	background: var(--primary-color);
}
.header.shop .all-category h3{
	padding: 20px 25px;
}
.header.shop .cat-heading {
	font-size: 20px;
	color: #fff;
}
.header.shop .cat-heading i {
	color: #fff;
	display: inline-block;
	margin-right: 15px;
	font-size: 22px;
}
.header.shop .main-category {
	position: absolute;
	left: 0;
	top: 64px;
	background: #fff;
	z-index: 1;
	width: 100%;
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category li{
	display:block;
	border-bottom:1px solid #f6f6f6;
	position:relative;
}
.header.shop .main-category li:last-child{
	border:none;
}
.header.shop .main-category li a {
	font-size: 14px;
	font-weight: 600;
	color: #333;
	padding: 13px 25px 13px 25px;
	display: block;
	text-transform: uppercase;
}
.header.shop .main-category li a i{
	display:inline-block;
	float:right;
	margin-top: 5px;
}
.header.shop .sub-category {
	background: #fff;
	width: 220px;
	position: absolute;
	left: 238px;
	top: 0;
	z-index: 999999;
	display: none;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-left: 3px solid var(--primary-color);
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category li:hover > .sub-category{
	display:block;
}

/* 2nd Sub category */
.header.shop .sub-category .sub-category {
	background: #fff;
	width: 220px;
	position: absolute;
	left: 196px;
	top: 0;
	z-index: 999999;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-left: 3px solid var(--primary-color);
	-webkit-box-shadow: 0px 5px 15px #0000000a;
	-moz-box-shadow: 0px 5px 15px #0000000a;
	box-shadow: 0px 5px 15px #0000000a;
}
.header.shop .main-category .sub-category li:hover .sub-category{
	opacity:1;
	visibility:visible;
}

.header.shop .main-category li a{
	text-transform:capitalize;
	font-weight:400;
}
.header.shop .main-category li a:hover{
	color:var(--primary-color);
}
.header.shop .main-category .main-mega{
	position:relative;
}
.header.shop .main-category li .mega-menu {
	width: 850px;
	display: inline-block;
	height: auto;
	position: absolute;
	left: 238px;
	top: 0;
	z-index: 99999;
	background: #fff;
	border: none;
	padding: 30px;
	border-left: 3px solid var(--primary-color);
	opacity:0;
	visibility:hidden;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.header.shop .main-category li:hover .mega-menu{
	opacity:1;
	visibility:visible;
}
.header.shop .main-category li .mega-menu .single-menu {
	width: 33%;
	display: inline-block;
	border: none;
	padding: 0;
	padding-right: 20px;
}
.header.shop .main-category li .mega-menu .single-menu a{
	padding:0;
}
.header.shop .main-category li .mega-menu .single-menu .image{
	overflow:hidden;
}
.header.shop .main-category li .mega-menu .single-menu img{
	display:block;
	height:100%;
	width:100%;
	cursor:pointer;
}
.header.shop .main-category li .mega-menu .single-menu .image:hover img{
	transform:scale(1.1);
}
.header.shop .main-category li .mega-menu .single-menu .title-link {
	margin-bottom: 20px;
	background: var(--primary-color);
	color: #fff;
	padding: 2px 13px;
	border-radius: 3px;
	display: inline-block;
	font-size: 14px;
}
.header.shop .main-category li .mega-menu .single-menu .title-link:hover{
	background:#333;
	color:#fff;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link{
	margin-top:25px;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a{
	margin-bottom:10px;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a:hover{
	color:var(--primary-color);
	background:transparent;
}
.header.shop .main-category li .mega-menu .single-menu .inner-link a:last-child{
	margin-bottom:0px;
}
.header.shop .menu-origin {
	float:none;
	display: inline-block;
	float: right;
}
.header.shop .nav li {
	margin-right: 40px;
	float: left;
	position: relative;
}
.header.shop .nav li {
	margin-right:5px;
	position: relative;
	float: none;
}
.header.shop .nav li:last-child{
	margin-right:0;
}
.header.shop .nav li .new {
	background: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 9px;
	position: absolute;
	left: 21px;
	top: 2px;
	font-weight: 500;
	height: 18px;
	line-height: 18px;
	text-align: center;
	display: block;
}
.header.shop.v2 .nav li a{
	color:#333;
}
.header.shop .nav li a {
	color: #fff;
	text-transform: capitalize;
	font-size: 15px;
	padding: 20px 15px;
	font-weight: 500;
	display: block;
	position: relative;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header.shop .nav li:hover a{
	color:#fff;
	background:var(--primary-color);
}
.header.shop.v2 .nav li:hover a{
	color:var(--primary-color);
	background:transparent;
}
.header.shop .nav li.active a{
	color:#fff;
	background:var(--primary-color);
}
.header.shop.v2 .nav li.active a{
	color:#333 !important;
	background:transparent !important;
}
.header.shop.v2 .nav li.active a{
	color: var(--primary-color) !important;
}
.header.shop .nav .dropdown li{
	margin:0;
}
.header.shop .nav li .dropdown li:hover a{
	background:var(--primary-color);
}
.header.shop.v2 .nav li.active .dropdown li a{
	color:#333 !important;
}
.header.shop.v2 .nav li.active .dropdown li a:hover{
	color:#fff !important;
	background: var(--primary-color) !important;
}
.header.shop.v2 .nav li.active .dropdown li a:hover{
	color:#fff !important;
}
.header.shop.v2 .nav li .dropdown li:hover a{
	color:var(--primary-color);
}
.header.shop .nav li .dropdown li a {
	color: #333;
	padding: 8px 15px;
	font-weight: 400;
	background:#fff;
}
.header.shop.v2 .nav li .dropdown li a {
	color: #333;
	background:#fff;
}
.header.shop .nav li .dropdown li a {
	font-weight: 400;
	font-size: 14px;
}
.header.shop .nav li .dropdown li a:hover{
	color:#fff;
}
.header.shop.v2 .nav li .dropdown li a:hover{
	color:#fff !important;
	background:var(--primary-color);
}
.header.shop .nav li .dropdown li .dropdown.sub-dropdown li a:hover{
	background:var(--primary-color);
}
.header.shop .right-bar {
	display: inline-block;
	padding: 0;
	margin: 0;
	top: 20px;
	float: right;
	position: relative;
}
.header.shop .right-bar .sinlge-bar.top-search a {
	transform: translateY(3px);
}
.header.shop .right-bar .sinlge-bar.top-search a:hover {
	color:var(--primary-color);
}
.header.shop .right-bar .sinlge-bar .single-icon{
	color:#333;
	font-size:20px;
	position:relative;
}
.header.shop .right-bar .sinlge-bar .single-icon:hover{
	color:var(--primary-color);
}
.header.shop .right-bar .sinlge-bar .single-icon .total-count {
	position: absolute;
	top: -7px;
	right: -8px;
	background: var(--primary-color);
	width: 18px;
	height: 18px;
	line-height: 18px;
	text-align: center;
	color: #fff;
	border-radius: 100%;
	font-size: 11px;
}
.header.shop .right-bar .sinlge-bar{
	display:inline-block;
	margin-right:25px;
}
.header.shop .right-bar .sinlge-bar:last-child{
	margin-right:0px;
}
.header.shop .right-bar .sinlge-bar li a:hover{
	color:var(--primary-color);
}
.mobile-search{
	display:none;
}
/* Header Search */
/* Search */
.header .search-top{
	display:none;
}
.header .search-top a{
	font-size:17px;
}
.header .search-top a:hover{
	color:var(--primary-color);
}
.header .search-form {
	position: absolute;
	left: -128px;
	z-index: 9999;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	transition: all 0.5s ease;
	top: 46px;
	background: #ffffff75;
	padding: 7px;
	border-radius: 5px;
	transform: scaleY(0);
	box-shadow: 0px 4px 7px #0000003b;
	padding: 0;
	border-radius: 0;
}
.header .search-top.active .search-form {
	opacity:1;
	visibility:visible;
	transform: scaleY(1);
}
.header .search-form input {
	width: 220px;
	height: 45px;
	line-height: 45px;
	padding: 0 60px 0 15px;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	border-radius: 3px;
	border: none;
	background: #fff;
	color: #333;
	border-radius: 0;
}
.header .search-form button {
	position: absolute;
	right: 0;
	height: 45px;
	top: 0;
	width: 45px;
	background: transparent;
	border: none;
	color: #3353ea;
	border-radius: 0 3px 3px 0;
	border-radius: 0;
	border-left: 1px solid #eee;
	font-size: 15px;
	color: #333;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.header .search-form button:hover{
	color:#fff;
	background:var(--primary-color);
	border-color:transparent;
}
/* Header Sticky */
.header .header-inner{
	width:100%;
	z-index:999;
}
.header.sticky .all-category{}
.header.sticky .all-category h3{
	cursor:pointer;
	
}
.header.sticky .all-category .main-category{
	opacity:0;
	visibility:hidden;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.header.sticky .all-category:hover .main-category{
	opacity:1;
	visibility:visible;
}
.header.sticky .header-inner .nav li a {
	/* color: #333; */
}
.header.sticky.v3 .header-inner .nav li a {
	color: #fff;
}
.header.sticky .header-inner .nav li:hover a{
	color:#fff;
}
.header.sticky.v2 .header-inner .nav li:hover a{
	color:var(--primary-color);
}
.header.sticky .header-inner .nav li .dropdown li a{
	color:#333;
}
.header.sticky.v2 .header-inner .nav li .dropdown li a{
	color:#333;
}
.header.sticky .header-inner .nav li .dropdown li a:hover{
	color:#fff;
}
.header.sticky .header-inner .nav li.active a {
	color: #fff;
}
.header.sticky .header-inner{
	position:fixed;
	top:0;
	left:0;
	background:#fff;
	animation: fadeInDown 1s both 0.2s;
	-webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	-moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	z-index:999;
}
.header.sticky.v3 .header-inner{
	box-shadow:none;
}
.header.sticky.v3 .navbar-expand-lg .navbar-collapse{
	animation: fadeInDown 1s both 0.2s;
	-webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	-moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
	box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
}
/*======================================
	End Header CSS
========================================*/

/*======================================
   Hero Area CSS
========================================*/ 
.hero-slider {
	background: #fff;
	overflow: hidden;
}
.hero-slider .single-slider {
	height: auto;
	background-image: url('images/slider-image2.jpg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    height: 510px;
}
.hero-slider .text-inner {
	
}
.hero-slider .hero-text {
	padding: 0 30px;
	margin-top:100px;
}
.hero-slider .hero-text h1 {
	line-height: 50px;
	font-size: 47px;
	font-weight: 700;
	color: var(--primary-color);
	margin-bottom: 20px;
}
.hero-slider .hero-text h1 span {
	font-size: 20px;
	display: block;
	margin-bottom: 12px;
	color: #333;
	font-weight: 700;
	line-height: initial;
}
.hero-slider .hero-text p {
	color: #333;
	margin-bottom: 35px;
}
.hero-slider .hero-text .button{
	margin:0;
}
.hero-slider .hero-text .btn {
	color: #fff;
	background: #333;
	padding: 13px 30px;
	line-height: initial;
	border: none;
	height: auto;
	z-index: 0;
}
.hero-slider .hero-text .btn:hover{
	background:var(--primary-color);
	color:#fff;
}
/* Start Hero Area 2 CSS */
.hero-area2{
	position:relative;
}
.hero-area2 .single-slider.overlay:before{
	background:var(--primary-color);
	opacity:0;
	visibility:hidden;
	transform:scale(0.9);
}
.hero-area2 .single-slider.overlay:hover:before{
	opacity:0.9;
	visibility:visible;
	transform:scale(1);
}
.hero-area2 .single-slider{
	height:500px;
	position:relative;
	background-size:cover;
	background-position:center;
	background-repeat:no-repeat;
}
.hero-area2 .single-slider .content{
	position:relative;
}
.hero-area2 .single-slider .content {
	width: 100%;
	padding: 15px;
	z-index: 2;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
	text-align: center;
	padding-top: 120px;
	opacity:0;
	visibility:hidden;
	transform:scale(1.1);
}
.hero-area2 .single-slider:hover .content{
	opacity:1;
	visibility:visible;
	transform:scale(1);
}
.hero-area2 .single-slider .content .sub-title{
	color:#fff;
	text-transform: uppercase;
	font-size:15px;
	font-weight:500;
}
.hero-area2 .single-slider .content .title {
	color: #fff;
	text-transform: uppercase;
	font-size: 24px;
	display: block;
	margin-top: 10px;
	margin-bottom: 10px;
}
.hero-area2 .single-slider .content .des{
	color:#fff;
}
.hero-area2 .single-slider .content .button{}
.hero-area2 .single-slider .content .button .btn {
	padding: 9px 25px;
	border: 2px solid #fff;
	background: transparent;
	color: #fff;
	margin-top: 25px;
}
.hero-area2 .single-slider .content .button .btn:hover{
	background:#fff;
	color:#333;
	border-color:transparent;
}
/* Owl Nav CSS */
.hero-area2 .owl-carousel .owl-nav {
	margin: 0;
    position: absolute;
    top: 50%;
    width: 100%;
	margin-top:-30px;
}
.hero-area2 .owl-carousel .owl-nav div {
	height: 60px;
	width: 40px;
	line-height: 60px;
	text-align: center;
	background: #333;
	color: #fff;
	font-size: 14px;
	position: absolute;
	margin: 0;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	padding: 0;
	border-radius: 0;
}
.hero-area2 .owl-carousel .owl-nav div:hover{
	background:var(--primary-color);
	color:#fff;
}
.hero-area2 .owl-carousel .owl-controls .owl-nav .owl-prev{
	left:0;
}
.hero-area2 .owl-carousel .owl-controls .owl-nav .owl-next{
	right:0;
}
/* Hero Area 3 */
.hero-area3{}
.hero-area3 .big-content{
	background-image: url('https://via.placeholder.com/850x530');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    height: 511px;
	margin-top:30px;
	position:relative;
}
.hero-area3 .big-content .inner {
	position: absolute;
	right: 0;
	top: 50%;
	padding: 0 50px 0 360px;
	transform: translateY(-50%);
}
.hero-area3 .big-content .title {
	font-size: 28px;
	margin-bottom: 20px;
	font-weight: 700;
	text-transform: capitalize;
	line-height: 37px;
}
.hero-area3 .big-content .title span{
	color:var(--primary-color);
}
.hero-area3 .big-content .des{}
.hero-area3 .big-content .button{
	margin-top:40px;
	display:block;
}
.hero-area3 .big-content .button .btn{
	color:#fff;
}

.hero-area3 .small-content{
	height:240px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	margin-top:30px;
	position:relative;
}
.hero-area3 .small-content.first{
	background-image: url('https://via.placeholder.com/450x300');
}
.hero-area3 .small-content.secound{
	background-image: url('https://via.placeholder.com/450x300');
}
.hero-area3 .small-content .inner {
	padding: 30px;
	text-align:right;
	position:absolute;
	right:0;
	bottom:0;
}
.hero-area3 .small-content .title {
	font-size: 18px;
	margin-bottom: 20px;
	font-weight: 600;
	text-transform: capitalize;
}
.hero-area3 .small-content .title span{
	color:var(--primary-color);
}
.hero-area3 .small-content .des{}
.hero-area3 .small-content .button{
	margin-top:10px;
	display:block;
}
.hero-area3 .small-content .button .btn {
	background: transparent;
	padding: 0;
	color: #333;
	border-bottom: 2px solid #333;
	font-size: 13px;
}
.hero-area3 .small-content .button .btn:hover{
	color:var(--primary-color);
	border-color:var(--primary-color);
}
/* Hero Area 4 */
.hero-area4 .big-content{
	
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    height: 510px;
	margin-top:30px;
	position:relative;
}
.hero-area4 .big-content .inner {
	position: absolute;
	right: 0;
	top: 50%;
	padding: 0 80px 0 50px;
	transform: translateY(-50%);
}
.hero-area4 .big-content .title {
	font-size: 32px;
	margin-bottom: 20px;
	font-weight: 700;
	text-transform: capitalize;
	line-height: 35px;
}
.hero-area4 .big-content .title span{
	color:var(--primary-color);
}
.hero-area4 .big-content .des{}
.hero-area4 .big-content .button{
	margin-top:40px;
	display:block;
}
.hero-area4 .big-content .button .btn{
	color:#fff;
}
.hero-area4 .owl-carousel .owl-nav {
	margin: 0;
    position: absolute;
    top: 50%;
    width: 100%;
	margin-top:-20px;
}
.hero-area4 .owl-carousel .owl-nav div {
	height: 40px;
	width: 40px;
	line-height: 40px;
	text-align: center;
	background: #333;
	color: #fff;
	font-size: 14px;
	position: absolute;
	margin: 0;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	padding: 0;
	border-radius: 0;
}
.hero-area4 .owl-carousel .owl-nav div:hover{
	background:var(--primary-color);
	color:#fff;
}
.hero-area4 .owl-carousel .owl-controls .owl-nav .owl-prev{
	left:0;
}
.hero-area4 .owl-carousel .owl-controls .owl-nav .owl-next{
	right:0;
}

/*======================================
   End Hero Area CSS
========================================*/ 

/*======================================
   Start Small Banner CSS
========================================*/ 
.small-banner{
	padding:30px 0;
	padding-bottom:0;
}
.small-banner .single-banner {
	overflow:hidden;
	position:relative;
}
.small-banner .single-banner img{
	height:100%;
	width:100%;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.small-banner .single-banner .content {
	position: absolute;
	left: 0;
	top: 50%;
	transform: translateY(-50%);
	padding-left: 35px;
}
.small-banner .single-banner h3 {
	font-size: 22px;
	font-weight: 700;
	text-transform: capitalize;
	color: #333;
}
.small-banner .single-banner h3 span{
	color:var(--primary-color);
}
.small-banner .single-banner p {
	font-size: 14px;
	color: var(--primary-color);
	font-weight: 500;
	margin-bottom: 5px;
	text-transform: capitalize;
}
.small-banner .single-banner a {
	color: #333;
	margin-top: 22px;
	display: block;
	font-size: 12px;
	font-weight:500;
	display: inline-block;
	text-transform:uppercase;
	border-bottom:2px solid #333;
}
.small-banner .single-banner a:hover{
	color:var(--primary-color);
	border-color:var(--primary-color);
}
/*======================================
   End Small Banner CSS
========================================*/ 

/*======================================
   Start Mid Banner CSS
========================================*/ 
.midium-banner{
	padding:0;
}
.midium-banner .single-banner{
	position:relative;
}
.midium-banner .single-banner img{
	height:100%;
	width:100%;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
}
.midium-banner .single-banner .content {
	padding-left:50px;
	position: absolute;
	left: 0;
	top: 50%;
	transform:translateY(-50%);
}
.midium-banner .single-banner h3 {
	font-size: 27px;
	font-weight: 700;
	text-transform: uppercase;
	color: #333;
	line-height: 30px;
}
.midium-banner .single-banner h3 span{
	color:var(--primary-color);
}
.midium-banner .single-banner p {
	font-size: 13px;
	color: var(--primary-color);
	font-weight: 500;
	margin-bottom: 5px;
	text-transform: uppercase;
}
.midium-banner .single-banner a {
	display: inline-block;
	font-weight: 600;
	text-align: center;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	padding: .375rem .75rem;
	font-size: 13px;
	border-radius: .25rem;
	background: #333;
	color: #fff !important;
	padding: 10px 27px;
	border-radius: 30px;
	margin-top: 25px;
	text-transform: uppercase;
}
.midium-banner .single-banner a:hover{
	background:var(--primary-color);
	color:#fff;
}
/*======================================
   End Mid Banner CSS
========================================*/ 

/*======================================
   Start Most Popular CSS
========================================*/
.pro-tab-viewmore-wrap {
	position: relative;
	text-align: center;
}
.most-popular .section-title{
	margin-bottom:40px;
}
.pro-tab-viewmore-wrap .pro-viewmore {
  position: absolute;
  right: 40px;
  top: 0;
}
.most-popular .single-product{
	margin:50px 15px 0 15px;
}
/* Slider Nav */
.most-popular .owl-nav{
	margin: 0;
    position: absolute;
    top: 50%;
    width: 100%;
	margin-top:-25px;
}
.most-popular .owl-carousel .owl-nav div {
	height: 60px;
	width: 30px;
	line-height: 58px;
	background: #fff;
	color: #333;
	position: absolute;
	margin: 0;
	border-radius: 0;
	font-size: 15px;
	text-align: center;
	-webkit-transition:all 0.4s ease;
	-moz-transition:all 0.4s ease;
	transition:all 0.4s ease;
	box-shadow: 0px 0px 10px #3333331c;
}
.most-popular .owl-carousel .owl-nav div:hover{
	color:#fff;
	background:var(--primary-color);
}
.most-popular .owl-carousel .owl-controls .owl-nav .owl-prev{
	left:0;
}
.most-popular .owl-carousel .owl-controls .owl-nav .owl-next{
	right:0;
}
/*======================================
   End Most Popular CSS
========================================*/

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
op.single .add-to-cart .btn {
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

/*======================================
   End Checkout Form CSS
========================================*/




    </style>
</head>
<body>
	<!-- Header -->
@if(\Session::has('success'))
		<div class="alert alert-success mt-4">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<span>{!! xss_clean(session('success')) !!}</span>
		</div>												
@endif
@if(\Session::has('error'))
		<div class="alert alert-success mt-4">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<span>{!! xss_clean(session('error')) !!}</span>
		</div>												
@endif
<div class="header_searchBox">
	<button id="closesearchBox">X</button>
	<div class="searchBox">
		<form action="{{ url('/shop') }}">
			<input type="text" name="search" id="" >
			<button type="submit" value="search" >search</button>
		</form>

	</div>
  </div>
	 <header class="header">
                <div class="container">
                    <div class="row p-0">
                        <div class="col-12 col-lg-5">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="{{ get_logo() }}" class="img-fluid" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 d-flex align-items-center">
                            <div class="menu">
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}">home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('about')}}">about</a>
                                    </li>
                                    <li>
                                        <a href="{{url('shop')}}">products</a>
                                    </li>
                                    <li>
                                        <a href="{{url('contact')}}">contact</a>
                                    </li>
                                    <li>
                                        <a href="{{route('gift')}}">Gift</a>
                                    </li>
                                    <li>
            
                                        <a href="#" id="opensearchBox">
                                            <i class="bx bx-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        @if(Auth::check())
                                        <a href="{{url('my_account')}}">
                                            <i class="bx bx-user"></i>
                                        </a>
                                        @endif
                                    </li>
                                    <li>
                                    <div class="sinlge-bar shopping" id="mini-cart">
								      @include('theme.default.components.mini-cart')
							        </div>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

	<!--/ End Header -->
	
	@yield('content')	


 <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="logo-area">
                                <a href="{{url('/')}}">
                                    <img src="{{ get_logo() }}" class="img-fluid" alt="">
                                </a>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-official"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h4>Quick Links</h4>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('about')}}">About</a>
                                </li>
                                <li>
                                    <a href="{{url('Products')}}">Products</a>
                                </li>
                            </ul>
                        </div>
                        <!--<div class="col-12 col-lg-2">-->
                        <!--    <h4>Quick links</h4>-->
                        <!--    <ul>-->
                        <!--        <li>-->
                        <!--            <a href="#">lorem ipsum</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a href="#">lorem ipsum</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a href="#">lorem ipsum</a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <div class="col-12 col-lg-3">
                            <h4>help</h4>
                            <ul>
                                <li>
                                    <a href="{{url('contact')}}">Contact</a>
                                </li>
                      
                 
                            </ul>
                        </div>
                        @php
                        $products=App\Entity\Product\Product::take(5)->get();
 
                        @endphp
                        <div class="col-12 col-lg-3">
                            <h4>products</h4>
                            <ul>
                                @foreach($products as $item)
                                    @php
                                     $productsTranslation=App\Entity\Product\ProductTranslation::where('product_id',$item->id)->first();;
                                   @endphp
                                <li>
                                    <a href="{{ url('product/'.$item->slug) }}">{{$productsTranslation->name}}</a>
                                </li>
                                @endforeach
                     
                            </ul>
                        </div>
                        <div class="col-12 col-lg-12 copyright">
                            <div class="row">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <p>@copyright. 2023 All Right Reserved.</p>
                                </div>
                                <div class="col-12 col-lg-6 text-right">
                                    <img src="./assets/images/debit-card.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<!--<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>-->
	<!-- Slicknav JS -->
	<!--<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>-->
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	 Waypoints JS 
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
	<!--<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>-->
	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>
    <script src="{{ asset('public/theme/myweb/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/theme/myweb/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/theme/myweb/assets/js/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/theme/myweb/assets/js/jquery.fancybox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/theme/myweb/assets/js/wow.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/theme/myweb/assets/js/functions.js')}}"></script>
	<!-- Custom JS -->
	@yield('js-script')
</body>
</html>
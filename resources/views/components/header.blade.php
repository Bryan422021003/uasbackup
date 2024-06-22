<!--====================  header area ====================-->
<div class="header-area header-area--default" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #e0f7fa;">
    <!-- Header Bottom Wrap Start -->
    <header class="header-area header-sticky" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #00695c; color: #ffffff;">
        <div class="container-fluid container-fluid--cp-100">
            <div class="row">
                <div class="col-lg-12 d-none d-md-block">
                    <div class="top-logo-area" style="padding: 10px 0;">
                        <div class="logo text-md-center">
                            <a href="{{route('home')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" style="width:30%; max-width:180px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <!-- Phone Number -->
                            <div class="header-right-items content__hidden d-none d-md-block">
                                <span class="phone-number font-lg-p" title="Call us for fast delivery">
                                    <a href="#cfd" style="color: #ffffff; font-size: 18px; text-decoration: none; transition: color 0.3s ease;"><i class="icon-telephone"></i>&nbsp;&nbsp;<small class="text-color-primary"><b>+(62) 85212345678</b></small></a>
                                </span>
                            </div>
                            <!-- Navigation Menu -->
                            <nav class="navigation-menu d-none d-lg-block ms-4">
                                <ul class="justify-content-center" style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center;">
                                    <li style="margin: 0 20px;">
                                        <a href="{{route('home')}}" style="text-decoration: none; color: #ffffff; font-size: 18px; font-weight: 600; text-transform: uppercase; position: relative; padding: 10px 0; transition: color 0.3s ease;"><span>Home</span></a>
                                    </li>
                                    <li style="margin: 0 20px;">
                                        <a href="{{route('plp')}}" style="text-decoration: none; color: #ffffff; font-size: 18px; font-weight: 600; text-transform: uppercase; position: relative; padding: 10px 0; transition: color 0.3s ease;"><span>Shop</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Right Side Icons -->
                        <div class="header-right-side text-end">
                            <div class="header-right-items d-none d-md-block">
                                <a href="#wishlist" class="header-cart" style="text-decoration: none; color: #ffffff; font-size: 18px; margin-left: 20px; position: relative;">
                                    <i class="icon-heart"></i>
                                    <span class="item-counter" style="position: absolute; top: -5px; right: -10px; background-color: #ff4081; color: #fff; border-radius: 50%; padding: 2px 6px; font-size: 12px; font-weight: 700;">3</span>
                                </a>
                            </div>
                            <div class="header-right-items">
                                <a href="#minicart" class="header-cart" style="text-decoration: none; color: #ffffff; font-size: 18px; margin-left: 20px; position: relative;">
                                    <i class="icon-bag2"></i>
                                    <span class="item-counter" style="position: absolute; top: -5px; right: -10px; background-color: #ff4081; color: #fff; border-radius: 50%; padding: 2px 6px; font-size: 12px; font-weight: 700;">3</span>
                                </a>
                            </div>
                            <div class="header-right-items d-none d-md-block">
                                @if(@$_COOKIE['ut'])
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="text-decoration: none; color: #ffffff; font-size: 18px;">
                                            Hello, {{ucwords(substr($_COOKIE['ue'], 0, 3))}}
                                        </a>
                                        <ul class="dropdown-menu" style="background-color: #ffffff; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 10px; border-radius: 4px;">
                                            <li style="list-style: none;">
                                                <a href="#my-profile" style="color: #333; padding: 10px 20px; display: block; text-decoration: none; transition: background-color 0.3s ease;">My Profile</a>
                                            </li>
                                            <li style="list-style: none;">
                                                <a href="#" id="logout-btn" style="color: #333; padding: 10px 20px; display: block; text-decoration: none; transition: background-color 0.3s ease;">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#authModal" style="text-decoration: none; color: #ffffff; font-size: 18px; margin-left: 20px;">
                                        <i class="icon-user"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Bottom Wrap End -->
</div>
<!--====================  End of header area  ====================-->

<div class="header-login-register-wrapper modal fade" id="authModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 8px; padding: 20px;">
            <div class="modal-box-wrapper">
                <div class="helendo-tabs">
                    <ul class="nav" role="tablist">
                        <li class="tab__item nav-item active">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06" role="tab" style="font-size: 24px; font-weight: 700; color: #333;">Login</a>
                        </li>
                        <li class="tab__item nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_list_07" role="tab" style="font-size: 24px; font-weight: 700; color: #333;">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content content-modal-box">
                    <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                        <form class="account-form-box" id="form-login">
                            <h6 class="mb-3" style="font-size: 24px; font-weight: 700; color: #333;">Login your account</h6>
                            <b id="form-login-error" class="text-red"></b>
                            <div class="single-input">
                                <input name="email" type="text" placeholder="Email" required style="border: 1px solid #ddd; padding: 10px 15px; border-radius: 4px; width: 100%; margin-bottom: 15px; transition: border-color 0.3s ease;">
                            </div>
                            <div class="single-input">
                                <input name="password" type="password" placeholder="Password" required style="border: 1px solid #ddd; padding: 10px 15px; border-radius: 4px; width: 100%; margin-bottom: 15px; transition: border-color 0.3s ease;">
                            </div>
                            <div class="checkbox-wrap mt-10">
                                <label class="label-for-checkbox inline mt-15">
                                    <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span style="font-size: 16px; color: #333;">Remember me</span>
                                </label>
                                <a href="#" class="mt-10" style="font-size: 16px; color: #ff4081;">Lost your password?</a>
                            </div>
                            <div class="button-box mt-25">
                                <a href="#" class="btn btn--full btn--black" id="form-login-btn" style="background-color: #ff4081; color: #fff; padding: 10px 20px; border-radius: 4px; text-decoration: none; display: inline-block; transition: background-color 0.3s ease;">Log in</a>
                            </div>
                        </form>
                        <div id="form-login-loading" style="text-align:center; display:none;">
                            <img src="{{asset('assets/images/bg/loading.gif')}}" style="width: 300px;">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                        <form class="account-form-box" id="form-register">
                            <h6 class="mb-6" style="font-size: 24px; font-weight: 700; color: #333;">Register An Account</h6>
                            <b id="form-register-error" class="text-red"></b>
                            <div class="single-input">
                                <input name="name" type="text" placeholder="Name" required style="border: 1px solid #ddd; padding: 10px 15px; border-radius: 4px; width: 100%; margin-bottom: 15px; transition: border-color 0.3s ease;">
                            </div>
                            <div class="single-input">
                                <input name="email" type="text" placeholder="Email Address" required style="border: 1px solid #ddd; padding: 10px 15px; border-radius: 4px; width: 100%; margin-bottom: 15px; transition: border-color 0.3s ease;">
                            </div>
                            <div class="single-input">
                                <input name="password" type="password" placeholder="Password" required style="border: 1px solid #ddd; padding: 10px 15px; border-radius: 4px; width: 100%; margin-bottom: 15px; transition: border-color 0.3s ease;">
                            </div>
                            <div class="single-input">
                                <input name="password_confirmation" type="password" placeholder="Confirm Password" required style="border: 1px solid #ddd; padding: 10px 15px; border-radius: 4px; width: 100%; margin-bottom: 15px; transition: border-color 0.3s ease;">
                            </div>
                            <p class="mt-15" style="font-size: 16px; color: #333;">
                                Your personal data will be used to support your experience throughout this website, 
                                to manage access to your account, and for other purposes described in our 
                                <a href="#" class="text-color-primary" target="_blank" style="color: #ff4081;">privacy policy</a>.
                            </p>
                            <div class="button-box mt-25">
                                <a href="#" class="btn btn--full btn--black" id="form-register-btn" style="background-color: #ff4081; color: #fff; padding: 10px 20px; border-radius: 4px; text-decoration: none; display: inline-block; transition: background-color 0.3s ease;">Register</a>
                            </div>
                        </form>
                        <div id="form-register-loading" style="text-align:center; display:none;">
                            <img src="{{asset('assets/images/bg/loading.gif')}}" style="width: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

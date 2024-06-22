@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal" style="background-color: #f8f9fa; padding-bottom: 50px;">

        <!-- Banner Image Area Start -->
        <div class="banner-photo-area overflow-hidden" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-photo-box">
                            <img src="https://static.vecteezy.com/system/resources/previews/000/662/994/original/vector-colorful-fashion-sale-banner.jpg" alt="Fashion Sale Banner" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Image Area End -->

        <!-- Product Area Start -->
        <div class="hero-box-area" id="product-preview">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Hero Slider Area Start -->
                        <div class="hero-area">
                            <!-- Anda dapat menambahkan slider hero di sini -->
                        </div>
                        <!-- Hero Slider Area End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->

        <!-- About Us Area Start -->
        <div class="about-us-area section-space--ptb_120" style="background-color: #ffffff; border-bottom: 1px solid #e0e0e0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-content_6 text-center">
                            <h2 style="color: #333333;">Heritage Store</h2>
                            <p style="color: #666666; font-size: 16px; line-height: 1.8;">
                                Explore our curated collection of the latest trends and timeless styles, designed to elevate your wardrobe.
                                Our dedicated team is here to help you discover the perfect ensemble, while our inviting atmosphere invites you 
                                to indulge in the art of fashion. Join our fashion-forward community and experience the thrill of 
                                finding your unique style statementk &#10084;
                            </p>
                            <p class="mt-4" style="color: #333333; font-size: 18px;">Find your window to the world! Or, even, <span class="text-color-primary">unlock hidden worlds, one page at a time!</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End -->

        <!-- Join the Community Area Start -->
        <div class="our-member-area section-space--pb_120" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="member--box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4">
                                    <div class="section-title small-mb__40 tablet-mb__40">
                                        <h4 class="section-title" style="color: #333333;">Join the community!</h4>
                                        <p style="color: #666666;">Become one of the members and get a 50% discount</p>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="member-wrap">
                                        <form action="#" class="member--two">
                                            <input class="input-box" type="text" placeholder="Your email address" style="border: 1px solid #e0e0e0; padding: 10px; border-radius: 4px;">
                                            <button class="submit-btn" style="background-color: #ff4081; color: #ffffff; border: none; padding: 10px 20px; border-radius: 4px;"><i class="icon-arrow-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Join the Community Area End -->

        <!-- Our Brand Area Start -->
        <div class="our-brand-area section-space--pb_90" style="background-color: #ffffff;">
            <div class="container">
                <div class="brand-slider-active">
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb1.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb2.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb3.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb4.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb5.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb6.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb7.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb8.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Brand Area End -->

    </div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection

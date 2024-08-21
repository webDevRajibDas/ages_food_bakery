@extends('frontend.layouts.app')

@section('title')
{{ app_name() }}
@endsection

@section('content')

<div role="main" class="main">
     <!-- Carousel Slider section -->
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-8" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(images/slide-corporate-6-1.jpg); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7 text-center">
                                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                    <h1 class="text-color-light font-weight-extra-bold text-12-5 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Chaity Group Corporate</h1>
                                    <p class="text-4-5 text-color-light font-weight-light opacity-7 text-center mb-5" data-plugin-animated-letters="" data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Chaity Group is a full composite garments and textile</p>
                                    <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GEST STARTED NOW!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(images/slide-corporate-2-1.jpg); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7 text-center">
                                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                    <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                            <img src="images/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
                                        </span>
                                        HELLO, THIS IS
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                            <img src="images/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="">
                                        </span>
                                    </h3>
                                    <h1 class="text-color-light font-weight-extra-bold text-12-5 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Chaity Group Corporate</h1>
                                    <p class="text-4-5 text-color-light font-weight-light opacity-7 text-center mb-5" data-plugin-animated-letters="" data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Chaity Group is a full composite garments and textile</p>
                                    <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GEST STARTED NOW!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div>

<!-- Our Concerns section -->
    <section class="section section-primary section-no-border section-height-4 my-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <span class="lead text-color-light opacity-6 text-2 mb-0">LOREM IPSUM DOLOR SIT</span>
                    <h2 class="font-weight-bold line-height-1 text-7 negative-ls-1 mb-3">Our Concerns</h2>
                    <p class="text-color-light opacity-8 text-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipscing elit massa enim. ullam id varius nunc.</p>
                    <p class="text-color-light opacity-8 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
                    
                  
                    <a href="#" class="btn learn_button font-weight-semibold btn-px-5 btn-py-2 text-2 rounded-0">LEARN MORE</a>
                   
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icon-user-following icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-color-light mb-2">Textiles</h4>
                                    <p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icon-layers icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-color-light mb-2">Spinning</h4>
                                    <p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                                <div class="feature-box-icon">
                                    <i class="icon-star icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-color-light mb-2">Garments</h4>
                                    <p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                                <div class="feature-box-icon">
                                    <i class="icon-drop icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-color-light mb-2">Accessories</h4>
                                    <p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                                <div class="feature-box-icon">
                                    <i class="icon-drop icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-color-light mb-2">Restaurant</h4>
                                    <p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                                <div class="feature-box-icon">
                                    <i class="icon-drop icons text-color-light"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-color-light mb-2">Commercial Development</h4>
                                    <p class="text-color-light opacity-8 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-height-3 bg-color-grey section-no-border m-0">
        <div class="container my-2">
            <div class="row">
                <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-normal text-6 mb-5">Our <strong class="font-weight-extra-bold">Clients</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-dark mb-0">
                        <div class="testimonial-author">
                            <img src="images/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                        </div>
                        <blockquote>
                            <p class="text-color-dark mb-0">Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma - which is living with the results of other people’s thinking.</p>
                        </blockquote>
                        <div class="testimonial-author">
                            <p><strong class="font-weight-extra-bold text-color-dark text-4">John Doe</strong></p>
                            <p>Okler</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-dark mb-0">
                        <div class="testimonial-author">
                            <img src="images/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                        </div>
                        <blockquote>
                            <p class="text-color-dark mb-0">Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma - which is living with the results of other people’s thinking.</p>
                        </blockquote>
                        <div class="testimonial-author">
                            <p><strong class="font-weight-extra-bold text-color-dark text-4">John Doe</strong></p>
                            <p>Okler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pt-4 mt-5">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="font-weight-normal text-6">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
            </div>
        </div>
        <div class="row pb-4 mb-5">
            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 0, 'loop': false}">
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-35.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-35.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-35.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-37.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-36.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-37.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-35.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                    <div>
                        <a href="#" aria-label="">
                            <img src="{{asset('img/images/project-38.jpg')}}" class="img-fluid" alt="Portfolio">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="section section-height-3 bg-color-grey section-no-border m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-normal text-6 mb-5">Chaity Group <strong class="font-weight-extra-bold"> News Feed</strong></h2>
                </div>
            </div>
            <div class="row recent-posts pb-4 mb-5">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <article>
                        <div class="row">
                            <div class="col-auto pe-0">
                                <div class="date">
                                    <span class="day text-color-dark font-weight-extra-bold">15</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col ps-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="line-height-5 pe-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
                                <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <article>
                        <div class="row">
                            <div class="col-auto pe-0">
                                <div class="date">
                                    <span class="day text-color-dark font-weight-extra-bold">14</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col ps-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="line-height-5 pe-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
                                <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col-auto pe-0">
                                <div class="date">
                                    <span class="day text-color-dark font-weight-extra-bold">13</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col ps-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="line-height-5 pe-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
                                <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article>
                        <div class="row">
                            <div class="col-auto pe-0">
                                <div class="date">
                                    <span class="day text-color-dark font-weight-extra-bold">12</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col ps-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-dark">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="line-height-5 pe-3 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta.</p>
                                <a href="/" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-dark btn-px-5 btn-py-2 font-weight-bold text-color-light rounded-0 text-2">VIEW BLOG</a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
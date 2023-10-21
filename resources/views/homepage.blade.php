@extends('site.layouts.block')

@section('content')

    <div class="banner">
        <div class="slider-container">
            <!-- slider navigation-->
            <nav id="slider-nav">
                <div class="prev-btn">
                    <p>Previous</p>
                </div>
                <div class="next-btn">
                    <p>Next</p>
                </div>
            </nav>

            <!-- slider slides-->
            <div class="single-item">
                <div class="slide box--1" style="background: url('/images/slider1.jpeg');">
                    <div class="container-fluid d-flex align-items-center h-100">
                        <div class="row">
                            <div class="col-12">
                                <h2><span>Effective</span></h2>
                                <h2><span>Psychological Help</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="three-circles-section">
        <div class="container-fluid align-items-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Warn Welcome to <b>Effective Psychological Help</b> for you to achive positive change in your personal life, relationship and busines.
                </div>
                <div class="col-12 col-md-4">
                    <a href="#" class="rounded-circle">
                        <div class="bg-image" style="background: url('/images/individual-psychology.jpeg');"></div>
                        <div class="v-align">
                            <p><b>Individual Psychology</b></p>
                            <span>learn more</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="#" class="rounded-circle">
                        <div class="bg-image" style="background: url('/images/relationships.jpeg');"></div>
                        <div class="v-align">
                            <p><b>Relationship</b></p>
                            <span>learn more</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="#" class="rounded-circle">
                        <div class="bg-image" style="background: url('/images/business-psychology.jpeg');"></div>
                        <div class="v-align">
                            <p><b>Business Psychology</b></p>
                            <span>learn more</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="image-separator parallax-window" data-bleed="10" data-parallax="scroll" data-image-src="/images/paralax1.jpeg"></div>

    <div class="about-us-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="author-image">
                        <a href="#" class="rounded-circle" style="background: url('https://source.unsplash.com/category/buildings');">
                            <img src="/images/woman.jpg" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="description">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>Testimonials</h2>
                </div>
                <div class="col-12">
                    <div class="list-testimonials">
                        <div class="testimonial-box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="rating" data-rating="5">
                            <span aria-hidden="true">★★★★★</span>
                        </span>
                            <h6>John Doe</h6>
                        </div>
                        <div class="testimonial-box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua aliqua ut labore et dolore magna aliqua.</p>
                            <span class="rating" data-rating="5">
                            <span aria-hidden="true">★★★★★</span>
                        </span>
                            <h6>John Doe</h6>
                        </div>
                        <div class="testimonial-box">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="rating" data-rating="5">
                            <span aria-hidden="true">★★★★★</span>
                        </span>
                            <h6>John Doe</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary">contact us today and find our how can we help you</a>
                </div>
            </div>
        </div>
    </div>

@endsection

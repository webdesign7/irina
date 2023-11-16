@extends('site.layouts.block')

@section('content')

    <div class="banner">
        <div class="slider-container">
            <!-- slider navigation-->
            <nav id="slider-nav">
                <div class="prev-btn">
                    <p> {{__('homepage.previous')}}</p>
                </div>
                <div class="next-btn">
                    <p> {{__('homepage.next')}}</p>
                </div>
            </nav>

            <!-- slider slides-->
            <div class="single-item">
                <div class="slide box--1" style="background: url('/images/slider1.jpeg');">
                    <div class="container-fluid d-flex align-items-center h-100">
                        <div class="row">
                            <div class="col-12">
                                <h2><span>
                                        {!! __('homepage.header-title') !!}
                                    </span>
                                </h2>
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
                    <h2>
                        {{$homepage->description}}
                    </h2>
                </div>


                @foreach($services as $service)

                    <div class="col-12 col-md-4">
                        <a href="{{ route('service', $service->slug) }}" class="rounded-circle">
                            <div class="bg-image" style="background: url({{ $service->cmsImage('thumb') }});"></div>
                            <div class="v-align">
                                <p><b>{{$service->title}}</b></p>
                                <span>
                                    {{__('homepage.learn_more')}}
                                </span>
                            </div>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

    <div class="image-separator parallax-window" data-bleed="10" data-parallax="scroll" data-image-src="/images/paralax1.jpeg"></div>

    <div class="about-us-section on-scroll-image-wrapper" data-aos="" data-aos-once="false" data-aos-delay="0">

        <img class="on-scroll-image" src="/images/leaf-r1.png" style="opacity:0.1" />

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="author-image">
                        <a href="#" class="rounded-circle">
                            <img src="{{ $homepage->cmsImage('about-thumb', 'mobile') }}" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="description">
                        <h2>{{__('homepage.about-title')}}</h2>
                        <p>{{$homepage->about}}</p>
                        <a class="transparent-button" href="{{ route('about') }}">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-section on-scroll-image-wrapper" data-aos="" data-aos-once="false" data-aos-delay="0">

        <img class="on-scroll-image right" src="/images/leaf-r1-white.png" style="opacity:0.2" />

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 heading">
                    <h2>{{__('homepage.testimonials')}}</h2>
                    <p>Healing is a priority. My clients agree.</p>
                </div>
                <div class="col-12">
                    <div class="list-testimonials">

                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-box">
                                <p>{{$testimonial['content']}}</p>
                                <span class="rating" data-rating="5">
                            <span aria-hidden="true">★★★★★</span>
                        </span>
                                <h6>{{$testimonial['author']}}</h6>
                            </div>
                        @endforeach

                    </div>
                </div>

                @include('site.partials.cta')
            </div>
        </div>
    </div>

@endsection

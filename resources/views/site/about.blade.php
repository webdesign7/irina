@section('title', $page->title . ' | ' . TwillAppSettings::getTranslated('seo.seo.title'))
@section('description', '"Effective Psychological Help" is an international boutique consultancy providing professional psychological help in London, Nice and on-line')

@extends('site.layouts.block')

@section('content')


    <style>
        .jumbotron h1 {
            background-color: rgba(0, 0, 0, 0.4);
            line-height: 70px;
            -webkit-box-decoration-break: clone;
            padding: 10px 20px;
            display: inline-block;
            margin: 0 auto;
        }

        .jumbotron {
            background-size: cover;
            background-position: bottom;
            background-image: url('/images/about-bg-4.jpg');
        }

        .jumbotron .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }


        .featurette {
            background-color: #7ca4a2;
        }

        .featurette .left .content {
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }

        .featurette p {
            color: white;
        }

        .featurette-image-bg {
            min-height: 1000px;
            background-size: cover;
            background-position: center;
            background-image: url('/images/irina-1.jpg');
        }

        @media (max-width: 767px) {
            .featurette-image-bg {
                background-position-x: -43px;
                min-height: 720px;
                height: 400px;
            }
        }

    </style>

    <section class="page contact-page">

        <div class="jumbotron text-center">
            <div class="container">
                <h1 class="display-3">{{$page->title}}</h1>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5 mb-5">
            <div class="row">
                <div class="col-12">
                    {!! $page->description !!}
                </div>
            </div>
        </div>


        <div class="row featurette">
            <div class="offset-md-1 col-md-5 left">

                <div class="content">
                    <p>{{__('about.about_me_header')}}</p>
                    <h2 class="featurette-heading mb-3">{{$page->name}}</h2>
                    <p><strong>{{$page->job_title}}</strong></p>
                    <p>{{$page->bio}}</p>
                    <br>

                </div>

            </div>
            <div class="col-md-6 right">
                <div class="featurette-image-bg">
                </div>
            </div>
        </div>


        <div class="col-12">
            @include('site.partials.cta')
        </div>


    </section>
@endsection

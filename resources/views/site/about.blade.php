@extends('site.layouts.block')

@section('content')


    <style>
        .jumbotron {
            background-size: cover;
            background-position: bottom;
            background-image: url('/images/about-bg-1.jpg');
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

        .featurette-image-bg {
            height: 500px;
            background-size: cover;
            background-position: center;
            background-image: url('/images/irina.jpg');
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
                    <h1>{{$page->title}}</h1>
                    <br>
                    {!! $page->description !!}
                </div>
            </div>
        </div>


        <div class="row featurette">
            <div class="offset-md-2 col-md-4 left">

                <div class="content">
                    <p>ABOUT ME</p>
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

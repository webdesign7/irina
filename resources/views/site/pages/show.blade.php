@extends('site.layouts.block')

@section('content')


    <style>
        .jumbotron {
            background-size: cover;
            background-position: center;
            background-image: url('/images/about-bg-3.jpg');
        }

        .overlay {
            height: 500px;
            width: 100vw;
            background: black;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.1);
        }

        .jumbotron .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }


    </style>

    <section class="page service-page">
            <div class="jumbotron text-center mb-2">
                <div class="overlay">
                    <div class="container">
                        <h1 class="display-3">{{$page->title}}</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-2 mt-5 pb-5 mb-5">
                <div class="row">
                    <div class="col-12">
                        <h2>{{$page->title}}</h2>
                        <br>
                        {!! $page->description !!}
                    </div>
                </div>
            </div>

            <div class="col-12">
                @include('site.partials.cta')
            </div>

    </section>
@endsection

@extends('site.layouts.block')

@section('content')

    <style>
        .jumbotron {
            height: 300px;
            background-size: cover;
            background-image: url({{$service->cmsImage('thumb')}});
        }
        .jumbotron .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }
    </style>

    <div class="jumbotron text-center mb-5">
        <div class="container">
            <h1 class="display-3">{{$service->title}}</h1>
        </div>
    </div>

    <div class="container-fluid pt-5 mt-5 pb-5 mb-5">
        <div class="row">
            <div class="col-12">
                <br>
                {!! $service->description !!}
            </div>

            <div class="col-12">
                @include('site.partials.cta')
            </div>


        </div>
    </div>
@endsection

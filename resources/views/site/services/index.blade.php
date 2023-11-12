@extends('site.layouts.block')

@section('content')

    <style>
        .jumbotron {
            height: 300px;
            background-size: cover;
            background-image: url('/images/bg2.jpg');
        }

        .jumbotron .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }


        .rounded-circle, .card-img-top {
            height: 80px;
            width: 80px;
        }

        .rounded-circle {
            right: 5px;
        }

        .card-link {
            color: black;
            font-size: smaller;
        }

        .card-text {
            color: dimgray;
        }

        .card {
            border: none;
            background: none;
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
        }

        .featurette-image-bg {
            height: 500px;
            background-size: cover;
            background-image: url(https://wellmont.qodeinteractive.com/wp-content/uploads/2022/11/services-title-img.jpg);
        }

    </style>


    <section class="page">

        <div class="jumbotron text-center mb-5">
            <div class="container">
                <h1 class="display-3">{{__('services.title')}}</h1>
            </div>
        </div>


        <div class="container mb-5">
            <div class="row">

                <div class="text-center mb-5">
                    <p class="text-uppercase">{{__('services.title')}}</p>
                    <h2>{{__('services.subtitle')}}</h2>
                </div>

                @if (!empty($services))
                    @foreach ($services as $service)

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 position-relative">

                                            <div class="rounded-circle overflow-hidden position-absolute">
                                                <img class="card-img-top img-cover"
                                                     src="{{ $service->cmsImage('thumb') }}">
                                            </div>

                                        </div>
                                        <div class="col-sm-8">
                                            <h4 class="card-title">{{$service->title}}</h4>
                                            <p class="card-text">{{$service->short_description}}</p>
                                            <a href="{{ route('service', $service->slug) }}" class="card-link">
                                                {{__('services.read_more')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>{{ __('news.no_news') }}</p>
                @endif


            </div>
        </div>



        <div class="row featurette">
            <div class="offset-md-2 col-md-4 left">

                <div class="content">
                    <h2 class="featurette-heading mb-3">Increase your relationship capacity in therapy with professionals</h2>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                    <br>
                    <div class="row">

                        <div class="col">
                            <ul>
                                <li>Individual psychology.</li>
                                <li>Relationship counselling.</li>
                                <li>Eating disorders</li>
                            </ul>
                        </div>

                        <div class="col">
                            <ul>
                                <li>Dependency and codependency</li>
                                <li>Clinical hypnosis</li>
                                <li>Business psychology</li>
                            </ul>
                        </div>

                    </div>

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

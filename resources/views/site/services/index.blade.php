@extends('site.layouts.block')

@section('content')

    <style>
        h1 {
            background-color: rgba(0, 0, 0, 0.3);
            line-height: 70px;
            -webkit-box-decoration-break: clone;
            padding: 10px 20px;
            display: inline-block;
            margin: 0 auto;
        }

        .jumbotron {
            background-size: cover;
            background-image: url('/images/services-bg-3.jpg');
        }

        .jumbotron .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
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
            font-size: 1.2em;
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
            height: 100%;
            background-size: cover;
            background-image: url('/images/about-me-sitting.jpg');
        }

        @media (max-width: 767px) {
            .featurette-image-bg {
                height: 500px;
            }
        }


    </style>


    <section class="page">

        <div class="jumbotron text-center mb-5">
            <div class="container">
                <h1 class="display-3">{{__('services.title')}}</h1>
            </div>
        </div>


        <div class="container mb-5 pb-3 pt-3">
            <div class="row">

                <div class="text-center mb-5">
                    <p class="text-uppercase">{{__('services.title')}}</p>
                    <h2>{{__('services.subtitle')}}</h2>
                </div>

                @if (!empty($services))
                    @foreach ($services as $service)

                        <div class="col-sm-4 service-box">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 position-relative">

                                            <div class="rounded-circle overflow-hidden position-absolute">
                                                <img class="card-img-top img-cover"
                                                     src="{{ $service->cmsImage('thumb','mobile') }}">
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
            <div class="offset-md-1 col-md-5 left">

                <div class="content p-4">
                    <h2 class="featurette-heading mb-5">
                        {{$servicePage->block_title}}
                    </h2>
                    <p>
                        {{$servicePage->block_description}}
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            @php
                                $currentLocale = App::currentLocale();
                            @endphp
                            <ul>
                            @foreach($servicePage->services as $item)
                                <li>
                                    @if (isset($item['title'][$currentLocale]))
                                        {{ $item['title'][$currentLocale] }}
                                    @else
                                        {{ $item['title']['en'] }}
                                    @endif
                                </li>
                            @endforeach
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

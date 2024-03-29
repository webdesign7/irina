@section('title', $page->title . ' | ' . TwillAppSettings::getTranslated('seo.seo.title'))
@section('description', __('contact.contact_info') .' | '. TwillAppSettings::getTranslated('seo.seo.title'))

@extends('site.layouts.block')

@section('content')

    <style>

        h5 {
            font-weight: bold;
        }

        p {
            color: dimgray;
        }

        .jumbotron h1 {
            background-color: rgba(0, 0, 0, 0.4);
            line-height: 70px;
            -webkit-box-decoration-break: clone;
            padding: 10px 20px;
            display: inline-block;
            margin: 0 auto;
        }

        .jumbotron {
            background-image: url('/images/contact-bg.jpg');
            background-position: bottom center;
        }

        .jumbotron .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form input[type='text'],.contact-form input[type='email'], .contact-form select {
            padding:10px;
            border-radius: 0;
            border: none;
        }

        .contact-form textarea {
            border-radius: 0;
            border: none;
        }

        .card {
            border: none;
            background: none;
        }

        .card-text {
            color: dimgray;
        }



    </style>

    <section class="page">

        <div class="jumbotron text-center">
            <div class="container">
                <h1 class="display-3">{{$page->title}}</h1>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5 ">
            <div class="row">





                <div class="col-12">

                    <div class="row justify-content-start">

                            <div class="col-md-4">
                                <div class="mb-5 row">


                                        <div class="card text-center" >
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">{{__('contact.contact_info')}}</h5>
                                                <div class="card-text">
                                                    <ul class="list-unstyled">
                                                        @if(TwillAppSettings::get('contact.contact-details.address'))
                                                            <li>A: {{TwillAppSettings::get('contact.contact-details.address')}}</li>
                                                        @endif
                                                        @if(TwillAppSettings::get('contact.contact-details.phone'))
                                                            <li>P: {{TwillAppSettings::get('contact.contact-details.phone')}}</li>
                                                        @endif
                                                        <li>E: {{TwillAppSettings::get('contact.contact-details.email')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">{{__('contact.follow_us')}}</h5>
                                                <div class="card-text">
                                                    <ul class="list-inline">

                                                        @if(TwillAppSettings::get('contact.contact-details.social-media-links'))
                                                            @foreach(TwillAppSettings::get('contact.contact-details.social-media-links') as $item)
                                                                <li class="list-inline-item">
                                                                    <a  target="_blank " href="{{$item->content['link']}}"
                                                                        class="fa fa-md fa-{{$item->content['platform']}}"></a>
                                                                </li>
                                                            @endforeach
                                                        @endif

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="text-center mb-5">
                                    <h5 class="text-uppercase">{{__('contact.contact') }}</h5>
                                    <p >{{__('contact.contact_h2')}}</p>
                                </div>
                                <form class="contact-form mb-5" action="https://api.web3forms.com/submit" method="POST">

                                    <input type="hidden" name="access_key" value="94a98dd3-261c-4c4e-8fcb-85df9ab05288">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="name" required type="text" class="form-control" id="full-name"
                                                       placeholder="{{__('contact.form.placeholder-name')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" required type="email" class="form-control" id="exampleInputEmail1"
                                                       placeholder="{{__('contact.form.placeholder-email')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <select name="interested_service" class="form-control">
                                                    <option value="" disabled selected>
                                                        {{__('contact.form.select-service-placeholder')}}
                                                    </option>

                                                    @foreach($services as $service);
                                                        <option value="{{$service->title}}">{{$service->title}}</option>
                                                    @endforeach


                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input value="yes" name="15min-consultation" class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        {{__('contact.form.15-m-consultation')}}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <textarea
                                        rows="6" cols="50"
                                        placeholder="{{__('contact.form.placeholder-text')}}"
                                        name="message" required class="form-control" id="message" ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="h-captcha" data-captcha="true"></div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary contact-cta mt-1 mb-1" type="submit">
                                            {{__('contact.form.submit-button')}}
                                        </button>
                                    </div>
                                </form>

                            </div>
                    </div>

                </div>

                    <script src="https://web3forms.com/client/script.js" async defer></script>

                </div>
            </div>
    </section>


@endsection

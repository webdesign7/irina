@extends('site.layouts.block')

@section('content')

    <style>
        .jumbotron {
            height: 400px;
            background-size: cover;
            background-image: url('/images/bg3.jpg');
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
                                                <h5 class="card-title">{{__('contact.contact_info')}}</h5>
                                                <div class="card-text">
                                                    <ul class="list-unstyled">
                                                        <li>A: {{TwillAppSettings::get('contact.contact-details.address')}}</li>
                                                        <li>P: {{TwillAppSettings::get('contact.contact-details.phone')}}</li>
                                                        <li>E: {{TwillAppSettings::get('contact.contact-details.email')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h5 class="card-title">{{__('contact.work_time')}}</h5>
                                                <div class="card-text">
                                                    <ul class="list-unstyled">
                                                        <li>{{__('contact.work_days')}}: 09:00 – 20:00</li>
                                                        <li>{{__('contact.saturday')}}: 10:00 – 18:00</li>
                                                        <li>{{__('contact.sunday')}}: {{__('contact.closed')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="card text-center">
                                            <div class="card-body">
                                                <h5 class="card-title">{{__('contact.follow_us')}}</h5>
                                                <div class="card-text">
                                                    <ul class="list-inline">

                                                        @foreach(TwillAppSettings::get('contact.contact-details.social-media-links') as $item)
                                                            <li class="list-inline-item">
                                                                <a  target="_blank " href="{{$item->content['link']}}"
                                                                    class="fa fa-md fa-{{$item->content['platform']}}"></a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="text-center mb-5">
                                    <p class="text-uppercase">{{__('contact.contact') }}</p>
                                    <h2>{{__('contact.contact_h2')}}</h2>
                                </div>
                                <form class="contact-form mb-5" action="https://api.web3forms.com/submit" method="POST">

                                    <input type="hidden" name="access_key" value="8fd55e58-785d-4dd5-9f5f-1d6a312ce2e3">

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                                       placeholder="{{__('contact.form.placeholder-email')}}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input name="name" type="text" class="form-control" id="full-name"
                                                       placeholder="{{__('contact.form.placeholder-name')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <select name="interested_service" class="form-control">
                                                    <option value="">Service you're interested</option>
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

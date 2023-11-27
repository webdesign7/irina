<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?v">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/flagpack@1.0.5/dist/flagpack.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cosminlazar.com/Webdesign7/eph.com/css/style.css?v=1" />
    <link type="text/css" rel="stylesheet" href="/css/custom.css?v=1" />

    <title>{{TwillAppSettings::getTranslated('seo.seo.title')}}</title>
</head>
<body class="navbar-fixed">


<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img src="/images/logo-recatngular.png" alt=""/>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <!-- <span class="toggler-icon middle-bar"></span> -->
                <span class="toggler-icon bottom-bar"></span>
            </button>




            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item"><a href="/" class="nav-link @if(Route::is('home') ) active @endif" aria-current="page">{{__('homepage.navigation.home')}}</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link @if(Route::is('about') ) active @endif">{{__('homepage.navigation.about')}}</a></li>
                    <li class="nav-item"><a href="{{route('services')}}" class="nav-link @if(Route::is('services') ) active @endif">{{__('homepage.navigation.services')}}</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link @if(Route::is('contact') ) active @endif">{{__('homepage.navigation.contact')}}</a></li>
                    <li class="nav-item ms-md-4">

                        <ul class="languages">
                            @php $currentLocale = app()->currentLocale() @endphp
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                   class="@if($currentLocale === $localeCode) active @endif">
                                    @if($localeCode === 'en')
                                        <span class="fp fp-rounded gb-eng"></span>
                                    @endif

                                    @if($localeCode === 'ru')
                                        <span class="fp fp-rounded ru"></span>
                                    @endif
                                    <p>{{ __('homepage.lang.'. $properties['name']) }}</p>
                                </a>
                            </li>
                            @endforeach

                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


@yield('content')


<div class="image-separator parallax-window" data-bleed="10" data-parallax="scroll"data-image-src="/images/paralax1.jpeg"></div>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="footer-brand">
                    <img src="/images/logo-square.png" alt=""/>
                </a>
            </div>
            <div class="col-md-3">
                <h5>{{__('homepage.footer.contact')}}</h5>
                <ul>
                    <li><a href="mailto:{{TwillAppSettings::get('contact.contact-details.email')}}">
                            {{TwillAppSettings::get('contact.contact-details.email')}}
                        </a></li>
                    <li><a href="tel:{{TwillAppSettings::get('contact.contact-details.phone')}}">{{TwillAppSettings::get('contact.contact-details.phone')}}</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>{{__('homepage.footer.follow')}}</h5>
                <ul class="list-inline">
                    @foreach(TwillAppSettings::get('contact.contact-details.social-media-links') as $item)
                        <li class="list-inline-item">
                            <a  target="_blank " href="{{$item->content['link']}}"
                                class="fa fa-md fa-{{$item->content['platform']}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <h5>{{__('homepage.footer.site_navigation')}}</h5>
                <ul>
                    <li><a href="{{route('home')}}">{{__('homepage.navigation.home')}}</a></li>
                    <li><a href="{{route('about')}}">{{__('homepage.navigation.about')}}</a></li>
                    <li><a href="{{route('services')}}">{{__('homepage.navigation.services')}}</a></li>
                    <li><a href="{{route('contact')}}">{{__('homepage.navigation.contact')}}</a></li>
                    <li><a href="{{route('page', \App\Models\Page::find(1)->slug)}}">{{__('homepage.navigation.terms')}}</a></li>
                    <li>

                        <ul class="languages list-inline">
                            @php $currentLocale = app()->currentLocale() @endphp
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="list-inline-item">
                                    <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                       class="@if($currentLocale === $localeCode) active @endif">
                                        @if($localeCode === 'en')
                                            <span class="fp fp-rounded gb-eng"></span>
                                        @endif

                                        @if($localeCode === 'ru')
                                            <span class="fp fp-rounded ru"></span>
                                        @endif
                                    </a>
                                </li>
                            @endforeach

                        </ul>

                    </li>

                </ul>
            </div>
        </div>
        <div class="row">

            <div class="col text-center pt-5 copy-text">
                <p><small>{{__('homepage.footer.art-by')}}<br>
                        {{__('homepage.footer.copyright')}} &copy; @php echo date('Y'); @endphp {{__('homepage.footer.all-rights')}}</small></p>
            </div>

        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cosminlazar.com/Webdesign7/eph.com/js/scripts.min.js?v=1"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>



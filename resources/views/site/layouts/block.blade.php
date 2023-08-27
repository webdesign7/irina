<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>#madewithtwill website</title>
</head>
<body>

<header style="border: 1px solid red">
    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a
                    rel="alternate"
                    hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                >
                    {{ strtoupper($localeCode) }}
                </a>
            </li>
        @endforeach
    </ul>

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About us</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</header>

<div style="border: 1px solid blue; padding: 20px">
    @yield('content')
</div>

<footer style="border: 1px solid green">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About us</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</footer>


</body>
</html>

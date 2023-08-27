@extends('site.layouts.block')

@section('content')

    <h1>Services</h1>

    @if ($services->isNotEmpty())
        <ul>
            @foreach ($services as $service)
                <li>
                    <a href="{{ route('service', $service->slug) }}">{{ $service->title }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>{{ __('news.no_news') }}</p>
    @endif


@endsection

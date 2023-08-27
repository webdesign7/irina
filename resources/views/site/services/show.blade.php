@extends('site.layouts.block')

@section('content')

    {{ $item->title }}
    <br />
    {{ $item->description }}

@endsection

@extends('_layouts.master')
@section('offset', 'pt-32 pb-16')
@section('body')

    <h1 class="text-xl">{{ $page->title }}</h1>
    <div class="text-sm">By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</div>
        <div class="mt-4 content">
            @yield('content')
        </div>



@endsection

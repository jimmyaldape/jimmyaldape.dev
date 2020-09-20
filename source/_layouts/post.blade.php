@extends('_layouts.master')
@section('offset', 'pt-32 pb-16')
@section('body')

    <article class="post">
    <h1 class="text-xl">{{ $page->title }}</h1>
    <div class="text-xs text-gray-500">By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</div>
        <div class="mt-4">
            @yield('content')
        </div>
    </article>
@endsection

@extends('_layouts.master')
@section('offset', 'pt-32 pb-16')
@section('body')

    <article class="post">
        <section class="w-4/5 lg:w-3/5 mx-auto mb-10">
            <h2>{{ $page->title }}</h2>
            <div class="author">by {{ $page->author }} • {{ date('F j, Y', $page->date) }}</div>
            <div class="content">
                @yield('content')
            </div>
        </section>
    </article>
    <div class="w-4/5 lg:w-3/5 mx-auto text-gray-400">
        If you like what you read follow me on twitter at <a href="https://www.twitter.com/jimmyaldape" title="Jimmy Aldape on Twitter">@jimmyaldape</a>.
    </div>
@endsection

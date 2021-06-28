@extends('_layouts.master')
@section('custom_script')
    @if($page->goal_code)
    <script>
        window.addEventListener('load', (event) => {
            window.fathom.trackGoal('{{$page->goal_code}}', 0);
        });
    </script>
    @endif
@endsection
@section('offset', '')
@section('body')
    <div class="content mx-auto text-left max-w-4xl">
        <h2 class="text-2xl uppercase text-gray-600 text-center mb-10">Blog</h2>
        <article class="post">
            <section class="mb-10">
                <h2>{{ $page->title }}</h2>
                <div class="author">by {{ $page->author }} • {{ date('F j, Y', $page->date) }}</div>
                <div class="content">
                    @yield('content')
                </div>
            </section>
        </article>

        <div class="text-gray-400">
            If you like what you read follow me on twitter at <a href="https://www.twitter.com/jimmyaldape" title="Jimmy Aldape on Twitter">@jimmyaldape</a>.
        </div>
    </div>
@endsection

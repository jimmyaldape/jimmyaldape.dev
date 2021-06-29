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
        <article class="post">
                <div class="mb-8">
                    <h1 class="text-3xl mb-4">{{ $page->title }}</h1>
                    <p>Posted on {{ date('F j, Y', $page->date) }}</p>
                </div>
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

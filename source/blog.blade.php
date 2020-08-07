@extends('_layouts.master')

@section('body')
    <div class="flex flex-col">
        <p>Total of {{ $posts->count() }} posts</p>

        <ul class="mt-8">
            @foreach ($posts as $post)
                <li class="p-4"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>


@endsection

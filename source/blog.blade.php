@extends('_layouts.master')

@section('body')
    <div class="min-w-screen min-h-screen flex items-center justify-center">
        <ul class="">
            @foreach ($posts as $post)
                <li class="p-4">
                    <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection

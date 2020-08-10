@extends('_layouts.master')

@section('body')
    <div class="min-w-screen min-h-screen flex items-center justify-center">
        <ul class="">
            @foreach ($posts as $post)
                <li class="p-4">
                    <a href="{{ $post->getPath() }}">{{ $post->title }}<br>
                    <span class="text-xs text-gray-400">{{ date('F j, Y', $post->date) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

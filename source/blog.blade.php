@extends('_layouts.master')

@section('body')
    <div class="min-w-screen min-h-screen flex flex-col items-center justify-center">
        <p class="mb-8 p-4">
            Hello. My name is Jimmy. Welcome to my blog. I am software engineer who loves to work with the TALL stack - Tailwind CSS, AlpineJS, Laravel, and Livewire. Though I use VueJS and ReactJS quite a bit. Follow along with me as I go through this continuous learning journey. I will try my best to document lessons I learn along the way. If you like what you read, dont forget to follow me on twitter <a href="https://twitter.com/jimmyaldape" title="follow me on twitter">@jimmyaldape</a>. Please and Thank you.
        </p>
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

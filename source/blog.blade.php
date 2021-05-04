@extends('_layouts.master')
@section('offset', 'pt-40 pb-16')
@section('body')
    <div class="content  flex flex-col items-center justify-center">
        <h2 class="text-2xl uppercase text-gray-600 text-center mb-10">Blog</h2>
        @foreach ($posts as $post)
                <section class="w-full">
                    <div class="pb-10 w-4/5 lg:w-3/5 mx-auto">
                        <div class="preview-thumbnail">

                        </div>
                        <div class="preview">
                            <div>
                                <a class="title text-3xl" href="{{ $post->getPath() }}">{{ $post->title }}</a>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">{{ date('F j, Y', $post->date) }}</span>
                            </div>
                            <div class="snippet">
                                {{ $post->snippet }}
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
    </div>
@endsection

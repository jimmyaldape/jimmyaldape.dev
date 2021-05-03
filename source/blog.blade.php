@extends('_layouts.master')

@section('body')
    <div class="content min-w-screen min-h-screen flex flex-col items-center justify-center">
        @foreach ($posts as $post)
                <section class="w-full">
                    <div class="pb-10 w-4/5 lg:w-3/5 mx-auto">
                        <div class="preview-thumbnail">

                        </div>
                        <div class="preview">
                            <div>
                                <a class="text-3xl text-bold" href="{{ $post->getPath() }}">{{ $post->title }}</a>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">{{ date('F j, Y', $post->date) }}</span>
                            </div>
                            <div class="mt-4">
                                {{ $post->snippet }}
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
    </div>
@endsection

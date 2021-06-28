@extends('_layouts.master')
@section('custom_script')
    <script>
        window.addEventListener('load', (event) => {
            window.fathom.trackGoal('PDFEXPCS', 0);
        });
    </script>
@endsection
@section('offset', '')
@section('body')
    <div class="content flex flex-col mx-auto max-w-4xl">
        <h2 class="text-2xl uppercase text-gray-600 text-center mb-10">Blog</h2>
        @foreach ($posts as $post)
            <section class="w-full">
                <div class="mb-20">
                    <div class="preview-thumbnail">

                    </div>
                    <div class="preview text-left">
                        <div>
                            <a class="title text-2xl lg:text-3xl" href="{{ $post->getPath() }}">{{ $post->title }}</a>
                        </div>
                        <div>
                            <span class="text-xs text-gray-400">{{ date('F j, Y', $post->date) }}</span>
                        </div>
                        <div class="snippet">
                            {{ $post->snippet }}
                        </div>
                        <div>
                            <p><a href="{{ $post->getPath() }}">Read More</a></p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection


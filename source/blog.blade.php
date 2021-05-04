@extends('_layouts.master')
@section('custom_script')
    <script>
        window.addEventListener('load', (event) => {
            window.fathom.trackGoal('PDFEXPCS', 0);
        });
    </script>
@endsection
@section('offset', 'pt-40 pb-16')
@section('body')
    <div class="content  flex flex-col items-center justify-center">
        <h2 class="text-2xl uppercase text-gray-600 text-center mb-10">Blog</h2>
        @foreach ($posts as $post)
                <section class="w-full">
                    <div class="pb-20 w-4/5 lg:w-3/5 mx-auto">
                        <div class="preview-thumbnail">

                        </div>
                        <div class="preview">
                            <div>
                                <a class="title text-2xl lg:text-3xl" href="{{ $post->getPath() }}">{{ $post->title }}</a>
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


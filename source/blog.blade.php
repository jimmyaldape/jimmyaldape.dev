---
title: Jimmy Aldape's Blog
description: Latest articles by Jimmy Aldape who is an experienced software engineer who focuses on building high performance scalable web applications.
---
@extends('_layouts.master')
@section('custom_script')
    <script>
        window.addEventListener('load', (event) => {
            window.fathom.trackGoal('PDFEXPCS', 0);
        });
    </script>
@endsection
@section('title', 'Blog | ')
@section('section-title')
    <div class="py-8 md:py-16 text-3xl md:text-5xl">
        <div class="">Blog</div>
    </div>

@endsection

@section('offset', '')
@section('body')
    <div class="content flex flex-col mx-auto max-w-4xl px-6">
        <h2 class="font-bold mb-12 text-gray-500 text-xl uppercase">
            Articles
        </h2>
        @foreach ($articles as $article)
            <section class="w-full">
                <div class="mb-12">
                    <div class="preview-thumbnail">

                    </div>
                    <div class="preview text-left">
                        <div>
                            <span class="text-sm text-gray-500 font-bold">{{date('F j, Y', $article->date) }}</span>
                        </div>
                        <div class="mb-2">
                            <a class="font-bold" href="{{ $article->getPath() }}">
                                <h3 class="text-2xl lg:text-3xl">{{ $article->title }}</h3>
                            </a>
                        </div>
                        <div class="leading-tight">
                            {{ $article->excerpt(120) }}
                        </div>
                    </div>
                </div>
            </section>
        @endforeach

    </div>
@endsection


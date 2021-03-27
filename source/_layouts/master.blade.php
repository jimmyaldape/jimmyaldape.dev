<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ isset($page->title) ? $page->title . ' | ' : '' }}Jimmy Aldape | Software Engineer</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        @include('_partials.analytics')
</head>
<body class="min-w-screen min-h-screen text-white bg-gray-800 relative">
@if($page->analytics->enabled)
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7MM873" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
<header class="absolute top-0 flex justify-between w-full p-10 pb-0 z-50">
    <div class="flex">
        <a href="/">
            <svg class="fill-current h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.23 600.24"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M208.92,330.16c-13.93,38.4-34.57,79.44-53.77,79.44-7,0-11.28-4.56-11.28-13.68,0-7.44,3.12-16.8,12.24-27.12C168.35,354.64,185.63,341,208.92,330.16Z"/><path class="cls-1" d="M300.12,0C134.37,0,0,134.37,0,300.12S134.37,600.24,300.12,600.24,600.23,465.87,600.23,300.12,465.87,0,300.12,0ZM257.88,316.48c-8.16.24-17.76,2.4-27.6,5.76-2.88,7-5.53,14.4-8.16,21.84-14.89,40.56-37.69,76.8-64.57,76.8-15.36,0-25-13.92-25-29.76,0-10.32,4.32-19.68,15.12-31.2,13.68-14.16,33.12-27.12,64.56-39.12l1.44-3.84c11.29-32.4,19.21-51.13,29.29-70.81,11.28-21.84,23.28-35.28,28.8-35.28,4.32-.24,10.8,6.24,10.8,9.12,0,1.68-1.2,2.88-4.32,7-17.52,23.52-31.44,53.05-44.88,86.89a101.64,101.64,0,0,1,18.72-3.12C257.64,310.48,259.08,313.36,257.88,316.48Zm179,13.68c-6.72,11-24.72,31-40.8,31-13.2,0-23.52-8.16-23.52-24a58.88,58.88,0,0,1,1-11c-13.2,15.36-38.4,47.28-65.52,47.28-19.93,0-37-11.52-37-43.44,0-55.21,62.41-122.17,115.21-122.17,23.76,0,37,13,37,31.68,0,19.2-12.24,35.28-25.44,35.28-4.56,0-8.16-2.16-8.16-4.08,0-.72.72-1.44,2.64-2.88,9.12-6,21.6-19,21.6-33.36,0-10.08-6.72-16.08-20.16-16.08-48,0-103.69,65.52-103.69,119.53,0,18.24,7.44,26.64,19.68,26.64,18,0,40.81-21.36,65.53-53.28C394,287,400,283.83,404,283.6c2.4-.25,3.6,1.19,3.6,2.4.24,1.44-4.8,6.48-8.88,14.4-5.52,9.6-8.64,22.8-8.64,36.72,0,10.56,5.76,14.64,12.72,14.64,11.76,0,26.64-17.28,31.44-24,1.44-2.16,2.16-2.4,2.88-2.4a1.38,1.38,0,0,1,1.44,1.44C438.6,327.76,437.64,329,436.92,330.16Z"/></g></g></svg>
        </a>
    </div>
    @include('_partials.navigation')
</header>
<main class="w-4/5 lg:w-3/5 mx-auto @yield('offset') ">
    @yield('body')
</main>
@include('_partials.footer')
</body>
</html>

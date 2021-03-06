<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="text-white text-base">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <title>{{ $page->title ? $page->title . ' | ' : '' }} jimmyaldape.dev</title>
        <meta name="description" content="{{ $page->description }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@jimmyaldape">
        <meta name="twitter:creator" content="@jimmyaldape">
        <meta name="twitter:title" content="{{ $page->title}}">
        <meta name="twitter:description" content="{{ $page->description }}">
        <meta name="twitter:image" content="{{ $page->twitter_image ?? 'https://www.jimmyaldape.dev/assets/images/twitter_generic.jpg' }}">

        <meta property="og:site_name" content="Jimmy Aldape">
        <meta property="og:locale" content="en_US">
        <meta property="og:url" content="https://www.jimmaldape.dev{{ $page->getUrl() }}">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:image" content="{{ $page->twitter_image ?? 'https://www.jimmyaldape.dev/assets/images/twitter_generic.jpg' }}">
        <meta property="og:type" content="website">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail:100,300,300italic,400,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,300italic,400,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        @include('_partials.analytics')
</head>
<body class="min-h-screen bg-gray-900">
<div class="flex flex-col min-h-screen">
    <header class="block w-full z-50 ">
        <div class="max-w-6xl p-4 mx-auto text-lg">
            <div class="flex justify-between flex-wrap">
                <a class="logo mb-5" href="/" title="jimmyaldape.dev">
                    <svg class="fill-current h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.23 600.24"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M208.92,330.16c-13.93,38.4-34.57,79.44-53.77,79.44-7,0-11.28-4.56-11.28-13.68,0-7.44,3.12-16.8,12.24-27.12C168.35,354.64,185.63,341,208.92,330.16Z"/><path class="cls-1" d="M300.12,0C134.37,0,0,134.37,0,300.12S134.37,600.24,300.12,600.24,600.23,465.87,600.23,300.12,465.87,0,300.12,0ZM257.88,316.48c-8.16.24-17.76,2.4-27.6,5.76-2.88,7-5.53,14.4-8.16,21.84-14.89,40.56-37.69,76.8-64.57,76.8-15.36,0-25-13.92-25-29.76,0-10.32,4.32-19.68,15.12-31.2,13.68-14.16,33.12-27.12,64.56-39.12l1.44-3.84c11.29-32.4,19.21-51.13,29.29-70.81,11.28-21.84,23.28-35.28,28.8-35.28,4.32-.24,10.8,6.24,10.8,9.12,0,1.68-1.2,2.88-4.32,7-17.52,23.52-31.44,53.05-44.88,86.89a101.64,101.64,0,0,1,18.72-3.12C257.64,310.48,259.08,313.36,257.88,316.48Zm179,13.68c-6.72,11-24.72,31-40.8,31-13.2,0-23.52-8.16-23.52-24a58.88,58.88,0,0,1,1-11c-13.2,15.36-38.4,47.28-65.52,47.28-19.93,0-37-11.52-37-43.44,0-55.21,62.41-122.17,115.21-122.17,23.76,0,37,13,37,31.68,0,19.2-12.24,35.28-25.44,35.28-4.56,0-8.16-2.16-8.16-4.08,0-.72.72-1.44,2.64-2.88,9.12-6,21.6-19,21.6-33.36,0-10.08-6.72-16.08-20.16-16.08-48,0-103.69,65.52-103.69,119.53,0,18.24,7.44,26.64,19.68,26.64,18,0,40.81-21.36,65.53-53.28C394,287,400,283.83,404,283.6c2.4-.25,3.6,1.19,3.6,2.4.24,1.44-4.8,6.48-8.88,14.4-5.52,9.6-8.64,22.8-8.64,36.72,0,10.56,5.76,14.64,12.72,14.64,11.76,0,26.64-17.28,31.44-24,1.44-2.16,2.16-2.4,2.88-2.4a1.38,1.38,0,0,1,1.44,1.44C438.6,327.76,437.64,329,436.92,330.16Z"/></g></g></svg>
                </a>
                @include('_partials.navigation')
            </div>

            @yield('section-title')
        </div>
    </header>
    <main class="flex flex-grow justify-center container h-full max-w-6xl px-6 py-12 mx-auto @yield('offset')">
        @yield('body')
    </main>
    <footer class="block flex flex-col justify-center p-8">
        @include('_partials.footer')
    </footer>
</div>



</body>
</html>

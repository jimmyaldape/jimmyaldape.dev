@if($page->analytics->enabled)
    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="ZGDPTMBK" defer></script>
    <!-- / Fathom -->
    @yield('custom_script')
@endif

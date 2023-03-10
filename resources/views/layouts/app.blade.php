<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="antialiased font-inter bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: true, sidebarExpanded: true }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >

        <script>
            document.querySelector('body').classList.add('sidebar-expanded');
            // if (localStorage.getItem('sidebar-expanded') == 'true') {
            //     document.querySelector('body').classList.add('sidebar-expanded');
            // } else {
            //     document.querySelector('body').classList.remove('sidebar-expanded');
            // }
        </script>

        <!-- Page wrapper -->
        <div class="flex h-screen overflow-hidden">

            <x-app.sidebar />

            <!-- Content area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif" x-ref="contentarea">

                <x-app.header />

                <main>
                    {{ $slot }}
                </main>

            </div>

        </div>

        @livewireScripts
    </body>
</html>

<!-- resources/views/components/layout.blade.php -->

<html>
    <head>
        <title>hahaha</title>
        <x-frontend.layout.base.meta />
        <x-frontend.layout.base.css />
        <x-frontend.layout.base.js />
        {{-- <x-layout.meta>
            <!-- slot -->
            xxx
        </x-layout.meta> --}}


    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="82">
        {{-- https://laracasts.com/discuss/channels/laravel/blade-hassection-what-is-it-really --}}
        {{-- https://learnku.com/docs/laravel/9.x/blade/12216#db744c --}}
        {{-- <x-frontend.layout.block.header />
        @hasSection('view_begin')
            @section('view_begin')

            @show
        @endif
        @hasSection('view_design')
            @section('view_design')

            @show
        @endif
        @hasSection('content')
            @yield('content')
        @endif
        <x-frontend.layout.block.footer />
        @hasSection('view_end')
            @section('view_end')

            @show
        @endif --}}
        <x-frontend.layout.block.header />
        @section('view_begin')

        @show
        @section('view_design')

        @show
        @hasSection('content')
            @yield('content')
        @endif
        <x-frontend.layout.block.footer />
        @section('view_end')

        @show
    </body>
</html>

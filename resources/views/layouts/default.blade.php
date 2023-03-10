<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.frontsite.meta')

        <title>@yield('title') | Meet Doctor</title>

        @stack('before-style')
            @include('includes.frontsite.style')
        @stack('after-style')
    </head>

    <body>
        @include('components.frontsite.header')
            @yield('content')

        @stack('before-script')
            @include('includes.frontsite.script')
        @stack('after-script')

        {{-- Modals --}}
        {{-- If you have a modal, create here --}}
    </body>

</html>

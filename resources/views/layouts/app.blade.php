<!DOCTYPE html>
<html x-data="data()" leng="en">

<head>
    @include('includes.Dashboard.meta')

    <title>@yield('title') | Serv</title>

    @stack('before-style')

    @include('includes.Dashboard.style')

    @stack('after-style')
</head>

<body class="antialiased">
    <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @include('components.Dahsboard.destop')

        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center">
        </div>

        @include('components.Dahsboard.mobile')

        <div class="flex flex-col flex-1 w-full">

            @include('components.Dahsboard.header')

            {{-- @include('sweetalert::element') --}}

            @yield('content')

        </div>

    </div>

    @stack('before-script')

    @include('includes.Dashboard.script')

    @stack('after-script')
</body>

</html>
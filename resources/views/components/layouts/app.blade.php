<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('images/logo/logo-duangy.png') }}" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @include('includes.libraries')

    @yield('css')
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @livewireStyles

</head>

<body>

    @livewire('header')

    {{-- @livewire('sign-in')
    @livewire('sign-up') --}}

    {{ $slot }}

    {{-- @livewire('user-order-status') --}}
    @livewire('footer')

    @yield('js')
    
    @livewireScripts
</body>

<script></script>

</html>

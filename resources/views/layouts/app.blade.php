@props(['title' => '', 'bodyClass' => null, 'footerLinks' => ''])

<x-base-layout :$title :$bodyClass>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <x-layouts.header />
        {{ $slot }}

</x-base-layout>

<<<<<<< HEAD
@props(['title' => '', 'bodyClass' => null, 'footerLinks' => ''])

<x-base-layout :$title :$bodyClass>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <x-layouts.header />
=======
@props(['title'=>'','bodyClass'=>null,'footerLinks' => ''])

<x-base-layout :$title :$bodyClass>
<x-layouts.header />
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
        {{ $slot }}

</x-base-layout>

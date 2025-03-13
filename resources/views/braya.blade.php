@extends('layouts.custom')

@section('title', 'Home Page')

@section('header')
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white flex items-center justify-end">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-right">
            {{ __('Custom Layouts') }}
        </h2>
    </div>
</header>
@endsection

@section('content')
    <h1 class="text-6xl font-bold text-white">Hello, It's Me Braya Smos.</h1>
@endsection

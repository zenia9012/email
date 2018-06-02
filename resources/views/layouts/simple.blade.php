<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.meta')

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    @include('includes.css')

</head>
<body>
    <div id="site">
        @include('includes.header')

        <h1>{{ $page->title }}</h1>
        {{ $page->content }}
    </div>

    <!-- Scripts -->
    @include('includes.script')
</body>

@include('includes.footer')

</html>

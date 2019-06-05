<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{{--app()->getLocale() 获取config/app.php配置中的local--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--csrf-token 获取csrf令牌--}}
    <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
    <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区。')" />
    <meta name="keyword" content="@yield('keyword', 'LaraBBS,社区,论坛,开发者论坛')" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>
<div id="app" class="{{ route_class() }}-page">
    {{--route——class是自定义的方法，需要在helpers文件添加方法--}}
    @include('layouts._header')
    <div class="container">
        @include('shared._messages')
        @yield('content')
    </div>
    @include('layouts._footer')
</div>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

@yield('scripts')
{{--会根据webpack.mix.js的逻辑来生成css文件--}}
</body>
</html>
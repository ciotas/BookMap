<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('partials.header')
    @yield('headerpic')
</head>
<body>
<style>
    .demo-browser-author{
        background:url(http://www.bootcss.com/p/flat-ui/images/demo/browser-author.jpg) center center no-repeat;
        margin-top:4px;
    }
</style>

<!-- Static navbar -->

@include('partials.nav')
@yield('content')

@include('partials.footer')

@include('partials.footjs')
</body>
</html>

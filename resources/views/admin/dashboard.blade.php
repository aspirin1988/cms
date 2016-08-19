<!doctype html>
<html lang="ru" ng-app="CMS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ</title>
    @include('admin.layouts.style')
</head>
<body>

@include('admin.layouts.header')


@yield('content')

    @include('admin.layouts.footer')

</body>
</html>

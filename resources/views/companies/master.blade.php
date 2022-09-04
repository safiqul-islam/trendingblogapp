<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('assets/css/all.css') }}" >
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" >
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Trending Blogs</a>
        <ul class="navbar-nav ms-auto">
            <li><a href="{{ route('blog') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('add-blog') }}" class="nav-link">Add Blog</a></li>
            <li><a href="{{ route('manage-blog') }}" class="nav-link">Manage Blog</a></li>
            <li><a href="{{ 'companies' }}" class="nav-link">All Companies</a></li>
        </ul>
    </div>
</nav>


{{--<h1>this is from master blog</h1>--}}


@yield('body')


</body>
</html>

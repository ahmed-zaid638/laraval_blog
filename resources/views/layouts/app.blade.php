<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title> @yield('title')</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="flex  items-center gap-6">
        <h1 class="font-bold text-lg bg-gray-100 p-4 ">Blog Posts</h1>
        <a href="/posts" class="cursor-pointer underline">All posts</a>
    </div>
    @yield('content')
</body>

</html>

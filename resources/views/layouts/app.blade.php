<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Blade</title>
    <link rel="stylesheet" href="{{ 'css/app.css' }}" />
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a class="p-3" href=""> Home </a>
            </li>
            <li>
                <a class="p-3" href="/dashboard"> Dashboard </a>
            </li>
            <li>
                <a class="p-3" href="/posts"> Posts </a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a class="p-3" href=""> Landon Johnson </a>
            </li>
            <li>
                <a class="p-3" href="/dashboard"> Login </a>
            </li>
            <li>
                <a class="p-3" href="{{ route('register') }}"> Register </a>
            </li>
            <li>
                <a class="p-3" href="/dashboard"> Logout </a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
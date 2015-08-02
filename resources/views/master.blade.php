<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <div class="nav">
                <a href="/about">About Me</a>
                <a href="/pic">My Pictures</a>
                <a href="/auth/logout">Logout</a>
            </div>
            @yield('content')
        </div>
    </body>
</html>

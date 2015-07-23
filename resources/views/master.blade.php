<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="nav">
            <a href="/about">About Me</a>
            <a href="/pic">My Pictures</a>
            <a href="/auth/logout">Logout</a>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

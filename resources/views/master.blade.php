<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>
        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                <a href="/about" class="navbar-brand">Mementos</a>
                </div>
                <nav id="bs-navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                        <a href="/about">About Me</a>
                        </li>
                        <li>
                        <a href="/pic">My pictures</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="auth/logout">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

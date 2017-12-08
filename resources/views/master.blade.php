<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Avatar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            body .navbar-default {
                background-color: #3097d1;
                border-color: #2984b7;
                border-radius: 0;
                position: relative;
                min-height: 50px;
                color: #fff;
                z-index: 55;
                margin-bottom: 50px;
            }
            body .navbar-default .navbar-brand,
            body .navbar-default .nav > li > a {
                color: #fff !important;
            }

            body .navbar-default .nav > li > a:hover {
                color: #c9e2f9 !important;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#docs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="./" class="navbar-brand">Avatar</a>
            </div>
            <div id="docs-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://codecanyon.net/item/laravel-avatar-management-upload-and-resize-profile-image/19468567?rel=botble" target="_blank">Purchase</a></li>
                    <li><a href="https://docs.botble.com/avatar/1.0" target="_blank">Documentation</a></li>
                    <li><a href="https://botble.com" target="_blank">Botble Team</a></li>
                </ul>
            </div>
        </div>
    </nav>
        @yield('content')
    </body>
</html>

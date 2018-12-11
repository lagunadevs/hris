<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
        <div id="app">
          <topbar></topbar>
          <sidebar></sidebar>

            <div class="content">
              <b-button>I am a Button</b-button>
              <b-button href="#">I am a Link</b-button>
                <router-view></router-view>
                <p>
                    <router-link :to="{ name: 'about' }">about</router-link> |
                    <router-link :to="{ name: 'home' }">Hello World</router-link>
                </p>
            </div>


        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
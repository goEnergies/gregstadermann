<!-- use App\Client; -->
<?php
use App\Client;
?>
    <!doctype html>
    <html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>bulk-fuel-boss</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="font-sans bg-grey-lighter">
        <!-- Navigation -->

        <div id="app">

           @foreach ($clients as $client)
           <h1>client_id: {{$client->id}}</h1>
           <h2>client_name: {{$client->name}}</h2>
           <br/>
            @endforeach

           <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

    </html>





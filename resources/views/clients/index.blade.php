<!-- use App\Client; -->
<?php
use App\Client;
use App\Site;
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
            <header-component></header-component>

        <div class="rounded shadow flex-columns p-6 mx-auto">
            <table>
                @foreach ($clients as $client)
                <tr>
                 <td>{{ $client->id }}</td>
                 <td>{{ $client->name }}</td>
                 <td>{{ $client->city }}</td>
                 </tr>
                 @endforeach
                </table>
            </div>
           @foreach ($clients as $client)
            </div>


           <div class="rounded shadow p-4 bg-grey-lightest text-grey-darkest m-4">
           <p class="text-grey-darkest">Client # {{$client->id}}</p>
           <h2 class="text-grey-darkest">{{$client->name}}</h2>
           <h3 class="text-grey-darker">{{$client->street_address}}</h3>
           <h3 class="text-grey-darker">{{$client->city}}, {{$client->state}}</h3>
           <h3 class="text-grey-darker">{{$client->zip}}</h3>
           <h3 class="text-grey-darker">{{$client->site}}</h3>
           <br/>
           </div>
            @endforeach
        </div>

           <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

    </html>





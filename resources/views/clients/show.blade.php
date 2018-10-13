<!-- use App\Client; -->
<?php
use App\Client;
use App\Site;
use App\Tank;
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
            <div class="container mx-auto">
            <div class="flex-columns p-6">
            <h1 class="my-4">Client #{{$client->id}}</h1>
            <ul>
            <li>Name: {{$client->name}}</li>
            <li>Tax Payer ID: {{$client->tax_payer_id}}</li>
            <li>Address: {{$client->street_address}}</li>
            <li>City: {{$client->city}}
            <li>State: {{$client->state}}</li></li>
            <li>Zip: {{$client->zip}}</li>
            <li>Tax Exempt Federal: {{$client->tax_exempt_federal}}</li>
            <li>Tax Exempt State: {{$client->tax_exempt_state}}</li>
            <li>Tax Exempt County: {{$client->tax_exempt_county}}</li>
            <li>Site: {{$client->site}}</li>
            </ul>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

    </html>





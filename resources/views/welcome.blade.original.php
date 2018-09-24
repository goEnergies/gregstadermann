<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bulk Fuel Boss</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

<div id="app" class="h-screen flex-wrap flex items-center justify-center bg-grey-lightest font-sans">
<navbar-component></navbar-component>
<note-component title="Quick Note"></note-component>
<div class="flex bg-grey-lighter">
<card-component title="Clients">id, name, description, address, created_at, updated_at </card-component>
<card-component title="Sites">id, name, street, city, state, zip, created_at, updated_at</card-component>
<card-component title="Tanks"></card-component>
</div>
<todo-component></todo-component>
	</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script> 
	</body>
</html>

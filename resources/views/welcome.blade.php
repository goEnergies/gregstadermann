<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
          
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

       
           
			
		</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="text-center font-thin text-3xl mb-3 p-3 bg-indigo-darkest text-indigo-lightest">
                    bulk fuel sales and transport
                </div>
<button class="bg-indigo-darkest hover:bg-indigo-light text-white font-bold py-2 px-4 rounded">
  <a class="no-underline text-indigo-lightest" href="https://laravel.com/docs">Documentation</a>
</button>
<button class="bg-indigo-darkest hover:bg-indigo-light text-white font-bold py-2 px-4 rounded">
  <a class="no-underline text-indigo-lightest" href="https://laracasts.com">Laracasts</a>
</button>
<button class="bg-indigo-darkest hover:bg-indigo-light text-white font-bold py-2 px-4 rounded">
   <a class="no-underline text-indigo-lightest" href="https://laravel-news.com">News</a>
</button>
<button class="bg-indigo-darkest hover:bg-indigo-light text-white font-bold py-2 px-4 rounded">
    <a class="no-underline text-indigo-lightest" href="https://nova.laravel.com">Nova</a>
</button>
<button class="bg-indigo-darkest hover:bg-indigo-light text-white font-bold py-2 px-4 rounded">
 <a class="no-underline text-indigo-lightest" href="https://forge.laravel.com">Forge</a>
</button>
<button class="bg-indigo-darkest hover:bg-indigo-light text-white font-bold py-2 px-4 rounded">
   <a class="no-underline text-indigo-lightest" href="https://github.com/laravel/laravel">GitHub</a>
</button>


            </div>
        </div>
    </body>
</html>

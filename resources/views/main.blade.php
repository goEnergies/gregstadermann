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
	<div id="app">
        <header-component></header-component>
        <!-- Main Body Container -->
		<div class="container mx-20 sm:px-4 pt-6 pb-8">
            <price-block-component></price-block-component>
    		<div class="hidden sm:flex"><todo-component></todo-component></div>
			<div class="flex flex-wrap -mx-4">
				<div class="w-1/2 px-4">
					<div class="bg-white rounded border">
						<h3 class="font-normal px-6 text-indigo-dark py-2">A Div</h3>
                    </div>
				</div>
				<div class="w-1/2 px-4">
					<div class="bg-white rounded border">
				    <div class="bg-white rounded border py-6 p-6"><checkbox-component></checkbox-component></div>
					</div>
				</div>
			</div>
		</div>
	</div>

			<!-- Scripts -->
			<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>




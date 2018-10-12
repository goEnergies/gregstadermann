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
        </div>

		<div class="container mx-20 sm:px-4 pt-6 pb-8">
			<div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
<?php
//$clients = App\Client::all();
//$sites = App\Site::all();
//echo $sites;

//foreach ($sites as $site) {
//
//echo $site."<br/>";
//    echo $site->client()->name."<br/>";
//}
//$client = App\Client::find(1);
//echo $client;
//echo $client->site->id;
//$tanks = App\Site::find(1)->tank;

//foreach ($tanks as $tank) {
//    echo $tank;
//}
?>


					<div class="border-b px-6">
						<div class="flex justify-between -mb-px">
							<div class="sm:hidden text-indigo-dark py-4 text-lg">
								Pricing
							</div>
								<div class="hidden sm:flex">
									<button type="button" class="appearance-none py-4 text-indigo-dark border-b border-indigo-dark mr-4">
										Distillate
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-4">
										Refined
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
										Biodiesel
									</button>
								</div>

								<div class="flex">
									<button type="button" class="appearance-none py-4 text-indigo-dark border-b border-indigo-dark mr-4">
									1D
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-4">
									1M
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-4">
									1YR
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
									ALL
									</button>
								</div>
						</div>
					</div>
					<div class="flex items-center px-6 sm:hidden">
						<div class="flex-1 py-6">
							<div class="text-indigo-darkest mb-2">
										<div class="text-indigo-darker">
											<span class="text-3xl align-top">Diesel $</span>
											<span class="text-4xl">4</span>
											<span class="text-3xl align-top">.50</span>
										</div>

										<div>
						<div class="inline-block relative w-48">
						  <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
							<option>Client 1</option>
							<option>Client 2</option>
							<option>Client 3</option>
						  </select>
						  <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
							<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
						  </div>
						</div>
							</div>
														</div>
													</div>
						</div>

					<div class="hidden sm:flex">
							<div class="w-1/3 text-center py-6">

								<div class="border-r mb-2 p-2">
									<div class="text-indigo-darker">
										<span class="text-3xl align-top">Reg $</span>
										<span class="text-4xl">3</span>
										<span class="text-3xl align-top">.33</span>
									</div>
									<div class="uppercase text-indigo tracking-wide">
										E10 87 Price
									</div>
								</div>
							</div>

							<div class="w-1/3 text-center py-6">
								<div class="border-r p-2 mb-2">
									<div class="text-indigo-darker">
										<span class="text-3xl align-top">Prem $</span>
										<span class="text-4xl">4</span>
										<span class="text-3xl align-top">.39</span>
									</div>
									<div class="uppercase text-indigo tracking-wide">
										E10 93 Price
									</div>
								</div>
							</div>

							<div class="w-1/3 text-center py-6">
								<div class="mb-2 p-2">
									<div class="text-indigo-darker">
										<span class="text-3xl align-top">ULSD $</span>
										<span class="text-4xl">5</span>
										<span class="text-3xl align-top">.77</span>
									</div>
									<div class="uppercase text-indigo tracking-wide">
								ULSD #2 Price
									</div>
								</div>
								</div>

							</div>
						</div>
					<div class="hidden sm:flex"><todo-component></todo-component></div>
					<div class="flex flex-wrap -mx-4">
					<div class="w-1/2 px-4">

						<div class="bg-white rounded border">
							<h3 class="font-normal px-6 text-indigo-dark py-2">A Div</h3>

						</div>
					</div>
					<div class="w-1/2 px-4">
						<div class="bg-white rounded border">
					<div class="bg-white rounded border py-6 p-6">
						<checkbox-component></checkbox-component>
					</div>

						</div>

					</div>

				</div>
							</div>
				</div>

			<!-- Scripts -->
			<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>




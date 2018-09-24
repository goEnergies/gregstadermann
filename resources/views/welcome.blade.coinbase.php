<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bulk Fuel Boss</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

	<body class="font-sans bg-grey-lighter">
		<!-- Navigation -->

		<div id="app">
			<!-- Top Nav -->
			<div class="bg-indigo-darkest">

				<div class="container sm:mx-20 px-4">	

					<div class="flex items-center sm:justify-between py-4">

						<div class="w-1/4 sm:hidden">
							<svg class="fill-current text-indigo-lightest h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
						</div>

						<div class="w-1/2 sm:w-auto text-center text-indigo-lightest text-2xl">bulkfuelboss</div>

						<div class="w-1/4 sm:w-auto sm:flex text-right">

							<div>
								<img class="inline-block h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/89.jpg"></img>
							</div>

							<div class="hidden sm:block sm:flex sm:items-center text-indigo-lightest ml-2">

								<span class="text-indigo-lightest text-sm mr-1">Greg Stadermann</span>
								<div>
									<svg class="fill-current text-indigo-lightest h-4 w-4 block opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
								</div>

							</div>

						</div>			

					</div>

				</div>

			</div>
		<!-- Subnav -->
			<div class="bg-indigo-darkest sm:block sm:bg-white sm:border-b">
				<div class="container px-4">
					<div class="sm:mx-20 md:mx-20 lg:mx-20 xl:mx-20 sm:flex">
						<div class="flex -mb-px mr-4">
							<a href="#" class="border-indigo-dark no-underline text-indigo-lightest sm:opacity-100 opacity-75 sm:text-indigo-dark text-sm flex items-center py-3 border-b border-transparent hover:opacity-100 sm:hover:border-indigo-darkest">
								<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z"/></svg>
								Clients
							</a>
						</div>

						<div class="flex -mb-px mr-4">
							<a href="#" class="no-underline text-indigo-lightest sm:opacity-100 opacity-75 sm:text-grey text-sm flex items-center py-3 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark">
								<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 11.73a2 2 0 1 1 2 0V20H9v-8.27zm5.24 2.51l-1.41-1.41A3.99 3.99 0 0 0 10 6a4 4 0 0 0-2.83 6.83l-1.41 1.41a6 6 0 1 1 8.49 0zm2.83 2.83l-1.41-1.41a8 8 0 1 0-11.31 0l-1.42 1.41a10 10 0 1 1 14.14 0z"/></svg>
								Sites
							</a>
						</div>
						
						<div class="flex -mb-px mr-4">
							<a href="#" class="no-underline text-indigo-lightest sm:opacity-100 opacity-75 sm:text-grey text-sm flex items-center py-3 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark">
								<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg>
								Tanks
							</a>
						</div>

						<div class="flex -mb-px mr-4">
							<a href="#" class="no-underline text-indigo-lightest sm:opacity-100 opacity-75 sm:text-grey text-sm flex items-center py-3 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark">
								<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 11.73a2 2 0 1 1 2 0V20H9v-8.27zm5.24 2.51l-1.41-1.41A3.99 3.99 0 0 0 10 6a4 4 0 0 0-2.83 6.83l-1.41 1.41a6 6 0 1 1 8.49 0zm2.83 2.83l-1.41-1.41a8 8 0 1 0-11.31 0l-1.42 1.41a10 10 0 1 1 14.14 0z"/></svg>
								Orders
							</a>
						</div>
						
						<div class="flex -mb-px mr-4">
							<a href="#" class="no-underline text-indigo-lightest sm:opacity-100 opacity-75 sm:text-grey text-sm flex items-center py-3 border-b border-transparent hover:opacity-100 sm:hover:border-grey-dark">
								
							<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
								Settings
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<div class="container mx-20 sm:px-4 pt-6 pb-8">
			<div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">

					<div class="border-b px-6">
						<div class="flex justify-between -mb-px">
							<div class="sm:hidden text-indigo-dark py-4 text-lg">
								Greg Chart
							</div>
								<div class="hidden sm:flex">
									<button type="button" class="appearance-none py-4 text-indigo-dark border-b border-indigo-dark mr-4">
										Item 1 &middot; USD $200
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-4">
										Item 2 &middot; USD $668
									</button>
									<button type="button" class="py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
										Item 3 &middot; USD $973
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
											<span class="text-3xl align-top">Bulk</span>
											<span class="text-4xl">Fuel</span>
											<span class="text-3xl align-top">Boss</span>
										</div>
										
										<div>
						<div class="inline-block relative w-48">
						  <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
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
										<span class="text-3xl align-top"></span>
										<span class="text-4xl">E10 87</span>
										<span class="text-3xl align-top">Reg</span>
									</div>
									<div class="uppercase text-indigo tracking-wide">
										E10 87 Price
									</div>
								</div>
							</div>

							<div class="w-1/3 text-center py-6">
								<div class="border-r p-2 mb-2">
									<div class="text-indigo-darker">
										<span class="text-3xl align-top"></span>
										<span class="text-4xl">E10 93</span>
										<span class="text-3xl align-top">Prem</span>
									</div>
									<div class="uppercase text-indigo tracking-wide">
										E10 93 Price
									</div>
								</div>
							</div>

							<div class="w-1/3 text-center py-6">
								<div class="mb-2 p-2">
									<div class="text-indigo-darker">
										<span class="text-3xl align-top"></span>
										<span class="text-4xl">ULSD</span>
										<span class="text-3xl align-top">Diesel</span>
									</div>
									<div class="uppercase text-indigo tracking-wide">
								ULSD Price
									</div>
								</div>
								</div>

							</div>
						</div>
<div class="flex flex-wrap -mx-4">
	<div class="w-1/2 px-4">
		<div class="bg-white rounded border">
HELLO
			<h3 class="font-normal px-6 text-indigo-dark py-2">Portfolio HELLO</h3>

		</div>
	</div>
<div class="w-1/2 px-4">
		<div class="bg-white rounded border">
<div class="bg-white rounded border">
			<h3 class="font-normal px-6 text-indigo-dark py-2">The Other Div</h3>

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




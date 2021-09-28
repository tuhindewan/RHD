
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/jQuery.print.js') }}"></script>
	<script type="text/javascript">

		// When the document is ready, initialize the link so
		// that when it is clicked, the printable area of the
		// page will print.
		$(
			function(){

				// Hook up the print link.
				$( "a" )
					.attr( "href", "javascript:void( 0 )" )
					.click(
						function(){
							// Print the DIV.
							$( ".printable" ).print();

							// Cancel click event.
							return( false );
						}
						)
				;

			}
			);

	</script>

	<style type="text/css">

		body {
			font-family: verdana ;
			font-size: 14px ;
			}

		h1 {
			font-size: 180% ;
			}

		h2 {
			border-bottom: 1px solid #999999 ;
			}

		.printable {
			border: 1px dotted #CCCCCC ;
			padding: 10px 10px 10px 10px ;
			}

		img {
			background-color: #E0E0E0 ;
			border: 1px solid #666666 ;
			padding: 5px 5px 5px 5px ;
			}

		a {
			color: red ;
			}

	</style>

    @stack('page-css')
</head>
<body>
    <h1>
		Print Part of a Page With jQuery
	</h1>

	<p>
		<a>Print Bio</a>
	</p>

	<div class="printable">

		<h2>
			Jen Rish
		</h2>

		<p>
			Jen Rish, upcoming fitness and figure model has some
			crazy developed legs!
		</p>

		<p>
			<img
				src="jen_rish_crazy_legs.jpg"
				width="380"
				height="570"
				alt="Jen Rish Has Amazing Legs!"
				/>
		</p>

		<p>
			I bet she does some <strong>serious squatting</strong>!
		</p>

	</div>
</body>
</html>

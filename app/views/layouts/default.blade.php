<!DOCTYPE Html>


<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="testingEnv">
		<meta name="author" content="diploma">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
			@yield('title')
		</title>

	{{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
	{{ HTML::style('packages/bootstrap/css/bootstrap-theme.css') }}
	{{ HTML::style('packages/bootstrap/css/bootstrap-theme.min.css') }}
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::script('packages/bootstrap/js/tests/vendor/jquery.min.js') }}
	
	    @yield('assets')
		
	</head>
    <body>
    <header>
    	<h1>
			@yield('title')
		</h1>
    </header>
        <div class="container">
        	@if (Session::get( 'success'))
			<p>{{ Session::get( 'success') }}</p>
			@endif

			@if (Session::get( 'status'))
			<p>{{ Session::get( 'status') }}</p>
			@endif

			@if (Session::get('error') )
			<p>{{ Session::get('error') }}</p>
			@endif

        
            @yield('content')
        </div>
    </body>
</html>


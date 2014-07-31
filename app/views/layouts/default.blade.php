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
	 {{ HTML::style('css/bootstrap-responsive.min.css') }}
	{{ HTML::style('css/bootstrap-responsive.css') }}
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/jquery-1.10.2.min.js') }}
	
	    @yield('assets')
		
	</head>
    <body>
    <header>
    <nav>
			 {{ Navbar::create()
			    ->with_brand('Laravel testing', URL::to('login'))
			    ->with_menus(
			        Navigation::links(
			        [
						['Home',URL::to('hello')],
						['Hfsf',URL::to('hello')],
						['Home',URL::to('hello')]
					]
					),
					['style' => 'height: auto']
				);
	   	 	}}
		</nav>
    </header>
        <div class="container">
        
        <h1>
			@yield('title')
		</h1>
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


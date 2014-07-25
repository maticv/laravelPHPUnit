<?php

class LoginController extends \BaseController {


	private $rules = array(
		'email'    => 'required|email',
		'password' => 'required'
	);
	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login')->with('rules',$this->rules);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /login/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'here';
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, $this->rules);

		if($validation->fails())
		{
			return  Redirect::back()->withErrors($validation)->withInput();
		}
		else
		{
			$user = User::where('email',Input::get('email'))->where('password',Input::get('password'))->first();

			if ($user != null)
			//if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
			{
				return View::make('hello');
			}
			else
			{
				return  Redirect::back()
				 	->with('error','Wrong credentials.')
				 	->with('rules',$this->rules)
				 	->withInput();
			}
			
		/*	$cred = ['email' => 'matic.volk@gmail.com', 'password' => '1234' ];

			if(Auth::attempt($cred))
			{
				Session::put('user',Auth::user());
				Cookie::forever('user',Auth::user());
				return View::make('hello'); 
			}
			else
			{
				return  Redirect::back()
				 	->with('error')
				 	->with('rules',$this->rules);
			}*/
		}
	}

	/**
	 * Display the specified resource.
	 * GET /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /login/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
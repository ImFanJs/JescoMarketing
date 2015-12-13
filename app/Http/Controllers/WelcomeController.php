<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function servicios()
	{
		return view('servicios');
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function pedido()
	{
		return view('pedido');
	}

	public function construccion()
	{
		return view('construccion');
	}

	public function blog()
	{
		return view('construccion');
	}

	public function promociones()
	{
		return view('construccion');
	}

}

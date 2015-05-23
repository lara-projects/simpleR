<?php namespace SimpleR\Http\Controllers;

use SimpleR\Http\Requests;
use SimpleR\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class SessionController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function login()
    {
        return View::make("login");
    }

}

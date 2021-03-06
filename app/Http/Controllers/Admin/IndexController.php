<?php namespace SimpleR\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use SimpleR\Http\Requests;
use SimpleR\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller {

    /**
     * Auth
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Admin Index sayfası.
     *
     * URL: /admin
     */
    public function index()
    {
        return View::make("admin.inc.index");
    }

    /**
     * Logout işlemi.
     * @return mixed
     */
    public function logout()
    {
        Auth::logout();

        return Redirect::to("admin");
    }


    /** ------------------------------------------------------------------
     * GEÇİÇİ
     * Bu kısımlar geçici olarak burada.
     ------------------------------------------------------------------ */

    public function charts()
    {
        return View::make("admin.inc.charts");
    }


    public function forms()
    {
        return View::make("admin.inc.forms");
    }

    public function panels()
    {
        return View::make("admin.inc.panels");
    }

    public function tables()
    {
        return View::make("admin.inc.tables");
    }

    public function widgets()
    {
        return View::make("admin.inc.widgets");
    }
}

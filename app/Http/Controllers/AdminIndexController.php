<?php namespace SimpleR\Http\Controllers;

use Illuminate\Support\Facades\View;
use SimpleR\Http\Requests;
use SimpleR\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminIndexController extends Controller {


    /**
     * Login sayfası için.
     *
     * Kayıt kontrol vs işlemleri halledilince gerekli
     * yönlendirmeler eklenecek. Şimdilik sadece login
     * sayfasını getiriyor.
     *
     * URL: /login
     */
    public function login()
    {
        return View::make("login");
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

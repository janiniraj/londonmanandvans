<?php

namespace App\Http\Controllers;
use DB;
/**
 * Class PageController.
 */
class PageController extends Controller
{
    /**
     * @param $lang
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index($slug)
    {
        /*try {
            DB::connection()->getPdo();die("dfdf111");
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }*/

        $headerMenu = DB::table('pages')->pluck('name', 'route');

        $pageData = DB::table('pages')->where('route', $slug)->first();

        if($pageData)
        {
            return view('frontend.page')->with(['pageData' => $pageData, 'headerMenu' => $headerMenu, 'slug' => $slug]);
        }
        else
        {
            return '';
        }
    }

    public function home()
    {       

        $headerMenu = DB::table('pages')->pluck('name', 'route');

        $pageData = DB::table('pages')->where('route', 'home')->first();

        if($pageData)
        {
            return view('frontend.page')->with(['pageData' => $pageData, 'headerMenu' => $headerMenu, 'slug' => 'home']);
        }
        else
        {
            return '';
        }
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
/**
 * Class QuoteController.
 */
class QuoteController extends Controller
{
    /**
     * @param $lang
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $headerMenu = DB::table('pages')->pluck('name', 'route');
        $singleItemData = DB::table('quote_settings')->where([
                'site_id'   => env('site_id'),
                'type'      => 'singleitem'
            ])->first();

        $singleItemSettings = $singleItemData->settings;

        return view('frontend.quote')->with(['singleItemSettings' => $singleItemSettings, 'headerMenu' => $headerMenu]);
    }
}

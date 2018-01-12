<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index()
    {
        try {
            DB::connection()->getPdo();die("connection");
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }
    }
}

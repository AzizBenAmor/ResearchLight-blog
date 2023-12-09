<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $MainArticule=Article::latest()->first();
        $articules=Cache::remember('featuredPosts',Carbon::now()->addHours(5), function () {
            return Article::latest('created_at')->take(12)->get();
        });
     

        return view('articules',compact('articules','MainArticule'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewLetterStore;
use App\Models\Article;
use App\Models\NewLetter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function index($id){
       
        $articule=Article::with('tags')->with('user')->findorfail($id);
        $articles=Cache::remember('featuredPosts',Carbon::now()->addHours(5), function () {
            return Article::latest('created_at')->take(12)->get();
        });
        return view('articule',compact('articule','articles'));
    }

    public function StoreNewsletter(NewLetterStore $request){

        $newletter=new NewLetter();
        $newletter->email=$request->email;
        $newletter->save();
        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NewsaboutController extends Controller
{
//    public function index(){
//      //  $alias = News::$alias;
//        return view('pages.newsabout',['alias' => 'olka']);
//    }
    public function index($id){
       //$newss =App\Models\News::find($id);
        $newss =App\Models\News::select(['id','pics','title','description','created_at'])->where('id',$id)->first();
        return view('pages.newsabout')->with(['newss' => $newss]);
    }
}

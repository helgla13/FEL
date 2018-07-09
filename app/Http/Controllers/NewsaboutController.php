<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;


class NewsaboutController extends Controller
{
//    public function index(){
//      //  $alias = News::$alias;
//        return view('pages.newsabout',['alias' => 'olka']);
//    }
    public function index($id){
       //$newss =App\Models\News::find($id);
        $newss =App\Models\News::select(['id','pics','title','description','created_at'])->where('id',$id)->first();
       // return view('pages.newsabout')->with(['newss' => $newss]);

        $news=DB::table ('news')->where('id',$id)->get();
        $comments=DB::table ('comments')
            ->join('news','news.id','=','comments.news_id')
            ->join('users','users.id','=','comments.user_id')
            ->select ('news.*','comments.*','users.name')
            ->where('news.id',$id)
            ->where ('comments.is_active',1)
            ->get();
        //  dd($news);
        return view('pages.newsabout')->with([
            'news' => $news[0],
            'comments'=>$comments,
            'newss' => $newss
            ]);
    }

//    public function showcomment($pageID){
//        $news=DB::table ('news')->where('id',$pageID)->get();
//        $comments=DB::table ('comments')
//            ->join('news','news.id','=','comments.news_id')
//            ->join('users','users.id','=','comments.user_id')
//            ->select ('news.*','comments.*','users.name')
//            ->where('news.id',$pageID)
//            ->where ('comments.is_active',1)
//            ->get();
//        //  dd($news);
//        return view('pages.newsabout')->with([
//            'news' => $news[0],
//            'comments'=>$comments
//        ]);
//    }
}

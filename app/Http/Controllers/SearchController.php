<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\News;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->search;
        $articles=DB::table('news')
//            ->select('news.*')
            ->where('news.description', 'LIKE','%'.$query.'%')
            ->paginate(10);

        $teachers=DB::table('teachers')
            ->select('teachers.*')
            ->where('teachers.FIO','LIKE','%'.$query.'%')
            ->paginate(10);


        return view ( 'pages.search')->with(['articles' => $articles,'teachers' => $teachers, 'query'=>$query]);
    }
}

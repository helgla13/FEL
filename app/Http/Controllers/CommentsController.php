<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Models\User;
use App\Models\Page;
use App\Models\News;
use App\Models\Comments;
use App\Http\Controllers\Controller;

use Auth;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store', 'search');
    }

    public function store($pageID)
    {

        if (!Auth::check()) {
            $user = \App\Models\User::whereName("Anonymous")->firstOrFail();
            $is_active=0;

        } else {
            $user = Auth()->user();
            $is_active=1;

        }

         Comments::create([
            'comment'=>htmlentities(request ('comment_body')),
            'news_id'=>$pageID,
            'user_id'=>$user->id,
             'is_active'=>$is_active
        ]);
        return back ();

    }

}

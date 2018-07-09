<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\Comments;

class AdminCommentsController extends Controller
{
    public function admincomments()
    {
        $coms = Comments::latest('created_at')->paginate(5);

        return view('admin.comments', ['coms' => $coms]);
    }

    public function renewcomments(Request $request,$id,$status)
    {

        $com = Comments::find($id);

        $com->is_active=$status;
        $com->save();



        return redirect ('/admin/adminka/comments');
    }

}

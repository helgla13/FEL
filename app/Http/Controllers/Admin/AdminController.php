<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Models\News;
use App\Models\Page;
use App\Models\Teachers;

class AdminController extends Controller
{
    public function index()
    {
        //$users = Users::orderBy('created_at', 'desc')->get();
      //  return "Hello world";
        return view('admin.adminka.adminka');
    }
    public function adminUsers(){
        $users = User::orderBy('id')->get();
        return view('admin.users')->with('users', $users);

    }
    public function renewusers(Request $request,$id,$status)
    {

        $user = User::find($id);

        $user->is_admin=$status;
        $user->save();



        return redirect ('/admin/adminka/users');
    }
    public function adminPages(){

        $pg = Page::get();

        return view('admin.pages')->with(['pg'=>$pg]);
    }

    public function adminPagesedit(Request $request,$id){
        $peg =Page::select(['id','created_at','updated_at','description','name'])->where('id',$id)->first();
        return view('admin.pages_edit')->with(['peg' => $peg]);
    }

//    public function adminPagesSelected(Request $request, $id){
//
//        $page = Page::find($id);
//        $pg = Page::get();
//
//        //return response($page);
//
//        return response()->json(array('msg'=> $page), 200);
//    }


    public function adminNews(){

        $news = News::latest('created_at')->get();

        return view('admin.news', ['news' => $news]);
    }
    public function adminTeachers(){

        $teachers = Teachers::get();

        return view('admin.teachers', ['teachers' => $teachers]);
    }

    public function adminTeachersadd(){
        return view('admin.teachers_add');
    }

    public function storeadminPages(Request $request,$id)
    {

//        $pages=Page::where('id', 7)
//            ->update(['description' => $request->txt]);
        $page=Page::find($id);
        $page->name = $request->name;
        $page->description = $request->descr;
        $page->save();
          return back();
    }
    public function adminNewsadd(){
        return view('admin.news_add');
    }
    public function adminNewsedit($id){
        $newss =News::select(['id','pics','title','description','created_at'])->where('id',$id)->first();
        return view('admin.news_edit')->with(['newss' => $newss]);
    }
    public function storeadminNewsadd (Request $request)
    {

        $novost = new News();
        $novost->title = $request->title;
        $novost->description = $request->descr;
        $novost->site_name='some_name';
        $novost->save();

        return back();
    }
    public function storeadminNewsedit (Request $request,$id){
//        $novost = new News();
       // $user_id = $request->input('id');
//dd($id);
        $novost=News::find($id);
      //  $novost->id=$id;
        $novost->title = $request->title;
        $novost->description = $request->descr;
        $novost->site_name='some_name';
        $novost->save();

    //    News::update(['id'=>$id,'description' => $request->descr, 'title'=>$request->title]);

//DB::table('news')
//    ->where('id',)
        return back();
    }
    public function storeadminTeachersadd(Request $request){

        $teacher = new Teachers();
        $teacher->FIO = $request->pip;
        $teacher->science_degree = $request->science;
        $teacher->position = $request->position;
        $teacher->education = $request->education;
        $teacher->course = $request->course;
        $teacher->publications = $request->publications;
        $teacher->email = $request->email;
        $teacher->tel = $request->tel;
        $teacher->intelect = $request->intelect;
        $teacher->googlescholar = $request->googlescholar;
        $teacher->photo = $request->photo;
        $teacher->about = $request->about;
        $teacher->save();

        return back();
    }
    public function adminTeachersedit($id){
        $tt =Teachers::select(['id','FIO','science_degree','position','education','course','publications','email',
            'tel', 'intelect','googlescholar', 'photo','about'])->where('id',$id)->first();
        return view('admin.teachers_edit')->with(['tt' => $tt]);
    }
    public function storeadminTeachersedit(Request $request, $id){

        $teacher=Teachers::find($id);
        $teacher->FIO = $request->pip;
        $teacher->science_degree = $request->science;
        $teacher->position = $request->position;
        $teacher->education = $request->education;
        $teacher->course = $request->course;
        $teacher->publications = $request->publications;
        $teacher->email = $request->email;
        $teacher->tel = $request->tel;
        $teacher->intelect = $request->intelect;
        $teacher->googlescholar = $request->googlescholar;
        $teacher->photo = $request->photo;
        $teacher->about = $request->about;
        $teacher->save();

        return back();
    }

}



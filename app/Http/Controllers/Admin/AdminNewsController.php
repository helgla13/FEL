<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use DB;

class AdminNewsController extends Controller
{
    public function adminNews(){

        $news = News::latest('created_at')->get();

        return view('admin.news', ['news' => $news]);
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
        if ($request->hasFile('input_img')) {
                $image = $request->file('input_img');
                $name = $image->getClientOriginalName();
                $destinationPath = public_path('images');
                $image->move($destinationPath, $name);


        $novost = new News();
        $novost->title = $request->title;
        $novost->description = $request->descr;
        $novost->site_name = 'some_name';
        $novost->pics = "/images/".$name;
        $novost->save();



            //  $path = $image->storeAs($destinationPath, $name);
            //  dd($path);


            return back();
        }
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
}

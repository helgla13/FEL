<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Page;
use App\Models\News;

class PageController extends Controller
{
    public function index(){
        $index = Page::find(14);
        return view('pages.index')->with('index', $index);
    }
    public function about(){
        $about = Page::find(13);
        return view('pages.about')->with('about', $about);
    }
    public function news(){
       //$news =  News::all();
       //dd($news);
        $news = News::latest('created_at')->paginate(10);
        return view('pages.news', ['news' => $news]);
    }
  //  public function newsleft(){
        //$news =  News::all();
        //dd($news);
//        $news = News::orderBy('created_at', 'desc')->limit(2)->get();
      // $news1='';
       // return view('layouts.left', ['news1' => $news1]);
   // }

    public function specialization(){
        $spec = Page::find(12);
        return view('pages.specialization')->with('spec', $spec);
    }
    public function firstzno(){
        $firstzno = Page::find(4);
        return view('pages.firstzno')->with('firstzno', $firstzno);
    }
    public function firstms(){
        $firstms = Page::find(5);
        return view('pages.firstms')->with('firstms', $firstms);
    }
    public function fifthyear(){
        $fifthyear = Page::find(6);
        return view('pages.fifthyear')->with('fifthyear', $fifthyear);
    }
    public function scientific_school(){
        $sschool = Page::find(1);
        return view('pages.scientific_school')->with('sschool', $sschool);
    }
    public function scientific_groups(){
        $scgroups = Page::find(2);
        return view('pages.scientific_groups')->with('scgroups', $scgroups);
    }
    public function profile()
    {
        if( !auth()) {
            return redirect('/');
        }
        else

        return view('pages.profile');
}
    public function opendays(){
        $opendays = Page::find(3);
        return view('pages.opendays')->with('opendays', $opendays);
    }
    public function rozklad(){
        $rozklad = Page::find(11);
        return view('pages.rozklad')->with('rozklad', $rozklad);
    }
    public function kuratory(){
        $kuratory = Page::find(10);
        return view('pages.kuratory')->with('kuratory', $kuratory);
    }
    public function navchalni_plany(){
        $navplany = Page::find(9);
        return view('pages.navchalni_plany')->with('navplany', $navplany);
    }
    public function student_life(){
        $studlife = Page::find(8);
    return view('pages.student_life')->with('studlife', $studlife);
}
    public function file_archive(){

        $farh = Page::find(7);
        return view('pages.file_archive')->with('farh', $farh);
    }

    public function file_archivePost(Request $request){
//        if(Input::file())
//        {
//
//            $image = Input::file('image');
//            $filename  = time() . '.' . $image->getClientOriginalExtension();
//
//            $path = public_path('/img/' . $filename);
//
//
//            Image::make($image->getRealPath())->resize(200, 200)->save($path);
////            $user->image = $filename;
//            $image->save();


//        $file = Request::file('file');
//        $image_name = time()."-".$file->getClientOriginalName();
//        $file->move('img', $image_name);
//        $image = Image::make(sprintf('uploads/%s', $image_name))->resize(200, 200)->save();


        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
          //  $path = $image->storeAs($destinationPath, $name);
          //  dd($path);

            return back()->with('success','Image Upload successfully');
        }
    }
}

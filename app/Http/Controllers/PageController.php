<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Page;
use App\Models\News;

class PageController extends Controller
{
    public function index(){
        $index = Page::where('name','index')->first();
        return view('pages.index')->with('index', $index);
    }
    public function about(){
        $about = Page::where('name','about')->first();
        return view('pages.about')->with('about', $about);
    }
    public function news(){
        $news = News::latest('created_at')->paginate(10);
        return view('pages.news', ['news' => $news]);
    }

    public function specialization(){
        $spec = Page::where('name','specialization')->first();
        return view('pages.specialization')->with('spec', $spec);
    }
    public function firstzno(){
        $firstzno = Page::where('name','firstzno')->first();
        return view('pages.firstzno')->with('firstzno', $firstzno);
    }
    public function firstms(){
        $firstms = Page::where('name','firstms')->first();
        return view('pages.firstms')->with('firstms', $firstms);
    }
    public function fifthyear(){
        $fifthyear = Page::where('name','fifthyear')->first();
        return view('pages.fifthyear')->with('fifthyear', $fifthyear);
    }
    public function scientific_school(){
        $sschool = Page::where('name','scientific_school')->first();
        return view('pages.scientific_school')->with('sschool', $sschool);
    }
    public function scientific_groups(){
        $scgroups = Page::where('name','scientific_groups')->first();
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
        $opendays = Page::where('name','opendays')->first();
        return view('pages.opendays')->with('opendays', $opendays);
    }
    public function rozklad(){
        $rozklad = Page::where('name','rozklad')->first();
        return view('pages.rozklad')->with('rozklad', $rozklad);
    }
    public function kuratory(){
        $kuratory = Page::where('name','kuratory')->first();
        return view('pages.kuratory')->with('kuratory', $kuratory);
    }
    public function navchalni_plany(){
        $navplany = Page::where('name','navchalni_plany')->first();
        return view('pages.navchalni_plany')->with('navplany', $navplany);
    }
    public function student_life(){
        $studlife = Page::where('name','student_life')->first();
    return view('pages.student_life')->with('studlife', $studlife);
}
    public function file_archive(){

        $farh = Page::where('name','file_archive')->first();
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

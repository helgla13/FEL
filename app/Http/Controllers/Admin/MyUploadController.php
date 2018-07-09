<?php
//
//namespace App\Http\Controllers\Admin;
//use Illuminate\Http\Request;
////use Illuminate\Support\Facades\Storage;
//use App\Http\Controllers\Controller;
//
//
//class MyUploadController extends Controller
//{
////    public function getForm()
////    {
////        return view('upload-form');
////    }
//
//    public function upload(Request $request)
//    {
////        foreach ($request->file() as $file) {
//////            foreach ($file as $f) {
//////                $f->move(public_path('/img/'), time().'_'.$f->getClientOriginalName());
//////            }
//////        }
//////        return "Успех";
//////    }
//
//        if($request->isMethod('post')){
//
//      //      if($request->hasFile('image')) {
//                $file = $request->file('image');
//              //  $file->move(public_path() . '/img/','filename.img');
//            //    dd($file);
//        //    }
//        }
//$ss='ok';
////dd($_FILES['image']);
////        $path = $request->file('image')->store('path');
////        if($request->isMethod('post')){
////         //   dd($ss);
////            if($request->hasFile('image')) {
////                $file = $request->file('image');
////dd($ss);
////                $file->move(public_path() . '/path','filename.img');
////            }
////        }
//////        if (!$request->file('image')->isValid()) {
//////            dd($ss);
//////        }
//  //      return $path;
//
//    }
//}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
//    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $id=Auth::user()->id;
        $students =DB::table('users')->select(['id','name', 'surname'])->where('id',$id)->first();
//        dd($students);
        return view('pages.profile')->with(['students' => $students]);

//        return view('pages.profile');
    }
//    public function show(){
//
//    }

    public function store(){

//        $this->validate(request(),[
//            'name'=>'required',
//                'email'=>'required|email',
//                'password'=>'required|confirmed'
//            ]);

//        $user=User::create(request(['name', 'email','password']));
//
//        auth()->login($user);

        return redirect('/');
    }
}

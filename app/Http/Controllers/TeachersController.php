<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use App;

use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    public function index(){
        $teachers = Teachers::paginate(10);
        return view('pages.teachers', ['teachers' => $teachers]);
    }
    public function show($id){
        $teacher =App\Models\Teachers::select(['id','photo','science_degree','position','education', 'course','publications',
            'email', 'tel', 'intelect', 'googlescholar', 'about', 'FIO'])->where('id',$id)->first();
        return view('pages.teachersabout')->with(['teacher' => $teacher]);
    }
}

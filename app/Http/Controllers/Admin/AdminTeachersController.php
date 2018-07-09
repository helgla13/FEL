<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teachers;
use DB;

class AdminTeachersController extends Controller
{
    public function adminTeachers(){

        $teachers = Teachers::get();

        return view('admin.teachers', ['teachers' => $teachers]);
    }

    public function adminTeachersadd(){
        return view('admin.teachers_add');
    }
    public function storeadminTeachersadd(Request $request)
    {

        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);


            $teacher = new Teachers();
            $teacher->FIO = htmlentities($request->pip);
            $teacher->science_degree = $request->science;
            $teacher->position = $request->position;
            $teacher->education = $request->education;
            $teacher->course = $request->course;
            $teacher->publications = $request->publications;
            $teacher->email = $request->email;
            $teacher->tel = $request->tel;
            $teacher->intelect = $request->intelect;
            $teacher->googlescholar = $request->googlescholar;
            $teacher->photo = "/images/".$name;
            $teacher->about = $request->about;
            $teacher->save();

            return back();


        }
    }
    public function adminTeachersedit($id){
        $tt =Teachers::select(['id','FIO','science_degree','position','education','course','publications','email',
            'tel', 'intelect','googlescholar', 'photo','about'])->where('id',$id)->first();
        return view('admin.teachers_edit')->with(['tt' => $tt]);
    }
    public function storeadminTeachersedit(Request $request, $id)
    {
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $name);

            $teacher = Teachers::find($id);
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
            $teacher->photo = "/images/" . $name;
            $teacher->about = $request->about;
            $teacher->save();
        }
        else {
            $teacher = Teachers::find($id);
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
            //$teacher->photo = $request->photo;
            $teacher->about = $request->about;
            $teacher->save();
        }
        return back();
    }

}

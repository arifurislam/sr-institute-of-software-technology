<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class SixController extends Controller
{
    public function index(){
        $students = Student::where('class_id', '6')->orderBy('roll')->get();
        return view('admin.class-6.index',compact('students'));
    }
    public function create(){
        return view('admin.class-6.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'father' => 'required|string|max:255',
            'roll'=>'required|',
        ],[
            'name.required' => 'Plz Enter Student Name !!!',
            'father.required' => 'Plz Enter Student Father name !!!',
            'roll.required' => 'Plz Enter Student Class Roll !!!',
        ]
    );
       
        $students = new Student ();
        $students->name = $request->name;
        $slug = Str::slug($request->name);
        $students->father = $request->father;
        $students->roll = $request->roll;
        $students->slug = $slug;
        $students->status = 1;
        $students->class_id = 6;
        $students->sec_id = 6;
        $store = $students->save();
        return redirect()->back()->with(['message' => 'Student Successfully Added', 'alert' => 'alert-success']);
    }
    public function show($slug){
        $student = Student::where('status' , 1)->where('slug', $slug)->first();
         return view('admin.class-6.show',compact('student'));
    }
    public function addmark($slug){
        $student = Student::where('status' , 1)->where('slug', $slug)->first();
        return view('admin.class-6.add-mark',compact('student'));
    }

}




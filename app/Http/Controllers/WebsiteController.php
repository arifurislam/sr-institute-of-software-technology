<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Qualification;
use App\Models\Contact;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home');
    }
    public function about(){
        return view('website.about');
    }
    public function services(){
        return view('website.services');
    }
    public function contact(){
        $genders = Gender::all();
        $qualifications = Qualification::all();
        return view('website.contact',compact('genders','qualifications'));
    }
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:contacts,email',
            'number' => 'required|max:255|unique:contacts,number',
            'age' => 'required|integer|max:45',
            'gender' => 'required|integer',
            'education' => 'required|integer',
        ],
        [
            'name.required' => 'Enter Your Name !!!',
            'email.required' => 'Enter Your Valid Email Address !!!',
            'number.required' => 'Enter Your Valid Contact Number !!!',
            'age.required' => 'Enter Your Age !!!',
            'gender.required' => 'Select Your Gender !!!',
            'education.required' => 'Select Your Qualifications !!!',
        ]);

        $contacts = new Contact() ;
        $contacts->name = $request->name;
        $contacts->slug = Str::slug($request->name);
        $contacts->email = $request->email;
        $contacts->number = $request->number;
        $contacts->age = $request->age;
        $contacts->qua_id = $request->education;
        $contacts->gender_id = $request->gender;
        $contacts->save();
        return redirect()->back()->with(['message' => 'Successfully Registered, We will contact with you.Thanks', 'alert' => 'alert-success']);
    }
    public function research(){
        return view('website.research');
    }
    public function notice(){
        return view('website.notice');
    }
    

}

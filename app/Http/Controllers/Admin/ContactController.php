<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
   public function index(){
        $contacts = Contact::get();
        $contactsC = Contact::get()->count();
        return view('admin.contact.index',compact('contacts','contactsC'));
   }
   public function show($id){
        $data = Contact::where('id',$id)->firstOrFail();
        return view('admin.contact.show',compact('data'));
   }
}

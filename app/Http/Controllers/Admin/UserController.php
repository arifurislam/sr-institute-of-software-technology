<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $tUsers = User::all()->count();
        $users = User::paginate(5);
        return view('admin.users.index',compact('users','tUsers'));
    }

    public function create()
    {
        $roles = UserRole::all();
        return view('admin.users.create',compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|unique:users|max:50|string|email',
            'contact' => 'string|nullable',
            'role' => 'required|integer',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string|',
        ],[
            'name.required'  => 'Enter Your Your Name',
            'email.required'  => 'Enter Your Valid Email Address',
            'role.required'  => 'Select User Role',
            'password.required'  => 'Enter your Passcode',
            'password_confirmation.required'  => 'Re Enter Your Passcode',
        ]);
    
        $users = new User() ;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->contact = $request->contact;
        $users->slug = Str::slug($request->name);
        $users->role_id = $request->role;
        $users->password = Hash::make($request->password);
        $users->save();
        return redirect()->back()->with(['message' => 'Successfully Registered, New User Added.Thanks ',
         'alert' => 'alert-success']);
    }
    
    public function show(User $user)
    {
       return view('admin.users.show',compact('user'));
    }

    public function edit(User $user)
    {
        $roles = UserRole::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|max:50|string|email',
            'contact' => 'string|nullable',
            'role' => 'required|integer',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string|',
        ],[
            'name.required'  => 'Enter Your Your Name',
            'email.required'  => 'Enter Your Valid Email Address',
            'contact.required'  => 'Enter Your Contact Number',
            'role.required'  => 'Select User Role',
            'password.required'  => 'Enter your Passcode',
            'password_confirmation.required'  => 'Re Enter Your Passcode',
        ]);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->slug = Str::slug($request->name);
                $user->role_id = $request->role;
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with(['message' => 'Successfully , User Info Has Updated ',
                 'alert' => 'alert-success']);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with(['message' => 'Deleted , User Account Has Deleted ',
        'alert' => 'alert-danger']);
    }
}

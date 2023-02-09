<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Genders;
use App\Models\Role;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

use function PHPUnit\Framework\returnCallback;

class UserController extends Controller
{
    public function viewRegister()
    {
        $roles = Role::all();
        $genders = Gender::all();
        return view('register', compact('roles', 'genders'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:25|alpha',
            'last_name' => 'required|max:25|alpha',
            'email' => 'required|email',
            'role' => 'required',
            'gender' => 'required',
            'display_picture_link' => 'required|mimes:png,jpg,jpeg',
            'password' => ['required',
                            'confirmed',
                            'alpha_num',
                            Password::min(8)->numbers()]
        ]);

        $role_id = 0;
        if($request->role == '1')
        {
            $role_id = 1;
        } else {
            $role_id = 2;
        }

        $request_file = $request->file('display_picture_link');

        User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'roles_id' => $request->role,
            'genders_id' => $request->gender,
            'display_picture_link' => $request_file->getClientOriginalName(),
            'password' => bcrypt($request->password)
        ]);

        Storage::putFileAs('/public/images', $request_file, $request_file->getClientOriginalName());

        return redirect('/Login');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {

            return redirect('/Home');
        }
        return redirect()->back()->withErrors("Wrong Email Or Password. Please Check Your Credentials!");

    }

    public function showProfile(Request $request){
        $user = Auth::user();
        $genders = Gender::get();

        return view('profile')->with(compact('user','genders'));
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);

        $request->validate([
            'first_name' => 'required|max:25|alpha',
            'last_name' => 'required|max:25|alpha',
            'email' => 'required|email',
            'gender' => 'required',
            'display_picture_link' => 'mimes:png,jpg,jpeg',
        ]);
        if($request->password){
            $request->validate([
                'password' => ['required',
                            'confirmed',
                            'alpha_num',
                            Password::min(8)->numbers()]
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->genders_id = $request->gender;

        if($request->display_picture){
            $user->display_picture = $request->file('display_picture_link')->getClientOriginalName();
            Storage::putFileAs('/public/images', $request->display_picture, $request->file('display_picture_link')->getClientOriginalName());
        }

        $user->save();

        return view('saved');
    }

    public function showEditProfile()
    {
        $users = User::all();

        return view('accountmanagement', compact('users'));
    }

    public function showUpdate(Request $request)
    {
        $user = User::find($request->id);
        $roles = Role::all();

        return view('updaterole')->with(compact('user','roles'));
    }

    public function update(Request $request)
    {
        $user = User::where('id' , $request->id)->update([
            'roles_id' => $request->roles_id
        ]);

        return redirect('/EditAccount');
    }

    public function showDelete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return back();
    }

    public function logOut()
    {
        Auth::logout();

        return view('logout');
    }
}

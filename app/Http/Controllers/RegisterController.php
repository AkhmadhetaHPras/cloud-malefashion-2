<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'birth' => 'required',
            'gender' => 'required|max:10',
            'telp' => 'required|max:15',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
            'address' => 'required|max:100',
            'postal_code' => 'required|max:10',
            'city' => 'required|max:50',
            'province' => 'required|max:50',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->messages()
            ]);
        }

        $user = new User();
        $user->role = 'Customer';
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->name = $request->input('name');
        $user->telp = $request->input('telp');
        $user->gender = $request->input('gender');
        $user->birth = $request->input('birth');
        $user->photo = 'img/profile/default.png';
        $user->save();

        $address = new Address();
        $address->name = $request->input('name');
        $address->telp = $request->input('telp');
        $address->street_address = $request->input('address');
        $address->postal_code = $request->input('postal_code');
        $address->city = $request->input('city');
        $address->province = $request->input('province');

        $address->user()->associate($user);
        $address->save();

        Auth::login($user);
        return response()->json([
            'status' => 200,
            'message' => 'You will be redirect to the homepage',
        ]);
    }
}

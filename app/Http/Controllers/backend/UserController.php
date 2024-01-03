<?php

namespace App\Http\Controllers\backend;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $roles = Role::get();
        return view('backend.users.index', compact('roles', 'users'));
    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        $rules = [
            'name' => 'required',
            'email'     => 'required|email|unique:users',
            'role_id' => 'required|numeric',
            'password' => 'required|min:6',
        ];
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            $user  = new User;
            $user->fill($attributes);
            $user->password = Hash::make($attributes['password']);
            $user->save();
            return back()->with('success', getNotify(1));
        }
    }


    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $rules = [
            'name' => 'required',
            'email'     => 'required|email',
            'role_id' => 'required|numeric',
        ];
        $user  = User::find($id);
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' =>  $user->id])->withErrors($validation)->withInput();
        } else {
            $user->fill($attributes);
            $user->password = $user->password;
            $user->update();
            return back()->with('success', getNotify(2));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user  = User::find($id);
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

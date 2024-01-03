<?php

namespace App\Http\Controllers\backend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::get();
        return view('backend.menus.index', compact('menus'));
    }
    public function store(Request $request)
    {
        $attributes = $request->all();
        $rules = [
            'display_name' => 'required',
            'url'     => 'required',
            'sequence' => 'required|numeric',
            'childable' => 'required',
            'status' => 'required',
        ];
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            $menu  = new Menu;
            $menu->fill($attributes);
            $menu->save();
            return back()->with('success', getNotify(1));
        }
    }
    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $rules = [
            'display_name' => 'required',
            'url'     => 'required',
            'sequence' => 'required|numeric',
            'childable' => 'required',
            'status' => 'required',
        ];
        $menu  = Menu::find($id);
        $validation = Validator::make($attributes, $rules);

        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' =>  $menu->id])->withErrors($validation)->withInput();
        } else {
            $menu->fill($attributes);
            $menu->update();
            return back()->with('success', getNotify(2));
        }
    }
    public function destroy(string $id)
    {
        $user  = Menu::find($id);
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

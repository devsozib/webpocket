<?php

namespace App\Http\Controllers\backend;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubMenuController extends Controller
{
    public function index()
    {
        $sub_menus = SubMenu::leftJoin('menus', 'menus.id', '=', 'sub_menus.menu_id')
            ->select('sub_menus.id', 'sub_menus.menu_id', 'menus.display_name as m_name', 'sub_menus.display_name as s_name', 'sub_menus.url', 'sub_menus.sequence', 'sub_menus.status')
            // ->groupBy('sub_menus.menu_id')
            ->get();
        $menus = Menu::where('status', '1')->where('childable', '1')->get();
        return view('backend.sub_menus.index', compact('sub_menus', 'menus'));
    }
    public function store(Request $request)
    {
        $attributes = $request->all();
        $rules = [
            'menu_id' => 'required',
            'display_name' => 'required',
            'url'     => 'required',
            'sequence' => 'required|numeric',
            'status' => 'required',
        ];

        $slug = $request->url;
    
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            $menu  = new SubMenu;
            $menu->url = $slug;
            $menu->fill($attributes);
            $menu->save();
            return back()->with('success', getNotify(1));
        }
    }
    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $rules = [
            'menu_id' => 'required',
            'display_name' => 'required',
            'url'     => 'required',
            'sequence' => 'required|numeric',
            'status' => 'required',
        ];
        $slug =$request->url;
        
        $menu  = SubMenu::find($id);
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' =>  $menu->id])->withErrors($validation)->withInput();
        } else {
            $menu->url = $slug;
            $menu->fill($attributes);
            $menu->update();
            return back()->with('success', getNotify(2));
        }
    }
    public function destroy(string $id)
    {
        $user  = SubMenu::find($id);
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use App\Models\Frontend\Breadcrumb;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class BreadCrumbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::get();
        $breadcrumbs = Breadcrumb::join('menus', 'breadcrumbs.menu_id', '=', 'menus.id')
            ->leftJoin('sub_menus', 'sub_menus.id', '=', 'breadcrumbs.sub_menu_id')
            ->select('breadcrumbs.id', 'breadcrumbs.sub_menu_id', 'breadcrumbs.description', 'breadcrumbs.title', 'menus.display_name as menu_name', 'sub_menus.display_name as sb_name', 'breadcrumbs.status', 'breadcrumbs.image', 'breadcrumbs.menu_id')
            ->get();
        return view('backend.breadcrumb.index', compact('menus', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    
    public function edit(string $id)
    {
        $item = Breadcrumb::findOrFail($id);
        return view('backend.breadcrumb.edit', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $title = $request->title;
        $status = $request->status;
        $menu_id = $request->menu_id;
        $sub_menu_id = $request->sub_menu_id;
        $description = $request->description;
        $rules = [
            'title' => 'required',
            'menu_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required'
        ];
        $validation = Validator::make($attributes, $rules);
        $checkExistingData = "";
        if ($sub_menu_id) {
            $checkExistingData = Breadcrumb::where('menu_id', '=', $menu_id)->where('sub_menu_id', '=', $sub_menu_id)->where('status', '1')->first();
        } else {
            $checkExistingData = Breadcrumb::where('menu_id', '=', $menu_id)->where('status', '1')->first();
        }
        $name = "";
        if (!$checkExistingData) {
            if ($validation->fails()) {
                return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
            } else {
                if ($request->image) {
                    $path = public_path('frontend/assets/img/breadcrumb/');
                    !is_dir($path) &&
                        mkdir($path, 0777, true);

                    $name = time() . '.' . $request->image->extension();
                    Image::make($request->file('image'))
                        ->resize(399, 351)
                        ->save($path . $name);
                }

                $image = new Breadcrumb();
                $image->title = $title;
                $image->menu_id = $menu_id;
                $image->sub_menu_id = $sub_menu_id;
                $image->description = $description;
                $image->status = $status;
                $image->image = $name;
                $image->save();
                return back()->with('success', getNotify(1));
            }
        } else {
            return back()->with('success', getNotify(6));
        }
    }


    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $title = $request->title;
        $status = $request->status;
        $description = $request->description;
        $rules = [
            'title' => 'required',
            'status' => 'required'
        ];

        $breadcrumb = Breadcrumb::findOrFail($id);
        $name = "";
        if ($image = $request->file('image')) {
            if ($breadcrumb->image) {
                unlink(public_path('frontend/assets/img/breadcrumb/' . $breadcrumb->image));
            }

            $path = public_path('frontend/assets/img/breadcrumb/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $name = time() . '.' . $request->image->extension();
            Image::make($request->file('image'))
                ->resize(399, 351)
                ->save($path . $name);
        } else {
            $name = $breadcrumb->image;
        }

        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => $breadcrumb->id])->withErrors($validation)->withInput();
        } else {
            $breadcrumb->title = $title;
            $breadcrumb->status = $status;
            $breadcrumb->image = $name;
            $breadcrumb->description = $description;
            $breadcrumb->update();
            return back()->with('success', getNotify(2));
        }
    }
    public function destroy(string $id)
    {
        $user  = Breadcrumb::find($id);
        if ($user->image) {
            unlink(public_path('frontend/assets/img/breadcrumb/' . $user->image));
        }
        $user->delete();
        return back()->with('success', getNotify(3));
    }

    public function getSubmenu(Request $request)
    {
        $id =  $request->menu_id;
        $menu = Menu::where('id', $id)->first();
        $sub_menus = SubMenu::where('menu_id', $id)->get();
        return response()->json([$sub_menus, $menu]);
    }
}

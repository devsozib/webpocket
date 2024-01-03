<?php

namespace App\Http\Controllers\backend;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\backend\ServiceTutorial;
use Illuminate\Support\Facades\Validator;

class ServiceTutorialController extends Controller
{

    public function index()
    {
        $sub_menus = SubMenu::where('menu_id', 1)->get();
        $tutorials = ServiceTutorial::join('menus', 'service_tutorials.menu_id', '=', 'menus.id')
            ->leftJoin('sub_menus', 'sub_menus.id', '=', 'service_tutorials.submenu_id')
            ->select(
                'service_tutorials.id',
                'service_tutorials.type',
                'service_tutorials.step_no',
                'service_tutorials.title',
                'service_tutorials.submenu_id',
                'menus.display_name as menu_name',
                'sub_menus.display_name as sb_name',
                'service_tutorials.status',
                'service_tutorials.image',
                'service_tutorials.menu_id'
            )
            ->get();

        return view('backend.tutorial.index', compact('sub_menus', 'tutorials'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        $type = $request->type;
        $step = $request->step;
        $title = $request->title;
        $status = $request->status;
        $sub_menu_id = $request->sub_menu_id;
        $description = $request->description;
        $rules = [
            'type' => 'required',
            'step' => 'required',
            'title' => 'required',
            'sub_menu_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required'
        ];
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            $path = public_path('frontend/assets/img/tutorials/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $name = time() . '.' . $request->image->extension();
            Image::make($request->file('image'))
                ->resize(590, 1280)
                ->save($path . $name);

            $image = new ServiceTutorial();
            $image->type = $type;
            $image->step_no = $step;
            $image->title = $title;
            $image->menu_id = 1;
            $image->submenu_id = $sub_menu_id;
            $image->status = $status;
            $image->image = $name;
            $image->save();
            return back()->with('success', getNotify(1));
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $sub_menus = SubMenu::where('menu_id', 1)->get();
        $tutorial = ServiceTutorial::findOrFail($id);
        return view('backend.tutorial.edit', compact('sub_menus', 'tutorial'));
    }

    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $type = $request->type;
        $step = $request->step;
        $title = $request->title;
        $status = $request->status;
        $sub_menu_id = $request->sub_menu_id;
        $description = $request->description;
        $rules = [
            'type' => 'required',
            'step' => 'required',
            'title' => 'required',
            'sub_menu_id' => 'required',
            'status' => 'required'
        ];

        $tutorial =  ServiceTutorial::findOrFail($id);


        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'update'])->withErrors($validation)->withInput();
        } else {
            $name = "";
            if ($request->file('image')) {
                unlink(public_path('frontend/assets/img/tutorials/' . $tutorial->image));
                $path = public_path('frontend/assets/img/tutorials/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);

                $name = time() . '.' . $request->image->extension();
                Image::make($request->file('image'))
                    ->resize(590, 1280)
                    ->save($path . $name);
            } else {
                $name = $tutorial->image;
            }
            $tutorial->type = $type;
            $tutorial->step_no = $step;
            $tutorial->title = $title;
            $tutorial->menu_id = 1;
            $tutorial->submenu_id = $sub_menu_id;
            $tutorial->status = $status;
            $tutorial->image = $name;
            $tutorial->update();
            return redirect()->route('tutorials.index')->with('success', getNotify(2));
        }
    }

    public function destroy(string $id)
    {
        $user  = ServiceTutorial::find($id);
        unlink(public_path('frontend/assets/img/tutorials/' . $user->image));
        $user->delete();
        return back()->with('success', getNotify(3));
    }

    public function getTutorial(Request $request)
    {

        $menu_id =  $request->menu_id;
        $sub_menu_id =  $request->sub_menu_id;
        $type =  $request->type;
        $tutorials = ServiceTutorial::where('menu_id', $menu_id)->where('submenu_id', $sub_menu_id)->where('type', $type)->where('status', '1')->get();
        foreach ($tutorials as $key => $tutorial) {
            $tutorial['image_path'] = url('frontend/assets/img/tutorials/', $tutorial->image);
            $tutorials[$key] = $tutorial;
        }
        return response()->json([
            'tutorials' => $tutorials
        ]);
    }
}

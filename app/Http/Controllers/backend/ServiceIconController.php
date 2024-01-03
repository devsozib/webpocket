<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceIcon;
use App\Models\SubMenu;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ServiceIconController extends Controller
{

    public function index()
    {
        $services = SubMenu::where('menu_id', 1)->orderBy('sequence', 'ASC')->get();
        $serviceIcons = ServiceIcon::get();
        return view('backend.service_icons.index', compact('services', 'serviceIcons'));
    }


    public function store(Request $request)
    {
        $attributes = $request->all();
        $submenu_id = $request->submenu_id;
        $display_name = $request->display_name;
        $status = $request->status;
        $sequence = $request->sequence;
        $rules = [
            'submenu_id' => 'required',
            'display_name' => 'required',
            'sequence' => 'required',
            'image' => 'required|image|mimes:png|max:2048',
            'status' => 'required'
        ];
        $validation = Validator::make($attributes, $rules);
        $checkExistingData = "";
        if ($submenu_id) {
            $checkExistingData = ServiceIcon::where('submenu_id', '=', $submenu_id)->where('status', '1')->first();
        }
        $name = "";
        if (!$checkExistingData) {
            if ($validation->fails()) {
                return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
            } else {
                if ($request->image) {
                    $path = public_path('frontend/assets/img/menu_icon/');
                    !is_dir($path) &&
                        mkdir($path, 0777, true);

                    $name = time() . '.' . $request->image->extension();
                    Image::make($request->file('image'))
                        // ->resize(322, 283)
                        ->save($path . $name);
                }

                $image = new ServiceIcon();
                $image->submenu_id = $submenu_id;
                $image->display_name = $display_name;
                $image->url = 'services';
                $image->sequence = $sequence;
                $image->status = $status;
                $image->image = $name;
                $image->save();
                return back()->with('success', getNotify(1));
            }
        } else {
            return back()->with('success', getNotify(6));
        }
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $submenu_id = $request->submenu_id;
        $display_name = $request->display_name;
        $status = $request->status;
        $sequence = $request->sequence;
        $rules = [
            'submenu_id' => 'required',
            'display_name' => 'required',
            'sequence' => 'required',
            'status' => 'required'
        ];

        $tutorial =  ServiceIcon::findOrFail($id);

        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'update'])->withErrors($validation)->withInput();
        } else {
            $name = "";
            if ($request->file('image')) {
                unlink(public_path('frontend/assets/img/menu_icon/' . $tutorial->image));
                $path = public_path('frontend/assets/img/menu_icon/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);

                $name = time() . '.' . $request->image->extension();
                Image::make($request->file('image'))
                    // ->resize(322, 283)
                    ->save($path . $name);
            } else {
                $name = $tutorial->image;
            }
            $tutorial->submenu_id = $submenu_id;
            $tutorial->display_name = $display_name;
            $tutorial->url = 'services';
            $tutorial->sequence = $sequence;
            $tutorial->status = $status;
            $tutorial->image = $name;
            $tutorial->update();
            return redirect()->route('service-icons.index')->with('success', getNotify(2));
        }
    }

    public function destroy(string $id)
    {
        $user  = ServiceIcon::find($id);
        unlink(public_path('frontend/assets/img/menu_icon/' . $user->image));
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

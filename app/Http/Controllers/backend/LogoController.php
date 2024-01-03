<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class LogoController extends Controller
{
   
    public function index()
    {
        $logo = Logo::first();
        return view('backend.logo.index', compact('logo'));
    }
  
    public function update(Request $request, $id)
    {
         $attributes = $request->all();
        $rules = [          
            'dark_logo' => 'image|mimes:png|max:2048',
            'white_logo' => 'image|mimes:png|max:2048',                   
            'favicon' => 'image|mimes:png|max:2048',                   
        ];
        
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'update'])->withErrors($validation)->withInput();
        } else {
            $logo = Logo::findOrFail($id);

            if ($request->hasFile('dark_logo')) {
                $path = public_path('frontend/assets/img/logo/');

                // Check if the dark logo file already exists and delete it
                if (File::exists($path . $logo->dark_logo)) {
                    File::delete($path . $logo->dark_logo);
                }

                $d_logo_name = time() . '.' . $request->file('dark_logo')->extension();
                $request->file('dark_logo')->move($path, $d_logo_name);

                // You can also use Image::make for resizing if needed
                Image::make($path . $d_logo_name)->resize(970, 292)->save($path . $d_logo_name);

                $logo->dark_logo = $d_logo_name;
            }

            if ($request->hasFile('white_logo')) {
                $path = public_path('frontend/assets/img/logo/');

                // Check if the white logo file already exists and delete it
                if (File::exists($path . $logo->white_logo)) {
                    File::delete($path . $logo->white_logo);
                }

                $w_logo_name = time() . '.' . $request->file('white_logo')->extension();
                $request->file('white_logo')->move($path, $w_logo_name);

                // You can also use Image::make for resizing if needed
                Image::make($path . $w_logo_name)->resize(970, 292)->save($path . $w_logo_name);

                $logo->white_logo = $w_logo_name;
            }

            if ($request->hasFile('favicon')) {
                $path = public_path('frontend/assets/img/logo/');

                // Check if the white logo file already exists and delete it
                if (File::exists($path . $logo->favicon)) {
                    File::delete($path . $logo->favicon);
                }

                $faviconName = time() . '.' . $request->file('favicon')->extension();
                $request->file('favicon')->move($path, $faviconName);

                // You can also use Image::make for resizing if needed
                Image::make($path . $faviconName)->resize(1000, 1000)->save($path . $faviconName);

                $logo->favicon = $faviconName;
            }
            $logo->save();

            return back()->with('success', getNotify(2));
        }
    }  
}

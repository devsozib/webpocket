<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = HomeSlider::get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $title = $request->title;
        $slider_des = $request->slider_des;
        $btn_text = $request->btn_text;
        $btn_url = $request->btn_url;
        $status = $request->status;
        $sequence = $request->sequence;
        $rules = [
            // 'title' => 'required|max:40',
            // 'slider_des' => 'required',
            // 'btn_text' => 'required',
            // 'btn_url' => 'required',
            'sequence' => 'required',
            'image' => 'required|image|mimes:png|max:2048',
            'status' => 'required'
        ];
        $validation = Validator::make($attributes, $rules);

        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            if ($request->image) {
                $path = public_path('frontend/assets/img/hero/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);
                $name = time() . '.' . $request->image->extension();
                Image::make($request->file('image'))
                    ->resize(10368, 3456)
                    ->save($path . $name);
            }

            $image = new HomeSlider();
            // $image->title = $title;
            // $image->description = $slider_des;
            // $image->btn_text = $btn_text;
            // $image->btn_url = $btn_url;
            $image->sequence = $sequence;
            $image->status = $status;
            $image->image = $name;
            $image->save();
            return back()->with('success', getNotify(1));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $title = $request->title;
        $slider_des = $request->slider_des;
        $btn_text = $request->btn_text;
        $btn_url = $request->btn_url;
        $status = $request->status;
        $sequence = $request->sequence;
        $rules = [
            // 'title' => 'required|max:40',
            // 'slider_des' => 'required',
            // 'btn_text' => 'required',
            // 'btn_url' => 'required',
            'sequence' => 'required',
            'status' => 'required'
        ];

        $tutorial =  HomeSlider::findOrFail($id);

        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => $id])->withErrors($validation)->withInput();
        } else {
            $name = "";
            if ($request->file('image')) {
                unlink(public_path('frontend/assets/img/hero/' . $tutorial->image));
                $path = public_path('frontend/assets/img/hero/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);

                $name = time() . '.' . $request->image->extension();
                Image::make($request->file('image'))
                    ->resize(10368, 3456)
                    ->save($path . $name);
            } else {
                $name = $tutorial->image;
            }
            // $tutorial->title = $title;
            // $tutorial->description = $slider_des;
            // $tutorial->btn_text = $btn_text;
            // $tutorial->btn_url = $btn_url;
            $tutorial->sequence = $sequence;
            $tutorial->status = $status;
            $tutorial->image = $name;
            $tutorial->update();
            return redirect()->route('slider.index')->with('success', getNotify(2));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user  = HomeSlider::find($id);
        unlink(public_path('frontend/assets/img/hero/' . $user->image));
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

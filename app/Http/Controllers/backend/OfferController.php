<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\backend\Offer;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::get();
        return view('backend.offers.index', compact('offers'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $attributes = $request->all();
        $title = $request->title;
        $offer_description = $request->offer_description;
        $offer = $request->offer;
        $validity = $request->validity;
        $can_avail = $request->can_avail;
        $camp_details = $request->camp_details;
        $status = $request->status;
        $rules = [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required'
        ];
        $validation = Validator::make($attributes, $rules);
        $name = "";

        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            if ($request->image) {
                $path = public_path('frontend/assets/img/offer/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);

                $name = time() . '.' . $request->image->extension();
                Image::make($request->file('image'))
                    // ->resize(322, 283)
                    ->save($path . $name);
            }

            $image = new Offer();
            $image->title = $title;
            $image->offer_description = $offer_description;
            $image->offer = $offer;
            $image->validity = $validity;
            $image->can_avail = $can_avail;
            $image->campaign_details = $camp_details;
            $image->status = $status;
            $image->thumb_image = $name;
            $image->save();
            return back()->with('success', getNotify(1));
        }
    }

    public function show(string $id)
    {
        $offer = Offer::find($id);
        return view('frontend.pages.offer_details', compact('offer'));
    }

    public function edit(string $id)
    {
        $item = Offer::findOrFail($id);
        return view('backend.offers.edit', compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $attributes = $request->all();
        $title = $request->title;
        $offer_description = $request->offer_description;
        $offer = $request->offer;
        $validity = $request->validity;
        $can_avail = $request->can_avail;
        $camp_details = $request->camp_details;
        $status = $request->status;
        $rules = [
            'title' => 'required',
            'status' => 'required'
        ];

        $tutorial =  Offer::findOrFail($id);

        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'update'])->withErrors($validation)->withInput();
        } else {
            $name = "";
            if ($request->file('image')) {
                // return $tutorial->thumb_image;
                unlink(public_path('frontend/assets/img/offer/' . $tutorial->thumb_image));
                $path = public_path('frontend/assets/img/offer/');
                !is_dir($path) &&
                    mkdir($path, 0777, true);

                $name = time() . '.' . $request->image->extension();
                Image::make($request->file('image'))
                    // ->resize(322, 283)
                    ->save($path . $name);
            } else {
                $name = $tutorial->thumb_image;
            }
            $tutorial->title = $title;
            $tutorial->offer_description = $offer_description;
            $tutorial->offer = $offer;
            $tutorial->validity = $validity;
            $tutorial->can_avail = $can_avail;
            $tutorial->campaign_details = $camp_details;
            $tutorial->status = $status;
            $tutorial->thumb_image = $name;
            $tutorial->update();
            return redirect()->route('offer.index')->with('success', getNotify(2));
        }
    }

    public function destroy(string $id)
    {
        $user  = Offer::find($id);
        unlink(public_path('frontend/assets/img/offer/' . $user->thumb_image));
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\backend\SocialIcon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SocialIconController extends Controller
{
    public function index()
    {
        $socialIcons = SocialIcon::orderBy('seq','ASC')->get();
        return view('backend.socialicon.index', compact('socialIcons'));
    }
    public function store(Request $request)
    {
        $attributes = $request->all();
        $rules = [          
            'icon' => 'required',
            'url'     => 'required',
            'seq' => 'required|numeric',
            'status' => 'required',
        ];
    
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => 'Add'])->withErrors($validation)->withInput();
        } else {
            $socialIcon  = new SocialIcon();      
            $socialIcon->fill($attributes);
            $socialIcon->save();
            return back()->with('success', getNotify(1));
        }
    }
    public function update(Request $request, $id)
    {
        $attributes = $request->all();
        $rules = [          
            'icon' => 'required',
            'url'     => 'required',
            'seq' => 'required|numeric',
            'status' => 'required',
        ];
    
        $validation = Validator::make($attributes, $rules);
        if ($validation->fails()) {
            return back()->with(['error' => getNotify(4), 'error_code' => $id])->withErrors($validation)->withInput();
        } else {
            $socialIcon  =SocialIcon::findOrFail($id);      
            $socialIcon->fill($attributes);
            $socialIcon->save();
            return back()->with('success', getNotify(2));
        }
    }
    public function destroy(string $id)
    {
        $user  = SocialIcon::find($id);
        $user->delete();
        return back()->with('success', getNotify(3));
    }
}

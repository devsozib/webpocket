<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\BrandColor;
use Illuminate\Http\Request;

class BrandColorController extends Controller
{
   public function index(){
    $color = BrandColor::first();
    return view('backend.brandcolor.index',compact('color'));
   }

   public function update(Request $request, $id){
       $color = BrandColor::findOrFail($id);
       $color->primary_color = $request->primary_color;
       $color->secondary_color = $request->secondary_color;
       $color->save();
       return redirect()->back();
   }
}

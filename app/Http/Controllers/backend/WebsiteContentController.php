<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\WebsiteContent;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WebsiteContentController extends Controller
{
   public function websiteContentUpdate(Request $request){
    $type = $request->type;
    $title = $request->title;
    $description = $request->description;
    $image = $request->image;
    $status = $request->status;
    $lists = $request->lists;
    // return $request;
    // return $request->file('image');
    if($type == 'AD'){
        $content = WebsiteContent::where('type','AD')->first();        
        $name = "";
        if ($request->file('image')) {
            unlink(public_path('frontend/assets/img/app/' . $content->img));
            $path = public_path('frontend/assets/img/app/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $name = time() . '.' . $request->image->extension();
            Image::make($request->file('image'))
                ->resize(404, 867)
                ->save($path . $name);
        } else {
            $name = $content->img;
        }
       $content->type =  $type;
       $content->title =  $title;
       $content->description = $description;
       $content->img = $name; 
       $content->status = $status;
       $content->save();
       return redirect()->back();        
    }else if($type == 'PS'){
        $content = WebsiteContent::where('type','AP')->first();  
        $content->type =  $type;
        $content->title =  $title;
        $content->description = $description;       
        $content->status = $status;
        $content->list = $lists;
        $content->save();
        return redirect()->back();   
    }else if($type == 'AP'){
        $content = WebsiteContent::where('type','AP')->first();  

        $name = "";
        if ($request->file('image')) {
            unlink(public_path('frontend/assets/img/about/' . $content->img));
            $path = public_path('frontend/assets/img/about/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $name = time() . '.' . $request->image->extension();
            Image::make($request->file('image'))
                ->resize(996, 664)
                ->save($path . $name);
        } else {
            $name = $content->img;
        }

        $content->type =  $type;
        $content->title =  $title;
        $content->description = $description;       
        $content->status = $status;
        $content->list = $lists;
        $content->img = $name; 
        $content->save();
        return redirect()->back();   
    } else if($type == 'CP'){
        $content = WebsiteContent::where('type','CP')->first();  

        $name = "";
        if ($request->file('image')) {
            unlink(public_path('frontend/assets/img/' . $content->img));
            $path = public_path('frontend/assets/img/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $name = time() . '.' . $request->image->extension();
            Image::make($request->file('image'))
                ->resize(996, 664)
                ->save($path . $name);
        } else {
            $name = $content->img;
        }

        $content->type =  $type;
        $content->title =  $title;
        $content->description = $description;       
        $content->status = $status;
        $content->list = $lists;
        $content->img = $name; 
        $content->save();
        return redirect()->back();
    }else{
        // return $request;
        $content = WebsiteContent::where('type','SP')->first();  

        $name = "";
        if ($request->file('image')) {
            unlink(public_path('frontend/assets/img/' . $content->img));
            $path = public_path('frontend/assets/img/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $name = time() . '.' . $request->image->extension();
            Image::make($request->file('image'))
                ->resize(996, 664)
                ->save($path . $name);
        } else {
            $name = $content->img;
        }

        $content->type =  $type;
        $content->title =  $title;
        $content->description = $description;       
        $content->status = $status;  
        $content->img = $name; 
        $content->save();
        return redirect()->back();
    }    
   }
}

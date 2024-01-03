<?php

namespace App\Http\Controllers\backend;

use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\backend\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_menus = SubMenu::leftJoin('menus', 'menus.id', '=', 'sub_menus.menu_id')
        ->select('sub_menus.id', 'sub_menus.menu_id', 'menus.display_name as m_name', 'sub_menus.display_name as s_name', 'sub_menus.url', 'sub_menus.sequence', 'sub_menus.status')
        ->where('menus.display_name','FAQ')
        ->get();
        $menus = Menu::where('status', '1')->where('childable', '1')->get();
        $faqs = Faq::join('menus', 'menus.id', '=', 'faqs.menu_id')
        ->leftJoin('sub_menus', 'sub_menus.id', '=', 'faqs.submenu_id')
        ->select('menus.display_name as m_name', 'sub_menus.display_name as s_name', 'faqs.*')       
        ->get();
        return view('backend.faq.index', compact('sub_menus', 'menus','faqs'));
        
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
    
        // Define the validation rules
        $rules = [
            'menu_id' => 'required',
            'question' => 'required',
            'answer' => 'required',       
            'sequence' => 'required|numeric',
            'status' => 'required',
        ];
    
        // Create a Validator instance
        $validator = Validator::make($attributes, $rules);
    
        // Check if validation fails
        if ($validator->fails()) {
            return back()
                ->with(['error' => getNotify(4), 'error_code' => 'Add'])
                ->withErrors($validator)
                ->withInput();
        } else {
            // Validation passed; create a new SubMenu instance and save it
            $menu = new Faq();
            $menu->fill($attributes);
            $menu->save();
    
            return back()->with('success', getNotify(1));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    
     public function edit(string $id)
     {
         $faq = Faq::findOrFail($id);
         return view('backend.faq.edit', compact('faq'));
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        // Define the validation rules
        $rules = [ 
            'question' => 'required',
            'answer' => 'required',
            'sequence' => 'required|numeric',
            'status' => 'required',
        ];
        
        // Create a Validator instance
        $validator = Validator::make($attributes, $rules);
        
        // Check if validation fails
        if ($validator->fails()) {
            return back()
                ->with(['error' => getNotify(4), 'error_code' => $id])
                ->withErrors($validator)
                ->withInput();
        } else {
            // Validation passed; update the existing Faq instance
            $faq = Faq::findOrFail($id); // Assuming you have the ID of the FAQ you want to update.
        
            // Update the FAQ attributes
            $faq->update($attributes);
        
            return back()->with('success', getNotify(2));
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
        $faq  = Faq::find($id);
        $faq->delete();
        return back()->with('success', getNotify(3));  
    }
}

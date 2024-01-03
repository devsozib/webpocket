<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\backend\AppUrl;
use App\Http\Controllers\Controller;

class AppUrlController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = AppUrl::first();
        return view('backend.appurl.index', compact('url'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AppUrl $appUrl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppUrl $appUrl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $url = AppUrl::findOrFail($id);
       $url->apple_url = $request->apple_url;
       $url->andriod_url = $request->andriod_url;
       $url->save();
       return back()->with('success', getNotify(2));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

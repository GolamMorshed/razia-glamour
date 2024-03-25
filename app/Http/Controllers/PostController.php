<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts');
    }

    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'color' => 'required',
            'price' => 'required'
        ]);
       
        if($validated)
        {  
            $product = new Post();
            $product->uploaded_by = auth()->user()->id;
            
            if($request->hasFile('image'))
            {

            }
            $product->name = $request->input('name');
            $product->color = $request->input('color');
            $product->price = $request->input('price');
    
            if($product->save())
            {
                return redirect()->back()->with('success', 'Product saved successfully');
            }
            
        }
    }
}

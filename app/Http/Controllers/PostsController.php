<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create() {
        return view('posts.create');
    }

    public function store() {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $post = new \App\Post();

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path('storage/{$imagePath}'))->fit(1200, 1200); //Intervention/image
        $image->save();

        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image' =>$imagePath,
        ]);

        return redirect('/profile/'. auth()->user()->id);
    }

    public function show(\App\Post $post) {

        return view('posts.show', compact('post'));

    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['title'=>'required|min:5|max:10','blog'=>'required|min:10|max:30'],['title.required'=>'put something here!!!']);
        $blog=new Blog;
        $blog->blog_title=$request->get('title');
        $blog->blog=$request->get('blog');
        $blog->save();
        echo "<h1> Data send successfully...!</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
       $blogs=Blog::all();
       return view('show',['blogs'=>$blogs]);
       $blogs=Blog::all();

       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog ,$id)
    {
        //
        $blogs=Blog::find($id);
        return view('edit',['blogs'=>$blogs]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog,$id)
    {
        //
        $blogs=Blog::find($id);
        $blogs->blog_title=$request->get('title');
        $blogs->blog=$request->get('blog');
        $blogs->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog,$id)
    {
        //
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('show');
    }
}

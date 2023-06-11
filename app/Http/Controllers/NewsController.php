<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $news = News::all();
       return view('admin.pages.news.news_index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.news.news_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         News::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_path'=>$request->file('image_path')->store('images','public'),
          
    ]);
    

        return redirect()->route('news.index')->with('message','News Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        // dd($news);
        return view('admin.pages.news.edit_news',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        dd($news);
        return view('admin.pages.news.edit_news',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        // dd($request);
        $news->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_path'=>$request->file('image_path')->store('images','public'),
          
    ]);
    

        return redirect()->route('news.index')->with('message','News Added successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back()->with('message','News has been deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Tag, PostTag, Link};

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $link = Link::all();
        return view('tags.index',['tags'=> $tags, 'link'=> $link]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = \Str::slug($request->name);
        $tag->keywords = $request->keywords;
        $tag->engtitle = $request->eng;
        $tag->save();

        return redirect()->back()->with('success','Data added successfully');
    }
    public function storeLink(Request $request)
    {
        $link = new Link();
        $link->indtitle = $request->ind;
        $link->engtitle = $request->eng;
        $link->link = $request->link;
        $link->save();

        return redirect()->back()->with('successs','Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Tag = Tag::findOrFail($id);
        $Tag->name = $request->name;
        $Tag->slug = $request->slug;
        $Tag->keywords = $request->keywords;
        $Tag->engtitle = $request->eng;
        $Tag->save();

        return redirect()->back()->with('success','Data updated successfully');
    }
    public function updateLink(Request $request)
    {
        $link = Link::findOrFail($request->idE);
        $link->indtitle = $request->ind;
        $link->engtitle = $request->eng;
        $link->link = $request->link;
        $link->save();

        return redirect()->back()->with('successs','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tag = Tag::findOrFail($id);
        $cek = PostTag::where('tag_id',$id)->count('id');
        if ($cek > 0) {
            return redirect()->back()->with('warning', 'Data Gagal dihapus, data mungkin masih terhubung dengan postingan anda');
        }else{
            $Tag->delete();
            return redirect()->back()->with('success', 'Data Deleted Successfully');
        }
    }
    public function destroyLink(Request $request)
    {
        $link = Link::findOrFail($request->id);
        
        $link->delete();
        return redirect()->back()->with('successs', 'Data Deleted Successfully');
    }
}

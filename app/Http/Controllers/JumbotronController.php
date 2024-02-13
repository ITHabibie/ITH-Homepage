<?php

namespace App\Http\Controllers;

use Error;
use App\Models\Jumbotron;
use App\Models\Post;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumbotron = Jumbotron::all();
        return view('jumbotron.index',['jumbotron'=> $jumbotron]);
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
        $this->validate($request,[
            'upload' => 'image|mimes:jpg,png,jpeg|max:3024',
        ]);

    

        $jumbotron = new Jumbotron();
        $jumbotron->indtitle = $request->indtitle;
        $jumbotron->engtitle = $request->engtitle;
        $jumbotron->indsubtitle = $request->indsubtitle;
        $jumbotron->engsubtitle = $request->engsubtitle;
        $jumbotron->style = $request->type;
        
        $cover = $request->file('upload');
            if($cover){
                $new_cover_path = $cover->store('images/jumbotron', 'public');
                $jumbotron->image = $new_cover_path;
            }

        $jumbotron->save();

        return redirect()->back()->with('success','Data added successfully');
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
        
        $jumbotron = Jumbotron::findOrFail($id);
        $jumbotron->indtitle = $request->indtitle;
        $jumbotron->engtitle = $request->engtitle;
        $jumbotron->indsubtitle = $request->indsubtitle;
        $jumbotron->engsubtitle = $request->engsubtitle;
        $jumbotron->style = $request->type;
        
        $cover = $request->file('upload');
            if($cover){
                File::delete("storage/$jumbotron->image");
                $new_cover_path = $cover->store('images/jumbotron', 'public');
                $jumbotron->image = $new_cover_path;
            }
        $jumbotron->save();

        return redirect()->back()->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

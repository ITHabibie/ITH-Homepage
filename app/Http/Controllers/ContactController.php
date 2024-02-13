<?php

namespace App\Http\Controllers;

use Error;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index',['contact'=> $contact]);
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

        $contact = new Contact();
        $contact->alamat = $request->alamat;
        $contact->email = $request->email;
        $contact->telepon = $request->phone;
        $contact->maps = $request->map;
        $contact->facebook = $request->fb;
        $contact->twitter = $request->twitter;
        $contact->instagram = $request->insta;
        $contact->linkedin = $request->link;
        $cover = $request->file('upload');
            if($cover){
                $new_cover_path = $cover->store('images/logo', 'public');
                $contact->logo = $new_cover_path;
            }
        $contact->save();

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
        $contact = Contact::findOrFail($id);
        $contact->alamat = $request->alamat;
        $contact->email = $request->email;
        $contact->telepon = $request->phone;
        $contact->maps = $request->map;
        $contact->facebook = $request->fb;
        $contact->twitter = $request->twitter;
        $contact->instagram = $request->insta;
        $contact->linkedin = $request->link;
        $cover = $request->file('upload');
        // dd($contact->logo);
            if($cover){
                // File::delete("storage/$contact->logo");
                $new_cover_path = $cover->store('images/logo', 'public');
                $contact->logo = $new_cover_path;
            }
        $contact->save();

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

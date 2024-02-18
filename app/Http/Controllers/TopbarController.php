
<?php // topbar controller

namespace App\Http\Controllers;

use Error;
use App\Models\Topbar;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TopbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topbar = Topbar::all();
        return view('topbar.index',['topbar'=> $topbar]);
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

        $topbar = new Topbar();
        $topbar->alamat = $request->alamat;
        $topbar->email = $request->email;
        $topbar->telepon = $request->phone;
        $topbar->maps = $request->map;
        $topbar->facebook = $request->fb;
        $topbar->twitter = $request->twitter;
        $topbar->instagram = $request->insta;
        $topbar->linkedin = $request->link;
        $cover = $request->file('upload');
            if($cover){
                $new_cover_path = $cover->store('images/logo', 'public');
                $topbar->logo = $new_cover_path;
            }
        $topbar->save();

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
        $topbar = Topbar::findOrFail($id);
        $topbar->alamat = $request->alamat;
        $topbar->email = $request->email;
        $topbar->telepon = $request->phone;
        $topbar->maps = $request->map;
        $topbar->facebook = $request->fb;
        $topbar->twitter = $request->twitter;
        $topbar->instagram = $request->insta;
        $topbar->linkedin = $request->link;
        $cover = $request->file('upload');
        // dd($contact->logo);
            if($cover){
                // File::delete("storage/$contact->logo");
                $new_cover_path = $cover->store('images/logo', 'public');
                $topbar->logo = $new_cover_path;
            }
        $topbar->save();

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Post, Tag, Page, FrontNavbar};
use Illuminate\Support\Facades\DB;
use Auth;
use File;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'data' => Page::all(),
            'nav' => FrontNavbar::get()
        ];
        return view('page.index', $data);
    }

    public function show()
    {
        $data = [
            'data' => Page::all(),
            'nav' => FrontNavbar::get()
        ];
        return view('page.nav', $data);
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $page->update($request->all());

        return redirect()->route('page.index')->with('success', 'Data updated successfully');
    }

    public function store(Request $request)
    {
        $cek = FrontNavbar::where('indtitle', $request->indtitle)->first();
        $ceks = FrontNavbar::where('engtitle', $request->engtitle)->first();

        if ($request->ops2) {
            $req = 0;
            $req2 = $request->ops2;
            $cekss = FrontNavbar::where('ops2', $request->ops2)->count('id');
        } elseif ($request->ops1) {
           $req = $request->ops1;
           $req2 = 0;
           $cekss = FrontNavbar::where('ops1', $request->ops1)->count('id');
        } else {
            $req = 0;
           $req2 = 0;
           $cekss = FrontNavbar::where('ops1', 0)->where('ops2', 0)->count('id');
        }

        if (is_null($cek)) {
            if (is_null($ceks)) {
                FrontNavbar::firstOrCreate(
                    [
                        'name' => $request->indtitle,
                        'indtitle' => $request->indtitle,
                        'engtitle' => $request->engtitle,
                        'format' => $request->format,
                        'order' => $cekss+1,
                        'ops1' => $req,
                        'ops2' => $req2,
                        'slug' => \Str::slug($request->indtitle)
                    ]
                );
                return redirect()->back()->with(['true'=>' Page / Menu Berhasil dibuat', 'dataload'=>$request->ops1, 'navlink'=>$request->ops2]);

            } else {
                return redirect()->back()->with('false', ' Page / Menu Sudah Ada');
            }
        } else {
            return redirect()->back()->with('false', ' Page / Menu Sudah Ada');
        }
    }

    public function menuEdit($id)
    {
        $cek = FrontNavbar::find($id);
        if ($cek->format == 0 || $cek->format == 1) {
            $fill = [0,1];
            $option = FrontNavbar::whereIn('format',$fill)->orderBy('order', 'ASC')->get();
        } elseif ($cek->format == 2 || $cek->format == 3) {
            $fill = [2,3];
            $option = FrontNavbar::where('ops1', $cek->ops1)->whereIn('format',$fill)->orderBy('order', 'ASC')->get();
        } else {
            $fill = [4];
            $option = FrontNavbar::where('ops2', $cek->ops2)->whereIn('format',$fill)->orderBy('order', 'ASC')->get();
        }

        $data = [
            'dataEdit' => $cek,
            'option' => $option
            ];

        return view('page.edit', $data);
    }

    public function back($id)
    {
        $data = FrontNavbar::find($id);
        $data2 = FrontNavbar::find($data->ops2);
        // dd($data2);
        if ($data->format == 2 || $data->format == 3) {
            return redirect()->route('pageNav')->with(['dataload'=>$data->ops1, 'navlink'=>$data->id]);
        } elseif ($data->format == 4) {
            return redirect()->route('pageNav')->with(['dataload'=>$data2->ops1, 'navlink'=>$data->ops2]);
            // dd($data2);
        } else {
            return redirect()->route('pageNav')->with(['dataload'=>$id]);
        }
    }

    public function pageUpdate(Request $request)
    {
        // dd($request->engtitle);
        $this->validate($request,[
            'indtitle' => 'required|max:255',
            'engtitle' => 'max:255',
            'cover' => 'image|mimes:jpg,png,jpeg|file|max:1024',
        ]);

        DB::beginTransaction();
        try{
            $data = FrontNavbar::find($request->id);
            $data2 = FrontNavbar::find($data->ops2);

            if ($data->format == 0 || $data->format == 1) {
                $arrays = [0,1];
            } elseif ($data->format == 2 || $data->format == 3) {
                $arrays = [2,3];
            } else {
                $arrays = [4];
            }


            if($request->order > $data->order)
            {
                $filter = $data->whereIn('format',$arrays)->whereBetween('order',[$data->order,$request->order])->get();

                foreach ($filter as $key => $value) {
                    $change = FrontNavbar::find($value->id);
                    if ($value->id == $request->id) {
                        $change->order = $request->order;
                        $change->save();
                    } else {
                        $min = $value->order - 1;
                        $change->order = $min;
                        $change->save();
                    }
                }
            }
            elseif($request->order < $data->order)
            {
                $filter = $data->whereIn('format',$arrays)->whereBetween('order',[$request->order,$data->order])->get();

                foreach ($filter as $key => $value) {
                    $change = FrontNavbar::find($value->id);
                    if ($value->id == $request->id) {
                        $change->order = $request->order;
                        $change->save();
                    } else {
                        $plus = $value->order + 1;
                        $change->order = $plus;
                        $change->save();
                    }
                }
            }

            $data->name = $request->indtitle;
            $data->indtitle = $request->indtitle;
            $data->engtitle = $request->engtitle;
            $data->view = $request->view;
            $data->format = $request->format;
            $data->slug = \Str::slug($request->indtitle);

            if($request->desc){
                $data->content = $request->desc;
            }
            
            if($request->inggris){
                $data->inggris = $request->inggris;
            }
            // }else{
            //     $data->content = null;
            //     $data->inggris = null;
            // }

            $cover = $request->file('upload');
            if ($request->hapusgambar) {
                $data->img = null;
            } else {
                if($cover){
                    File::delete("storage/$data->img");
                    $new_cover_path = $cover->store('images/page', 'public');
                    $data->img = $new_cover_path;
                }
            }

            $data->save();
            DB::commit();
            if ($data->format == 2 || $data->format == 3) {
                return redirect()->route('pageNav')->with(['trues'=>'Update Successfully', 'dataload'=>$data->ops1, 'navlink'=>$data->id]);
            } elseif ($data->format == 4) {
                return redirect()->route('pageNav')->with(['trues'=>'Update Successfully', 'dataload'=>$data2->ops1, 'navlink'=>$data->ops2]);
                // dd($data2);
            } else {
                return redirect()->route('pageNav')->with(['trues'=>'Update Successfully', 'dataload'=>$request->id]);
            }

        }catch(Error $th){
            DB::rollback();
            dd($th);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nav = FrontNavbar::find($id);
        $cek = FrontNavbar::where('ops1',$id)->count('id');
        $cek2 = FrontNavbar::where('ops2',$id)->count('id');

        if ($cek > 0 || $cek2 > 0) {
            return redirect()->back()->with(['false' => 'Data Gagal dihapus, data mungkin masih terhubung dengan menu lainnya', 'dataload'=>$id]);
        } else {
            DB::beginTransaction();

            try{

                $nav->delete();
                DB::commit();
                return redirect()->back()->with(['true' => 'Data Deleted Successfully']);

            }catch(\Exception $e){
                DB::rollback();
                return redirect()->back()->with(['false' => 'Data Gagal dihapus, data mungkin masih terhubung dengan menulainnya', 'dataload'=>$id]);
            }
        }
    }
}

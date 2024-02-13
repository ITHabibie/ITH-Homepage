<?php

namespace App\Http\Livewire\Page;
use App\Models\{typesatu, FrontNavbar};
use Livewire\WithFileUploads;
use DB;

use Livewire\Component;

class Topbanner extends Component
{
    use WithFileUploads;

    public $openModals = false, $alert = false, $alerts = false, $menu = 'top', $setFormat, $view, $model = '1', $models, $mirror;
    public $ids, $ind, $eng, $indSub, $engSub, $slug, $status, $desc, $content, $photo;


    public function render()
    {
        $this->getNew();
        $data = [
            'typesatu' => $this->mirror,
        ];
        return view('livewire.page.topbanner', $data);
    }

    public function openModals()
    {
        $this->openModals = true;
        $this->alert = false;
        $this->alerts = false;
    }

    public function openEdit($id)
    {
        $data = typesatu::find($id);
        $this->ind = $data->menu;
        $this->eng = $data->engmenu;
        $this->indSub = $data->submenu;
        $this->engSub = $data->engsubmenu;
        $this->status = $data->status;
        $this->slug = $data->slug;
        $this->desc = $data->desc;
        $this->content = $data->engdesc;
        $this->view = $data->image;
        $this->ids = $data->id;
        $this->models = $data->alt3;
        $this->openModals = true;

        $this->alert = false;
        $this->alerts = false;

    }

    public function getNew()
    {
       $this->mirror =  typesatu::get()->where('alt3',$this->model);
    }

    public function closeModals()
    {
        $this->openModals = false;
        $this->resetIn();

    }

    public function store()
    {
        $this->validate([
            'ind' => 'required',
            'eng' => 'required',
            'indSub' => 'required',
            'engSub' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'photo' => 'max:2024'
        ]);
        // dd($this->photo);

        DB::beginTransaction();
        try {


               $change = typesatu::where('status', 1)->where('alt3', $this->models)->get();

                foreach ($change as $key => $value) {
                    $changes = typesatu::find($value->id);

                        $changes->status = 0;
                        $changes->save();
                }

                $store = typesatu::updateOrCreate(['id' => $this->ids], [
                    'menu' => $this->ind,
                    'submenu' => $this->indSub,
                    'engmenu' => $this->eng,
                    'engsubmenu' => $this->engSub,
                    'status' => $this->status,
                    'slug' => $this->slug,
                    'desc' => $this->desc,
                    'engdesc' => $this->content,
                    'alt3' => $this->models,
                ]);

                $code = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $random = substr(str_shuffle($code),0,5);
                if ($this->photo) {
                    $namaDokumen = 'Banner'.$random.'.'.$this->photo->extension();
                    $this->photo->storeAs('public/images/banner/',$namaDokumen);
                    $store->image = $namaDokumen;
                    $store->save();
                }
                

            DB::commit();
            $this->alert = true;

        } catch (ERROR $th) {
            DB::rollback();
        $this->alerts = true;

        }

        $this->closeModals();
        $this->resetIn();
        $this->getNew();

    }

    public function tabs($status,$number)
    {
        $this->model = $number;
        $this->menu = $status;
        $this->alerts = false;
        $this->resetIn();
        $this->alert = false;
    }

    public function setFormat($set)
    {
        $this->setFormat = $set;
        $this->alerts = false;
        $this->alert = false;
        $this->resetIn();
    }

    public function delt($id)
    {
        $this->alert = false;
        $this->alerts = false;

        $destroy = typesatu::find($id);


        if ($destroy->status == 1 || $destroy->status1 == 1 || $destroy->status2 == 1) {
            $this->alerts = true;
        } else {
            DB::beginTransaction();

            try{

                $destroy->delete();
                DB::commit();
                $this->alert = true;


            }catch(\Exception $e){
                DB::rollback();
            $this->alerts = true;

            }
        }
    }

    public function resetIn()
    {
        $this->ind = null;
        $this->eng = null;
        $this->indSub =null;
        $this->engSub =null;
        $this->status =null;
        $this->slug =null;
        $this->desc =null;
        $this->view =null;
        $this->content =null;
        $this->models =null;
        $this->photo = null;
        $this->ids = null;
    }
}

<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\{Page, FrontNavbar};
use Livewire\WithFileUploads;


class Index extends Component
{
    use WithFileUploads;
    public $menu, $example, $openModals = false, $navlink;

    //var modals
    public $valueModals, $cover, $ind, $eng, $slug, $order, $status, $mode, $content;

    public function mount($idload, $navlink)
    {
        $this->menu = $idload;
        $this->navlink = $navlink;
    }

    public function render()
    {
        $collectdata = [
        'data' => Page::all(),
        'nav' => FrontNavbar::orderBy('order', 'ASC')->get(),
        'navhead' => FrontNavbar::find($this->menu),
        'navside' => FrontNavbar::find($this->navlink),
        ];

        return view('livewire.page.index', $collectdata);
    }

    public function tabs($id)
    {
       $this->menu = $id;
    }

    public function edit($id)
    {
        $this->openModals = true;
        $this->valueModals = FrontNavbar::find($id);
        $this->ind = $this->valueModals->indtitle;
        $this->eng = $this->valueModals->engtitle;
        $this->order = $this->valueModals->order;
        $this->slug = $this->valueModals->slug;
        $this->status = $this->valueModals->view;
        $this->mode = $this->valueModals->format;

    }

    public function closeModals()
    {
        $this->openModals = false;
    }

    public function update($id)
    {
        $this->validate([
            'ind' => 'required',
            'eng' => 'required',
        ]);

        if ($this->cover) {
            $newName = time() . '-' . $this->cover->getClientOriginalName();
            $this->cover->storeAs('public/imageStore',$newName);
        } else {
            $newName = null;
        }

        FrontNavbar::updateOrCreate(['id' => $id], [
            'indtitle' => $this->ind,
            'engtitle' => $this->eng,
            'order' => $this->order,
            'slug' => $this->slug,
            'view' => $this->status,
            'format' => $this->mode,
            'img' => $newName,
            'content' => $this->content
        ]);

        $this->openModals = false;

        session()->flash('message', 'Data updated successfully.');

    }

    public function navlink($id)
    {
        $this->navlink = $id;
    }

}

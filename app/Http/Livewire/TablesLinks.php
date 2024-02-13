<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TablesLinks extends LivewireDatatable
{
    public function builder()
    {
        return link::query();
    }

    public function columns()
    {
        return [
            Column::name('indtitle')->label('Title (Indonesia)')->searchable(),
            Column::name('engtitle')->label('Title (English)')->searchable(),
            Column::name('link')->label('link'),
            
            Column::callback(['id','indtitle', 'engtitle', 'link'], function ($id, $indtitle, $engtitle, $link) {
                return view('livewire.table-link', ['id' => $id , 'indtitle' => $indtitle, 'engtitle' => $engtitle, 'link'=> $link]);
            })->unsortable()
        ];
    }
    
}
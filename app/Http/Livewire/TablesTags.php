<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tag;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TablesTags extends LivewireDatatable
{
    public function builder()
    {
        return Tag::query();
    }

    public function columns()
    {
        return [
    		Column::name('name')->label('Title (Indonesia)')->searchable(),
    		Column::name('engtitle')->label('Title (English)')->searchable(),
    		Column::name('slug')->label('Slug'),
    		
            Column::callback(['id','name', 'engtitle', 'slug', 'keywords'], function ($id, $name, $engtitle, $slug, $keywords) {
                return view('livewire.table-tag', ['id' => $id , 'name' => $name, 'engtitle' => $engtitle, 'slug'=> $slug, 'keywords' => $keywords]);
            })->unsortable()
    	];
    }
}
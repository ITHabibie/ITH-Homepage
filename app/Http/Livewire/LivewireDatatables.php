<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatable
{
    // public $model = Post::class;

    public function builder()
    {
            return Post::query()->orderByDesc('posts.created_at');
    }

    function columns()
    {
    	return [
    		Column::name('title')->label('title')->truncate('50')->unsortable()->searchable(),
    		Column::name('engtitle')->label('engtitle')->truncate('50')->unsortable(),
    		Column::name('category.name')->label('Category')->searchable(),
    		// Column::name('gender')->label('Gender'),
    		// DateColumn::name('created_at')->label('Creation Date')
            Column::callback(['id'], function ($id) {
                return view('livewire.livewire-datatables', ['id' => $id]);
            })->unsortable()
    	];
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deteleCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been delete successfully!');
    }
    public function render()
    {
        $categories = Category::latest()->paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}

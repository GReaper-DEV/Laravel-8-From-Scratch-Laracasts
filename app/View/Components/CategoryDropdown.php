<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{

    public function render()
    {

        //It is used only in a component. 
        return view('components.category-dropdown',
            [
                'categories' => Category::all(),
                'currentCategory' => Category::firstWhere('slug', request('category'))
            ]);
    }
}

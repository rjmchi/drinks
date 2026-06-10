<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Drink;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{

    #[Layout('components.layouts.guest')]

    public $selected = '';
    public $search = '';
    public $catlist;

    public function mount($category='') {
        $this->catlist = Category::orderBy('name', 'asc')->get();
        if ($category){
            $this->selected=$category;
        }
    }

    public function render()
    {
        if ($this->selected){
            $cat = Category::where('id', $this->selected)->first();
            $data['select'] = $cat->name;
            $data['drinks'] = Drink::orderBy('name','asc')->where('category_id', $cat->id)->paginate(10);
        } else {
            $data['drinks'] = Drink::orderBy('name','asc')->paginate(10);
            $data['select'] = null;
        }
        return view('livewire.home-page', $data);
    }
}


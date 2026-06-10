<?php

namespace App\Livewire;

use App\Models\Drink;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';

    public function render()
    {
     
        if (strlen($this->search > 0))
        {
            $drinks = Drink::where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->get();
        }        
        return view('livewire.search-bar');
    }
}

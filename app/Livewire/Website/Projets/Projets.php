<?php

namespace App\Livewire\Website\Projets;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Projet;

class Projets extends Component
{
    use WithPagination;
    // public $perpage = 9;

    public function render()
    {
        return view('livewire.website.projets.projets', [
            // 'projets' => Projet::paginate($this->perpage),
            'projets' => Projet::get(),
        ]);
    }
}

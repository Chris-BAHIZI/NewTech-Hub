<?php

namespace App\Livewire\Website\Projets;

use App\Models\Projet;
use Livewire\Component;

class DetailsProjet extends Component
{
    public $proj, $projet;

    public function mount($projet)
    {
        $this->proj = Projet::where('slug', $projet)->first();
    }

    public function render()
    {
        return view('livewire.website.projets.details-projet');
    }
}

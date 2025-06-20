<?php

namespace App\Livewire\Website\Accueil;

use Livewire\Component;
use App\Models\Projet;

class Projets extends Component
{
    public function render()
    {
        return view('livewire.website.accueil.projets', [
            'projets' => Projet::get()->take(3),
        ]);
    }
}

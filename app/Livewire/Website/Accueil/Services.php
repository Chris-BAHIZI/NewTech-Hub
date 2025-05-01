<?php

namespace App\Livewire\Website\Accueil;

use Livewire\Component;
use App\Models\Service;

class Services extends Component
{
    public function render()
    {
        return view('livewire.website.accueil.services', [
            'vservices' => Service::get()->take(3),
        ]);
    }
}

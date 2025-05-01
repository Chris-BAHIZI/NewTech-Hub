<?php

namespace App\Livewire\Website\Services;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.website.services.services', [
            'services' => Service::paginate(30),
        ]);
    }
}

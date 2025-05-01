<?php

namespace App\Livewire\Website\Services;

use App\Models\Service;
use Livewire\Component;

class DetailsService extends Component
{
    public $slug, $service;

    public function mount(){
        $this->service = Service::where('slug', $this->slug)->first();
    }

    public function render()
    {
        return view('livewire.website.services.details-service');
    }
}

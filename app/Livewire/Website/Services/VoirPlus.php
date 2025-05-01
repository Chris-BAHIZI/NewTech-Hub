<?php

namespace App\Livewire\Website\Services;

use Livewire\Component;
use App\Models\Service;

class VoirPlus extends Component
{
    public $slug;

    public function render()
    {
        return view('livewire.website.services.voir-plus', [
            'vservices' => Service::where('id', '!=', Service::where('slug', $this->slug)->value('id'))->get()->take(3),
        ]);
    }
}

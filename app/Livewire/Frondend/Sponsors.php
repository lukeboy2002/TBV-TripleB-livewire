<?php

namespace App\Livewire\Frondend;

use App\Models\Sponsor;
use Livewire\Component;

class Sponsors extends Component
{
    public function render()
    {
        $sponsors = Sponsor::where('active', true)
            ->InRandomOrder()
            ->limit(5)
            ->get();

        return view('livewire.frondend.sponsors', [
            'sponsors' => $sponsors,
        ]);
    }
}

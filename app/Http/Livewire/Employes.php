<?php

namespace App\Http\Livewire;

use App\Models\Employe;
use Livewire\Component;

class Employes extends Component
{
    public $isOpen = 0;
    public $employe, $agr_id, $agr_nom, $agr_prn, $agr_resid;
    public function render()
    {
        $this->employe = Employe::all();
        return view('livewire.employes');
    }
}

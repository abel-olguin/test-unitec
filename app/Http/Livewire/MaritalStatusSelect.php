<?php

namespace App\Http\Livewire;

use App\Models\MaritalStatus;
use Livewire\Component;

class MaritalStatusSelect extends Component
{
    public $maritalStatuses,$maritalId;
    public function render()
    {
        $this->maritalStatuses = \App\Models\MaritalStatus::all();
        return view('livewire.marital-status-select');
    }
    
    public function mount($status = null)
    {
        if($status = intval($status)) $this->maritalId = $status;
    }
}

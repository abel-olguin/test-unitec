<?php

namespace App\Http\Livewire;

use App\Models\MaritalStatus;
use Livewire\Component;

class MaritalStatusSelect extends Component
{
    public $maritalStatuses,$maritalStatus;
    public function render()
    {
        $this->maritalStatuses = \App\Models\MaritalStatus::all();
        return view('livewire.marital-status-select');
    }
    
    public function mount($status = null)
    {
        if($status) $this->maritalStatus = MaritalStatus::find($status);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\InterestLevel;
use Livewire\Component;

class InterestLevelSelect extends Component
{
    public $interestLevel, $parents, $childs, $parentId, $childId;
    
    public function render()
    {
        $this->parents = InterestLevel::whereNull('owner_id')->get();
        $this->childs = InterestLevel::whereNotNull('owner_id')->get();
        return view('livewire.interest-level-select');
    }
    
    public function mount(InterestLevel $level = null)
    {
        $this->parentId = $level->owner_id?:$level->id;
        $this->childId = $level->owner_id?$level->id:null;
    }
    
    public function getParentProperty()
    {
        return InterestLevel::find($this->parentId);
    }
}

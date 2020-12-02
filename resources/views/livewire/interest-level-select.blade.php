<div>
    <select {{!$this->parent || !$this->parent->has_childs?'name=interest_level':''}} id="interest_level" class="form-input rounded-md shadow-sm block mt-1 w-full" required wire:model="parentId">
        <option value="{{null}}">Select one option</option>

        @foreach($parents as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>

    @if($this->parent && $this->parent->has_childs)
        <select name="interest_level" id="marital_status" class="form-input rounded-md shadow-sm block mt-1 w-full" required wire:model="childId">
            <option value="{{null}}">Select one option</option>
            @foreach($childs->where('owner_id',$this->parent->id)->all() as $child)
                <option value="{{$child->id}}">{{$child->name}}</option>
            @endforeach
        </select>
    @endif
</div>


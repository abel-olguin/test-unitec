<select name="marital_status" id="marital_status" class="form-input rounded-md shadow-sm block mt-1 w-full" required wire:model="maritalId">
    <option value="">Select one option</option>

    @foreach($maritalStatuses as $marital)
        <option value="{{$marital->id}}">{{$marital->name}}</option>
    @endforeach
</select>

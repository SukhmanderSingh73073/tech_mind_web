<div class="row">

<x-adminlte-select name="nationality" label="Nationality *" fgroup-class="col-md-6"  wire:model="nationality" enable-old-support>
@php ($nationalities = ["India"]);   
@foreach ($nationalities as $item)
        <option value="{{$item}}">{{$item}}</option>
    @endforeach
</x-adminlte-select>
<x-adminlte-select name="state" label="State *" fgroup-class="col-md-6" enable-old-support wire:init="loadInitialStates" wire:model="state">
@php ($states = ["Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Kerala","Madhya Pradesh","Maharashtra","Manipur","Mizoram","Nagaland","Odisha","Punjab","Tamil Nadu","Tripura","Uttarakhand","Uttar Pradesh","West Bengal","Andaman and Nicobar Islands","Chandigarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Lakshadweep","Puducherry"]);
@if (isset($states))
        @foreach ($states as $item)
            <option value="{{$item}}"  wire:key="{{ $item }}">{{$item}}</option>
        @endforeach
    @else 
        <option value="" disabled>Select a country first</option>
    @endif
</x-adminlte-select>
</div>

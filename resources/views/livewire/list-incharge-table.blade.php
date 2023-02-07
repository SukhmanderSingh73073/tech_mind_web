<div class="card">
    <div class="card-header">
        <h4 class="card-title">Office Incharges</h4>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="incharge-list-table" :heads="['S/N', 'Name','email','gender' , 'address', '', '']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($incharges as $incharge)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $incharge->name}}</td>
                    <td style="text-transform: none">{{ $incharge->email}}</td>
                    <td>{{$incharge->gender}}</td>
                    <td>{{$incharge->address}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/incharges/{{$incharge->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/incharges/{{$incharge->id}}')" data-url="incharges.edit" data-id="{{$incharge->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                    <td>
                        @livewire('delete-modal', ['modal_id' => $incharge->id ,"action" => route('incharges.destroy', $incharge->id), 'item_name' => $incharge->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

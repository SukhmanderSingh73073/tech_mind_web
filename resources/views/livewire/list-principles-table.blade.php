<div class="card">
    <div class="card-header">
        <h4 class="card-title">Principles</h4>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="principle-list-table" :heads="['S/N', 'Name','email','gender' , 'address', '', '']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($principles as $principle)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $principle->name}}</td>
                    <td style="text-transform: none">{{ $principle->email}}</td>
                    <td>{{$principle->gender}}</td>
                    <td>{{$principle->address}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/principles/{{$principle->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/principles/{{$principle->id}}')" data-url="principles.edit" data-id="{{$principle->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                    <td>
                        @livewire('delete-modal', ['modal_id' => $principle->id ,"action" => route('principles.destroy', $principle->id), 'item_name' => $principle->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

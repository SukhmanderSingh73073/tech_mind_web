<div class="card">
    <div class="card-header">
        <h4 class="card-title mr-5 mt-2">principles</h4>
        <form action={{ route("principles.create") }}>
    <x-adminlte-button type="submit" 
    label="Create New Principle"  theme="primary" 
    icon="fas fa-key"  />
    </form>
    
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="principle-list-table" 
        :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Edit','View','Lock','Approved', 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($principles as $principle)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $principle->name}}</td>
                    <td style="text-transform: none">{{ $principle->email}}</td>
                    <td>{{$principle->gender}}</td>
                    <td>{{$principle->address}}</td>
                    <td>{{$principle->status}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/principles/{{$principle->id}}/edit')"   >Edit</button>
                 
                    </td>
                     <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/principles/{{$principle->id}}')" data-url="principles.edit" data-id="{{$principle->id}}"  >View</button>
                </td>
                <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/principles/{{$principle->id}}')" data-url="principles.edit" data-id="{{$principle->id}}"  >Lock</button>
                </td>
                <td>
                        @livewire('withdraw-modal', ['modal_id' => $principle->id ,"action" => route('principles.destroy', $principle->id), 'item_name' => $principle->name])
                    </td>
                    
                    <td>
                        @livewire('delete-modal', ['modal_id' => $principle->id ,"action" => route('principles.destroy', $principle->id), 'item_name' => $principle->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

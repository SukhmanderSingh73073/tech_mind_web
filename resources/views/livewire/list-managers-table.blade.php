<div class="card">
    <div class="card-header">
        <h4 class="card-title">Managers</h4>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="manager-list-table" 
        :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Actions','Approved', 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($managers as $manager)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $manager->name}}</td>
                    <td style="text-transform: none">{{ $manager->email}}</td>
                    <td>{{$manager->gender}}</td>
                    <td>{{$manager->address}}</td>
                    <td>{{$manager->status}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/managers/{{$manager->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/managers/{{$manager->id}}')" data-url="managers.edit" data-id="{{$manager->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                <td>
                        @livewire('withdraw-modal', ['modal_id' => $manager->id ,"action" => route('managers.destroy', $manager->id), 'item_name' => $manager->name])
                    </td>

                    <td>
                        @livewire('delete-modal', ['modal_id' => $manager->id ,"action" => route('managers.destroy', $manager->id), 'item_name' => $manager->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

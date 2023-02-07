<div class="card">
    <div class="card-header">
        <h4 class="card-title">classteachers</h4>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="classteacher-list-table" :heads="['S/N', 'Name','email','gender' , 'address', '', '']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($classteachers as $classteacher)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $classteacher->name}}</td>
                    <td style="text-transform: none">{{ $classteacher->email}}</td>
                    <td>{{$classteacher->gender}}</td>
                    <td>{{$classteacher->address}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/classteachers/{{$classteacher->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/classteachers/{{$classteacher->id}}')" data-url="classteachers.edit" data-id="{{$classteacher->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                    <td>
                        @livewire('delete-modal', ['modal_id' => $classteacher->id ,"action" => route('classteachers.destroy', $classteacher->id), 'item_name' => $classteacher->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

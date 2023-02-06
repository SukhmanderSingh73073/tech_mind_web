<div class="card">
    <div class="card-header">
        <h4 class="card-title">Teachers</h4>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="teacher-list-table" :heads="['S/N', 'Name','email','gender' , 'address', '', '']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $teacher->name}}</td>
                    <td style="text-transform: none">{{ $teacher->email}}</td>
                    <td>{{$teacher->gender}}</td>
                    <td>{{$teacher->address}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/teachers/{{$teacher->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/teachers/{{$teacher->id}}')" data-url="teachers.edit" data-id="{{$teacher->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                    <td>
                        @livewire('delete-modal', ['modal_id' => $teacher->id ,"action" => route('teachers.destroy', $teacher->id), 'item_name' => $teacher->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

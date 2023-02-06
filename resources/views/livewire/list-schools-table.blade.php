<div class="card">
    <div class="card-header">
        <h4 class="card-title">
            Schools
        </h4>
    </div>
    <div class="my-3 card-body">
        <x-adminlte-datatable id="school-list-table" :heads="['S/N', 'Name','initials','Code' , 'address', '', '']" class='text-capitalize' bordered striped head-theme="dark" beautify>
            @foreach($schools as $school)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $school->name}}</td>
                    <td>{{ $school->initials}}</td>
                    <td>{{$school->code}}</td>
                    <td>{{$school->address}}</td>

                     <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/schools/{{$school->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/schools/{{$school->id}}')" data-url="schools.edit" data-id="{{$school->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                    <td>
                        @livewire('delete-modal', ['modal_id' => $school->id ,"action" => route('schools.destroy', $school->id), 'item_name' => $school->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

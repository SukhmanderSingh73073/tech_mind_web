<div class="card">
<div class='card-header row'>

<div class='col-6'>
        @livewire('school-set')
    </div>

    <div class='col-2'>
        <form action={{ route("schools.create") }}>
            <x-adminlte-button type="submit" label="Create New College" theme="primary"  />
        </form>
    </div>
   
</div>
    <div class="my-3 card-body">
        <x-adminlte-datatable id="school-list-table" 
        :heads="['S/N', 'Name','Contact no','Code' , 'address', 'Edit', 'View' ,'Lock' , 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify>
        @foreach($schools as $school)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $school->name}}</td>
                    <td>{{ $school->phone}}</td>
                    <td>{{$school->code}}</td>
                    <td>{{$school->address}}</td>

                     <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/schools/{{$school->id}}/edit')"   >Edit</i></button>
                     </td>
                     <td>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/schools/{{$school->id}}')" data-url="schools.edit" data-id="{{$school->id}}"  >View</button>
                </td>
                   
                <td>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/schools/{{$school->id}}')" data-url="schools.edit" data-id="{{$school->id}}"  >Lock</button>
                </td>
                    <td>
                        @livewire('delete-modal', ['modal_id' => $school->id ,"action" => route('schools.destroy', $school->id), 'item_name' => $school->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

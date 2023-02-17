<div class="card">
    <div class="card-header">
        <h4 class="card-title mr-5 mt-2">students</h4>
        <form action={{ route("students.create") }}>
    <x-adminlte-button type="submit" 
    label="Create New student"  theme="primary" 
    icon="fas fa-key"  />
    </form>


    
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="student-list-table" 
        :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Edit','View','Lock','Approved'
        , 'Delete']" class='text-capitalize'
        
         bordered striped head-theme="dark" 
         beautify 
         
         >
            @foreach($students as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $student->name}}</td>
                    <td style="text-transform: none">{{ $student->email}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->status}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/students/{{$student->id}}/edit')"   >Edit</button>
                 
                    </td>
                     <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/students/{{$student->id}}')" data-url="students.edit" data-id="{{$student->id}}"  >View</button>
                </td>
                <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/students/{{$student->id}}')" data-url="students.edit" data-id="{{$student->id}}"  >Lock</button>
                </td>
                <td>
                        @livewire('withdraw-modal', ['modal_id' => $student->id ,"action" => route('students.withdraw', $student->id), 'item_name' => $student->name])
                    </td>
                    
                    <td>
                        @livewire('delete-modal', ['modal_id' => $student->id ,"action" => route('students.destroy', $student->id), 'item_name' => $student->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

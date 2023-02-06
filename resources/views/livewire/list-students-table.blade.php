<div class="card">
    <div class="card-header">
        <h4 class="card-title">Student list</h4>
    </div>
    <div class="card-body">
        <x-adminlte-datatable id="school-list-table" :heads="['S/N', 'Name','Class','Section', 'email','gender' , 'address', '', '']" class='text-capitalize table-data' bordered striped head-theme="dark" beautify>
            @foreach($students as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $student->name}}</td>
                    <td>@isset ($student->studentRecord->myClass)
                        {{$student->studentRecord->myClass->name}}
                    @endisset</td>
                    <td>@isset($student->studentRecord->section)
                        {{$student->studentRecord->section->name}}
                    @endisset</td>
                    <td style="text-transform: none">{{ $student->email}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->address}}</td>


                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/students/{{$student->id}}/edit')"   ><i class="fas fa-pen"></i></button>
                  <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/students/{{$student->id}}')" data-url="students.edit" data-id="{{$student->id}}"  ><i class="fas fa-eye "></i></button>
                </td>
                   
                    <td>
                        @livewire('delete-modal', ['modal_id' => $student->id ,"action" => route('students.destroy', $student->id), 'item_name' => $student->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>

    
</div>

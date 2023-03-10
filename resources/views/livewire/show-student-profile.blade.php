@livewire('show-user-profile', ['user' => $student])
<div class="card">

    <div class="container card-body">
        <div class="row my-2">
            <h4 class="text-center col-12">Student information</h4>
            <table class="table col-12 table-bordered">
                @php
                    $studentRecord = $student->studentRecord()->withoutGlobalScopes()->first()
                @endphp
                <tbody class="">
                    <tr>
                        <th scope="row">
                           @if ($studentRecord->is_graduated == true)
                               Graduated From
                           @endif Class:</th>
                        <td>{{$studentRecord->myClass->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            @if ($studentRecord->is_graduated == true)
                               Graduated From
                            @endif Section:</th>
                        <td>{{$studentRecord->section->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Admission no:</th>
                        <td>{{$studentRecord->admission_number}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Admission Date:</th>
                        <td>{{$studentRecord->admission_date}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Graduated:</th>
                        @if ($studentRecord->is_graduated == 0)
                            <td>False</td>
                        @else
                            <td>True</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

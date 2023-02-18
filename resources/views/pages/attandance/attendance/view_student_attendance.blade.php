@extends('adminlte::page')

@section('title', __('Attendance'))


@section('content_header')

<h4>
    {{ __('Attendance') }}
</h4>

</dv>

@stop


@section('content')

<x-adminlte-input-date name="birthday" :config="['format' => 'YYYY/MM/DD']" label="Date of Birth *"  fgroup-class="col-md-3" autocomplete="off"/>


<div class="col-12">

    <x-adminlte-select name="school_id" onchange='changeHandler()'>
        @foreach ($class_data as $school)
        <option value="{{ $school }}">{{ $school['name'] }} </option>
        @endforeach
    </x-adminlte-select>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Present</th>
                        <th>Absent</th>
                        <th>Apply Leave</th>
                        <th>Half Day Leave</th>


                    </tr>
                </thead>

                <tbody>

                
                @csrf
                            @foreach ($class_data->iems_data as $user)


                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->p }}</td>
                                    <td>{{ $user->a }}</td>
                                    <td>{{ $user->al }}</td>
                                    <td>{{ $user->hdl }}</td>
                                    

                                    
                                </tr>
                            @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

<script>

function changeHandler(e) {
   
    
     //$class_data['iems_data']
     $class_data['iems_data'] = $class_data[0]['studentRecords'] ;
}

</script>
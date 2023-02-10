@extends('adminlte::page')

@section('title', __('Attendance'))


@section('content_header')

<h4 >
        {{ __('Attendance') }}
    </h4>
    
</dv>
    
@stop


@section('content')

<div class="card">
        <div class="card-header bg-success text-white">
            TimeTable
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm" id="printTable">
                    <thead>
                        <tr >

                            <th>user Name</th>
                            <th>user Position</th>
                            <th>user ID</th>
                            @php
                                $today = today();
                                $dates = [];
                                
                                for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
                                    $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                }
                                
                            @endphp
                            @foreach ($dates as $date)
                            <th style="">
                            
                                
                                    {{ $date }}
                            
                        </th>
                      

                            @endforeach

                        </tr>
                    </thead>

                    <tbody>





                        @foreach ($users as $user)

                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->position }}</td>
                                <td>{{ $user->id }}</td>






                                @for ($i = 1; $i < $today->daysInMonth + 1; ++$i)


                                    @php
                                        
                                        $date_picker = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                        
                                        $check_attd = \App\Models\Attendances::query()
                                            ->where('user_id', $user->id)
                                            ->where('attendance_date', $date_picker)
                                            ->first();
                                        
                                        $check_leave = \App\Models\Leaves::query()
                                            ->where('user_id', $user->id)
                                            ->where('leave_date', $date_picker)
                                            ->first();
                                        
                                    @endphp
                                    <td>

                                        <div class="form-check form-check-inline ">

                                            @if (isset($check_attd))
                                                 @if ($check_attd->status==1)
                                                 <i class="fa fa-check text-success"></i>
                                                 @else
                                                 <i class="fa fa-check text-danger"></i>
                                                 @endif
                                               
                                            @else
                                            <i class="fas fa-times text-danger"></i>
                                            @endif
                                        </div>
                                        <div class="form-check form-check-inline">
                                          
                                            @if (isset($check_leave))
                                            @if ($check_leave->status==1)
                                            <i class="fa fa-check text-success"></i>
                                            @else
                                            <i class="fa fa-check text-danger"></i>
                                            @endif
                                          
                                       @else
                                       <i class="fas fa-times text-danger"></i>
                                       @endif
                                        

                                        </div>

                                    </td>

                                @endfor
                            </tr>
                        @endforeach





                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection

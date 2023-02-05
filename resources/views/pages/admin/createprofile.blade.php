@extends('adminlte::page')

@section('title', __('Create admin'))


@section('content_header')
    <h1 class=" ">
        {{ __('Create Profile') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('admins.index'), 'text'=> 'admins'],
        ['href'=> route('admins.admin_create_profile'), 'text'=> 'create', 'active'],
    ]])


    

@stop

@section('content') 
<x-adminlte-select onchange="changeHandler()" id="select_id"
name="role_type" label="Select Role Here *" fgroup-class="tttt col-md-3" enable-old-support>
        @php ($occupations = ['Admin' , 'Teacher' ,'Student'])
        @foreach ($occupations as $occupation)
            <option  value="{{$occupation}}" >{{$occupation}}</option>
        @endforeach
    </x-adminlte-select>

  
    <div id="admin" >
    @livewire('create-admin-form')
    </div>
    <div id="teacher" class="d-none">
    @livewire('create-teacher-form')
    </div>
    <div id="student" class="d-none">
    @livewire('create-student-form')
    </div>
    


    @livewire('display-status')
    
    
    adminlte

    <script>
function changeHandler() {
    d = document.getElementById("select_id").value;
    if(d=="Admin"){
        document.getElementById("admin").classList.remove('d-none');
        document.getElementById("teacher").classList.add('d-none');
        document.getElementById("student").classList.add('d-none');
    }else if(d=="Teacher"){
        document.getElementById("admin").classList.add('d-none');
        document.getElementById("teacher").classList.remove('d-none');
        document.getElementById("student").classList.add('d-none');
    
    }else if(d=="Student"){
        document.getElementById("admin").classList.add('d-none');
        document.getElementById("teacher").classList.add('d-none');
        document.getElementById("student").classList.remove('d-none');
    
    }
   
}
</script>

@stop
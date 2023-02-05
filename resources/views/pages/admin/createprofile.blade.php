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
<x-adminlte-select 
onchange="changeHandler"
name="role_type" label="Select Role Here *" fgroup-class="col-md-3" enable-old-support>
        @php ($occupations = ['Admin' , 'Teacher' ,'Student'])
        @foreach ($occupations as $occupation)
            <option  value="{{$occupation}}" >{{$occupation}}</option>
        @endforeach
    </x-adminlte-select>

  
    @livewire('create-admin-form')
    @livewire('display-status')
    <scrip>
        function changeHandler(e){
            console.log("Tests ",e)
        }
    </scrip>
@stop
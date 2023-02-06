@extends('adminlte::page')

@section('title', __('teachers'))


@section('content_header')
    <h1 class=""> 
        {{ __('Teachersddddd') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('teachers.index'), 'text'=> 'teachers', 'active'],
    ]])

@stop

@section('content') 

<div style='text-align:right' class='col-12'>
    <row>
    
    <form action={{ route("teacher.create") }}>
    <x-adminlte-button type="submit" label="Create New Teacher"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    
    </row>
                
      </div>
@livewire('school-set')

@livewire('list-teachers-table')
    
    @livewire('display-status')
@stop

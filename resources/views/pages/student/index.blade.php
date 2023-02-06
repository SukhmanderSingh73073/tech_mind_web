@extends('adminlte::page')

@section('title', __('Students'))


@section('content_header')
    <h1 class="">
        {{ __('Students') }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [['href' => route('dashboard'), 'text' => 'Dashboard'], ['href' => route('students.index'), 'text' => 'Students', 'active']]])

@stop

@section('content') 
<div style='text-align:right' class='col-12'>
    <row>
    
    <form action={{ route("students.create") }}>
    <x-adminlte-button type="submit" label="Create New Student"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    
    </row>
                
      </div>
@livewire('school-set')
    @livewire('list-students-table')

    @livewire('display-status')
    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop

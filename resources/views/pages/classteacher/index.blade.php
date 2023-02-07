@extends('adminlte::page')

@section('title', __('classteachers'))


@section('content_header')
    <h1 class=""> 
        {{ __('classteachers') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('classteachers.index'), 'text'=> 'classteachers', 'active'],
    ]])

@stop

@section('content') 

<div style='text-align:right' class='col-12'>
    <row>
    
    <form action={{ route("classteachers.create") }}>
    <x-adminlte-button type="submit" label="Create New classteacher"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    
    </row>
                
      </div>
@livewire('school-set')

@livewire('list-class-teachers-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop

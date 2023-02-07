@extends('adminlte::page')

@section('title', __('teachers'))


@section('content_header')
<h4 class=""> 
        {{ __('Teachers') }}
    </h4>

   {{--    <h1 class=""> 
        {{ __('Teachers') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('teachers.index'), 'text'=> 'teachers', 'active'],
    ]])
    --}}

@stop

@section('content') 

@livewire('school-set')

@livewire('list-teachers-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop

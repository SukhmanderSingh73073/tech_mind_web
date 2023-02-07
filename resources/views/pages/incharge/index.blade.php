@extends('adminlte::page')

@section('title', __('incharges'))


@section('content_header')
    <h1 class=""> 
        {{ __('incharges') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges', 'active'],
    ]])

@stop

@section('content') 

<div style='text-align:right' class='col-12'>
    <row>
    
    <form action={{ route("incharges.create") }}>
    <x-adminlte-button type="submit" label="Create New office_incharge"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    
    </row>
                
      </div>
@livewire('school-set')

@livewire('list-incharge-table')
    
    @livewire('display-status')

    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@stop

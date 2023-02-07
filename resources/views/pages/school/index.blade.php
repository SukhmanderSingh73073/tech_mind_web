@extends('adminlte::page')

@section('title', __('Manage Schools'))

@section('content_header')
    <h4 class="">
        {{ __('Manage Schools') }}
    </h4>

    {{-- @livewire('show-set-school') 
     @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('schools.index'), 'text'=> 'Manage Schools' , 'active']
    ]])  
    --}}
@endsection

@section('content')

    @livewire('school-set')
    
    @livewire('list-schools-table')

    @livewire('display-status')
    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@endsection

@extends('adminlte::page')

@section('title', __('Manage Schools'))

@section('content_header')
    <h4 class="">
        {{ __('Manage Schools') }}
    </h4>

 
@endsection

@section('content')

    
    @livewire('list-schools-table')

    @livewire('display-status')
    <script>
        function actionHandle(url){
            window.open(window.location.origin+url,"_self")
        }
    </script>
@endsection

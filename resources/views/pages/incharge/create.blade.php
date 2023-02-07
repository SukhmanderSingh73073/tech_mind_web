@extends('adminlte::page')

@section('title', __('Create office_incharge'))


@section('content_header')
    <h1 class=""> 
        {{ __('Create office_incharge') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges'],
        ['href'=> route('incharges.create'), 'text'=> 'create', 'active'],
    ]])

@stop

@section('content') 
    @livewire('create-incharge-form')

    @livewire('display-status')
@stop

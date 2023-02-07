@extends('adminlte::page')

@section('title', __('Create manager'))


@section('content_header')
    <h1 class=""> 
        {{ __('Create manager') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('managers.index'), 'text'=> 'managers'],
        ['href'=> route('managers.create'), 'text'=> 'create', 'active'],
    ]])

@stop

@section('content') 
    @livewire('create-manager-form')

    @livewire('display-status')
@stop

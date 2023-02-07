@extends('adminlte::page')

@section('title', __("Edit $manager->name"))

@section('content_header')
    <h1 class="">
        {{ __("Edit $manager->name") }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('managers.index'), 'text'=> 'managers' , ],
        ['href'=> route('managers.edit', $manager->id), 'text'=> "Edit $manager->name" , 'active']
    ]])
@endsection

@section('content')

@livewire('edit-manager-form', ['manager' => $manager])

@livewire('display-status')

@endsection

@extends('adminlte::page')

@section('title', __("Edit $principle->name"))

@section('content_header')
    <h1 class="">
        {{ __("Edit $principle->name") }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('principles.index'), 'text'=> 'principles' , ],
        ['href'=> route('principles.edit', $principle->id), 'text'=> "Edit $principle->name" , 'active']
    ]])
@endsection

@section('content')

@livewire('edit-principle-form', ['principle' => $principle])

@livewire('display-status')

@endsection

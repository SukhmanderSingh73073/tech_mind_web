@extends('adminlte::page')

@section('title', __("Edit $classteacher->name"))

@section('content_header')
    <h1 class="">
        {{ __("Edit $classteacher->name") }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('classteachers.index'), 'text'=> 'classteachers' , ],
        ['href'=> route('classteachers.edit', $classteacher->id), 'text'=> "Edit $classteacher->name" , 'active']
    ]])
@endsection

@section('content')

@livewire('edit-class-teacher-form', ['classteacher' => $classteacher])

@livewire('display-status')

@endsection

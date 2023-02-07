@extends('adminlte::page')

@section('title', __("Edit $office_incharge->name"))

@section('content_header')
    <h1 class="">
        {{ __("Edit $office_incharge->name") }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges' , ],
        ['href'=> route('incharges.edit', $office_incharge->id), 'text'=> "Edit $office_incharge->name" , 'active']
    ]])
@endsection

@section('content')

@livewire('edit-incharge-form', ['office_incharge' => $office_incharge])

@livewire('display-status')

@endsection

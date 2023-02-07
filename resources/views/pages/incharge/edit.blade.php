@extends('adminlte::page')

@section('title', __("Edit $incharge->name"))

@section('content_header')
    <h1 class="">
        {{ __("Edit $incharge->name") }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges' , ],
        ['href'=> route('incharges.edit', $incharge->id), 'text'=> "Edit $incharge->name" , 'active']
    ]])
@endsection

@section('content')

@livewire('edit-incharge-form', ['incharge' => $incharge])

@livewire('display-status')

@endsection

@extends('adminlte::page')

@section('title', __("$office_incharge->name's profile"))

@section('content_header')
    <h1 class="">
        {{ __("$office_incharge->name's profile") }}
    </h1>

    @livewire('show-set-school')

    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('incharges.index'), 'text'=> 'incharges'],
        ['href'=> route('incharges.show', $office_incharge->id), 'text'=> "View $office_incharge->name's profile", 'active'],
    ]])
@endsection

@section('content')

    @livewire('show-incharge-profile', ['office_incharge' => $office_incharge])

    @livewire('display-status')

    
@endsection

@extends('adminlte::page')

@section('title', __('Admins'))


@section('content_header')
    <h1 class=""> 
        {{ __('Admins') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('admins.index'), 'text'=> 'admins', 'active'],
    ]])

@stop

@section('content') 
@livewire('school-set')
<div style='text-align:right' class='col-12'>
    <row>
    
    <form action={{ route("admins.create") }}>
    <x-adminlte-button type="submit" label="Create New Admin"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    
    </row>
                
      </div>
      

    @livewire('list-admins-table')
    @livewire('display-status')
@stop

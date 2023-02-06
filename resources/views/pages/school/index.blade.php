@extends('adminlte::page')

@section('title', __('Manage Schools'))

@section('content_header')
    <h1 class="">
        {{ __('Manage Schools') }}
    </h1>

    @livewire('show-set-school')
    
    @livewire('breadcrumbs', ['paths' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('schools.index'), 'text'=> 'Manage Schools' , 'active']
    ]])
@endsection

@section('content')
<div style='text-align:right' class='col-12'>
    <row>
    
    <form action={{ route("school.create") }}>
    <x-adminlte-button type="submit" label="Create New School"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    
    </row>
                
      </div>
    @livewire('school-set')
    
    @livewire('list-schools-table')

    @livewire('display-status')
@endsection

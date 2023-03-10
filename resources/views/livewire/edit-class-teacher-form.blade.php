<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit classteacher {{$classteacher->name}}</h3>
    </div>
    <div class="card-body">
        <form action="{{route('classteachers.update', $classteacher->id)}}" method="POST" enctype="multipart/form-data">
            @livewire('edit-user-fields', ['role' => 'classteacher', 'user'=> $classteacher]
            )
                @csrf
                @method('put')
                <div class='col-12 my-2'>
                    <x-adminlte-button label="Edit" theme="primary" icon="fas fa-pen" type="submit" class="col-md-3"/>
                </div>
        </form>
    </div>
</div>
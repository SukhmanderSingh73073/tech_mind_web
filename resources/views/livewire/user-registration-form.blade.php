<div class="card">
    @isset($roles)
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        <div class="card-body" >
            <x-adminlte-select
             
            name="role"  enable-old-support 
            class="text-capitalize d-none">    
                    @foreach ($roles as $item)
                        <option value="{{$item['id']}}" >{{$item['name']}}</option>
                    @endforeach
            </x-adminlte-select>
            <x-adminlte-input name="school_code" label="School Code *" placeholder="School Code" fgroup-class="col-md-12" enable-old-support/>
            <x-adminlte-select name="school" fgroup-class="d-none"
            enable-old-support class="text-capitalize">    
                    @foreach ($schools as $item)
                        <option value="{{$item['id']}}" >{{$item['name']}} - {{$item['address']}}</option>
                    @endforeach
            </x-adminlte-select>
            @livewire('create-user-fields')
            @csrf
            <div class='col-12 my-2'>
                <x-adminlte-button label="Register" theme="primary" icon="fas fa-key" type="submit" class="col-md-3"/>
            </div>
            <p class="my-4 text-center">
                Already have an account? <a href="{{route('login')}}">Login here</a>
            </p> 
        </div>
    </form>
    @else
        Couldn't create user, Roles not found.
    @endisset
    <hr>
   
    
</div>

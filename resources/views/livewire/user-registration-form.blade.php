<div class="card">
    @isset($roles)
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <x-adminlte-select name="role" enable-old-support class="text-capitalize d-none">
                @foreach ($roles as $item)
                <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </x-adminlte-select>

            <div class="row">
                <x-adminlte-input id="code" onchange="getSchool(this)" name="school_code" label="School Code *" placeholder="School Code" fgroup-class="col-md-2" enable-old-support />
                <x-adminlte-input readonly id="school_name" name="school_nae" label="School Name" placeholder="School Code" fgroup-class="col-md-10" value="school Name" enable-old-support />
            </div>


            <x-adminlte-select name="school" fgroup-class="d-none" enable-old-support class="text-capitalize">
                @foreach ($schools as $item)
                <option value="{{$item['id']}}">{{$item['name']}} - {{$item['address']}}</option>
                @endforeach
            </x-adminlte-select>
            @livewire('create-user-fields')
            @csrf
            <div class='col-12 my-2'>
                <x-adminlte-button label="Register" theme="primary" icon="fas fa-key" type="submit" class="col-md-3" />
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


<script>
    function getSchool() {
        //XlwJ0Zqa7f
        var w = $("#code").val();
        if (w.length == 10) {
            $.ajax({
                type: 'GET',
                url: '/get_school_name?q=' + $("#code").val(),
                data: '_token = <?php echo csrf_token() ?>',
                success: function(data) {
                    $("#school_name").val("");
                    $("#school_name").val(data.name);
                }
            });
        }
    }
</script>
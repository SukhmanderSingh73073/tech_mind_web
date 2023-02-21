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
                <x-adminlte-input maxlength='11' id="code" onchange="getSchool(this)" name="school_code" label="School Code *" placeholder="School Code" fgroup-class="col-md-2" enable-old-support />
                <x-adminlte-input class="d-none" id="school_id" name="school_id" fgroup-class="col-md-0"  />
                <x-adminlte-input readonly id="school_name" name="school_nae" label="School Name" placeholder="School Code" fgroup-class="col-md-10"  enable-old-support />
            </div>
            <x-adminlte-select name="school" fgroup-class="d-none" enable-old-support class="text-capitalize">
                @foreach ($schools as $item)
                <option value="{{$item['id']}}">{{$item['name']}} - {{$item['address']}}</option>
                @endforeach
            </x-adminlte-select>
            @livewire('create-user-fields')
            @csrf

            <div class="row">
               

            </div>

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



function getClassSections() {
    
    $.ajax({
                type: 'GET',
                url: '/get_class_sections?class_id=' + $("#select_class").val(),
                data: '_token = <?php echo csrf_token() ?>',
                success: function(data) {
                    
                    var select = document.getElementById("select_section");
                    for (var i = 0, n = data.length; i < n; i++) {
                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id ;
                        select.appendChild(option);
                    }
                }
            });
}

    function getSchool() {
        var w = $("#code").val();
        var apiCall = false;
        if (w.length == 10) {
            //document.getElementById("select_class").style.visibility="visible";
           // document.getElementById("select_section").style.visibility="visible";    
            apiCall = true;
        } else if (w.length == 11) {
            apiCall = true;
            if(w[w.length-1] == 'S'){
              //  document.getElementById("select_class").style.visibility="hidden";
               // document.getElementById("select_section").style.visibility="hidden";
                      
            }

        }

        if (apiCall) {
            $.ajax({
                type: 'GET',
                url: '/get_school_name?q=' + $("#code").val(),
                data: '_token = <?php echo csrf_token() ?>',
                success: function(data) {
                    $("#school_name").val("");
                    $("#school_id").val("");
                    $("#school_name").val(data.name);

                    $("#school_id").val(data.id);

                    var select = document.getElementById("select_class");
                    for (var i = 0, n = data.classes.length; i < n; i++) {
                        var option = document.createElement("option");
                        option.text = data.classes[i].name;
                        option.value = data.classes[i].id ;
                        select.appendChild(option);
                    }

                    getClassSections();



                }
            });
        }


    }
</script>
{{--@if(count($errors))--}}
@if($errors->any())
    <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show"
         role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span>
        </button>
        <i class="material-icons list-icon">not_interested</i>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('success'))
    <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <i class="material-icons list-icon">check_circle</i>
        <strong>{{ session('success') }}</strong>
    </div>
@endif





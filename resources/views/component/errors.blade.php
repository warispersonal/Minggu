<div class="row pb-5">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="col-md-12">
                <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif
</div>

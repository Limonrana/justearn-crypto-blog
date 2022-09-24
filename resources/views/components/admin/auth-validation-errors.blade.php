@props(['errors'])

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>OOPS! {{ $error }}</strong>
        </div>
    @endforeach
@endif

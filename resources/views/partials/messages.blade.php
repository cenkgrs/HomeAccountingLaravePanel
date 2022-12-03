@if (Session::has('success_message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('success_message') }}
    </div>
@endif

@if (Session::has('error_message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('error_message') }}
    </div>
@endif

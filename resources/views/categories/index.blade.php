@extends('index')

@section('content')

<div id="category-page">

    @include('categories.partials.insert')

    @include('categories.partials.list')

    @include('categories.partials.edit')

</div>

<script>
    $(document).ready(function() {
        $(".edit-button").on('click', function(){
            var category = $(this).data('category');
            console.log(category);
            $("#name").val(category['name']);
            $("#category_id").val(category['id']);
        })
    });

</script>

@endsection
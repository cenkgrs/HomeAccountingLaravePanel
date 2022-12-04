@extends('index')

@section('content')

<div id="expenses-page">

    @include('expenses.partials.insert')

    @include('expenses.partials.list')

    @include('expenses.partials.edit')

</div>

<script>
    $(document).ready(function() {
        $(".edit-button").on('click', function(){
            var expense = $(this).data('expense');

            $("#expense").val(expense['expense']);
        })
    });

</script>

@endsection
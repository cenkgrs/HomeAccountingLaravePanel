@extends('index')

@section('content')

<div id="budgets-page">

    @include('budgets.partials.insert')

    @include('budgets.partials.list')

    @include('budgets.partials.edit')

</div>

<script>
    $(document).ready(function() {
        $(".edit-button").on('click', function(){
            var budget = $(this).data('budget');

            $("#budget_name").val(budget['name']);
            $("#budget_id").val(budget['id']);
            $("#budget_amount").val(budget['amount']);
        })
    });

</script>

@endsection
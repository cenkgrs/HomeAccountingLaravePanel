@extends('index')

@section('content')

<div id="budgets-page">

    @include('cards.partials.list')

    @include('cards.partials.insert')


    @include('cards.partials.edit')

</div>

<script>
    $(document).ready(function() {
        $(".edit-button").on('click', function(){
            var card = $(this).data('card');

            $("#card_name").val(card['name']);
            $("#card_type option[value='"+ card['type'] +"']").prop('selected', true);
            $("#card_limit").val(card['limit']);
            $("#card_id").val(card['id']);
        })
    });

</script>

@endsection
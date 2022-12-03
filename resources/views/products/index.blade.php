@extends('index')

@section('content')

@include('products.partials.filter')

@include('products.partials.insert')

<div class="row">
    <div class="col-lg-12 col-xs-12 ">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col"> {{ ucwords($column) }}</th>
                        @endforeach
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="operation" value="delete">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <tr>
                              
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->Categories['name'] }}</td>
                                <td>{{ $product->Firm['name'] }}</td>
                                <td>
                                    <button type="button" name="edit" data-product="{{ $product }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button> 
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>

            {!! $products->links() !!}
        </div>
    </div>
</div>

@include('products.partials.edit')


<script>
    $(document).ready(function() {
        $(".edit-button").on('click', function(){
            var product = $(this).data('product');
            $("#code").val(product['code']);
            $("#name").val(product['name']);
            $("#price").val(product['price']);
            $("#product_id").val(product['id']);
        })
    });

</script>

@endsection
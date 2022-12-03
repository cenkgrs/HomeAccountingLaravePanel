@extends('index')

@section('content')

    @include('bookings.partials.filter')

    <div class="row">
        <div class="col-lg-12 col-xs-12 ">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Product</th>
                            <th scope="col">Product Code</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Total_price</th>
                            <th scope="col">Firm</th>
                            <th scope="col">Category</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Operation</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="operation" value="delete">
                                <input type="hidden" name="id" value="{{ $booking->id }}">
                                <tr>
                                
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->product['name'] }}</td>
                                    <td>{{ $booking->product['code'] }}</td>
                                    <td>{{ $booking->amount }}</td>
                                    <td>{{ $booking->total_price }}</td>
                                    <td>{{ $booking->product->firm['name'] }}</td>
                                    <td>{{ $booking->product->categories['name'] }}</td>
                                    <td>{{ $booking->updated_at }}</td>
                                    <td>{{ $booking->created_at }}</td>

                                    <td>
                                        <button type="button" name="edit" data-product="{{ $booking }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button> 
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>

                {!! $bookings->links() !!}
            </div>
        </div>
    </div>
@endsection

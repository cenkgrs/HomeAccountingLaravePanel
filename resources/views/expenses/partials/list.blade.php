
<h2 class="mt-5 mb-5">Harcamalar</h2>

<div class="row">
    <div class="col-lg-12 col-xs-12 ">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col"> {{ ucwords($column) }}</th>
                        @endforeach
                        <th scope="col">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $expense)
                        <form action="{{ route('expenses') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="method" value="delete">
                            <input type="hidden" name="id" value="{{ $expense->id }}">
                            <tr>
                                <td>{{ $expense->id }}</td>
                                <td>{{ $expense->budget->name }}</td>
                                <td>{{ $expense->category->name }}</td>

                                <td>{{ $expense->expense }}</td>
                                <td>{{ $expense->price }}</td>
                                <td>{{ humanizedDate($expense->expense_date) }}</td>
                                <td>{{ humanizedDate($expense->created_at) }}</td>
                                <td>{{ humanizedDate($expense->updated_at) }}</td>
                                <td>
                                    <button type="button" data-expense="{{ $expense }}" data-id="{{ $expense->id }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="submit" name="delete" class="btn btn-danger" text="Sil"><i class="fas fa-trash-alt"></i></button> 
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>

            {!! $expenses->links() !!}
        </div>
    </div>
</div>


<h2 class="mt-5 mb-5">Bütçe Girdileri</h2>

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
                    @foreach($budgets as $budget)
                        <form action="{{ route('budgets') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="method" value="delete">
                            <input type="hidden" name="id" value="{{ $budget->id }}">
                            <tr>
                                <td>{{ $budget->id }}</td>
                                <td>{{ $budget->name }}</td>
                                <td>{{ $budget->amount }}</td>
                                <td>{{ humanizedDate($budget->created_at) }}</td>
                                <td>{{ humanizedDate($budget->updated_at) }}</td>
                                <td>
                                    <button type="button" data-budget="{{ $budget }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="submit" name="delete" class="btn btn-danger" text="Sil"><i class="fas fa-trash-alt"></i></button> 
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>

            {!! $budgets->links() !!}
        </div>
    </div>
</div>

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
                    @foreach($categories as $category)
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="operation" value="delete">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <tr>
                              
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    <button type="button" data-category="{{ $category }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="submit" name="delete" class="btn btn-danger" text="Sil"><i class="fas fa-trash-alt"></i></button> 
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>

            {!! $categories->links() !!}
        </div>
    </div>
</div>

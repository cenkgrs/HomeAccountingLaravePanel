<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Harcama Düzenle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('expenses') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="method" value="update">
                    <input type="hidden" name="id" id="expense_id" value="">
                    
                    <div class="row">
                        <div class="col-md-4 col-xs-12 mb-3">
                            <label for="name">Harcama</label>
                            <input name="expense" type="text" id="expense" class="form-control">
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <label for="budget">Bütçe</label>
                            <select name="budget_id" id="budget_id" class="form-control">
                                @foreach ($budgets as $budget)
                                    <option value="{{ $budget->id }}">{{ $budget->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <label for="category">Kategori</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="price">Tutar</label>
                            <input name="price" type="text" class="form-control" id="price">
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <label for="expense_date">İşlem Tarihi</label>
                            <input type="date" name="expense_date" id="expense_date" class="form-control">
                        </div>
                       
                        <div class="col-md-4 col-xs-12 mt2">
                            <button type="submit" class="btn btn-primary btn-block pull-right">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
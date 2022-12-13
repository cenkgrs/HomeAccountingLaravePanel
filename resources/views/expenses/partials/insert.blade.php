<div class="box">
    <div class="box-header" data-box="insert">
        Harcama Ekle
    </div>
    <div class="box-body" id="insert-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <form action="{{ route('expenses') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="method" value="insert">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <label for="expense">Harcama</label>
                            <input name="expense" type="text" class="form-control">
                        </div>

                        <div class="col-md-2 col-xs-12">
                            <label for="budget">Bütçe</label>
                            <select name="budget_id" id="" class="form-control">
                                @foreach ($budgets as $budget)
                                    <option value="{{ $budget->id }}">{{ $budget->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2 col-xs-12">
                            <label for="category">Kategori</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="price">Tutar</label>
                            <input name="price" type="text" class="form-control">
                        </div>

                        <div class="col-md-2 col-xs-12">
                            <label for="expense_date">İşlem Tarihi</label>
                            <input type="date" name="expense_date" id="expense_date" class="form-control">
                        </div>

                        <div class="col-md-2 col-xs-12 mt2">
                            <button type="submit" class="btn btn-primary btn-block pull-right">Ekle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</div>

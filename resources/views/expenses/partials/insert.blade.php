<div class="box">
    <div class="box-header" data-box="insert">
        Harcama Ekle
    </div>
    <div class="box-body" id="insert-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <form action="{{ route('budgets') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="method" value="insert">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <label for="expense">Harcama</label>
                            <input name="expense" type="text" class="form-control">
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="pricd">Tutar</label>
                            <input name="pricd" type="text" class="form-control">
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

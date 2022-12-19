<div class="row mt-5">
    <div class="col-lg-12 col-xs-12">
        <form action="{{ route('budgets') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="method" value="insert">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <label for="name">Bütçe Girdisi İsmi</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="col-md-2 col-xs-12">
                    <label for="amount">Bütçe Miktarı</label>
                    <input name="amount" type="text" class="form-control">
                </div>
                <div class="col-md-2 col-xs-12 mt2">
                    <button type="submit" class="btn btn-primary btn-block pull-right">Ekle</button>
                </div>
            </div>
        </form>
    </div>
</div>

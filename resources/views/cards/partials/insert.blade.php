<div class="row mt-5">
    <div class="col-lg-12 col-xs-12">
        <form action="{{ route('cards') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="method" value="insert">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <label for="name">Kart İsmi</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="col-md-2 col-xs-12">
                    <label for="type">Kart Tipi</label>
                    <select name="type" class="form-control">
                        <option value="credit_card">Kredi Kartı</option>
                        <option value="salary_card">Maaş Kartı</option>
                        <option value="virtual_card">Sanal Kart</option>
                    </select>
                </div>
                <div class="col-md-2 col-xs-12">
                    <label for="limit">Kart Limiti</label>
                    <input name="limit" type="text" class="form-control">
                </div>
                <div class="col-md-2 col-xs-12 mt2">
                    <button type="submit" class="btn btn-primary btn-block pull-right">Ekle</button>
                </div>
            </div>
        </form>
    </div>
</div>

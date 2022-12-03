<div class="box">
    <div class="box-header" data-box="insert">
        Kategori Ekle
    </div>
    <div class="box-body" id="insert-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <form action="" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="operation" value="insert">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <label for="name">Kategori İsmi</label>
                            <input name="name" type="text" class="form-control">
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

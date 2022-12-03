<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kategori Düzenle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="operation" value="insert">
                    
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <label for="name">Kategori İsmi</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="col-md-3 col-xs-12 mt2">
                            <button type="submit" class="btn btn-primary btn-block pull-right">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-primary">Kaydet</button>
            </div>
        </div>
    </div>
</div>
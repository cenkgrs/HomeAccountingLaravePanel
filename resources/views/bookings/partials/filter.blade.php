<div class="box">
    <div class="box-header" data-box="filter">
        Filter
    </div>
    <div class="box-body" id="filter-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <form action="" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="operation" value="filter">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <label>ID</label>
                            <input name="id" type="text" class="form-control">
                        </div>
                        <div class="col-md-2 col-xs-12 mt2">
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</div>

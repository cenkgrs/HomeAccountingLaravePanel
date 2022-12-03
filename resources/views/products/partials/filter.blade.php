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
                        <div class="col-md-2 col-xs-12">
                            <label for="code">Product Code</label>
                            <input name="code" type="text" class="form-control">
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="name">Product Name</label>
                            <input name="name" type="text"  class="form-control">
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="0" selected>All</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="firm">Firm</label>
                            <select name="firm_id" class="form-control">
                                <option value="0">All</option>
                                @foreach($firms as $firm)
                                    <option value="{{ $firm->id }}">{{ $firm->name }}</option>
                                @endforeach
                            </select>
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

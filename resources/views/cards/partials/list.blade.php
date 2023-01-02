
<h2 class="mt-5 mb-5">Kartlar</h2>

<div class="row">
    <div class="col-lg-12 col-xs-12 ">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kart İsmi</th>
                        <th>Kart Tipi</th>
                        <th>Kart Limiti</th>
                        <th>Kart Borcu</th>
                        <th scope="col">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cards as $card)
                        <form action="{{ route('cards') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="method" value="delete">
                            <input type="hidden" name="id" value="{{ $card->id }}">
                            <tr>
                                <td>{{ $card->id }}</td>
                                <td>{{ $card->name }}</td>
                                <td>{{ cardType($card->type) }}</td>
                                <td>{{ $card->limit }}</td>
                                <td>{{ $card->debt }}</td>
                                <td>
                                    <button type="button" data-card="{{ $card }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="submit" name="delete" class="btn btn-danger" text="Sil"><i class="fas fa-trash-alt"></i></button> 
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>

            {!! $cards->links() !!}
        </div>
    </div>
</div>

<h1>Inkoop</h1>

<ul>
    @foreach($products as $product)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">naam</th>
                <th scope="col">prijs</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><a href="{{route('inkoop.show', $product)}}">{{$product->id}}</a></th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td class="buttons d-flex">
                    <a class="btn btn-warning" href="{{route('inkoop.edit' , $product)}}">aanpassen</a>
                    <form method="POST" action="{{route('inkoop.destroy', $product)}}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="delete">
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
        <a class="btn btn-warning" href="{{route('inkoop.create')}}">Product aanmaken</a>
</ul>

<div>

    <h3 style="color: white;">zoek een item</h3>
    <p style="color: white;">U zoekt nu op: {{$searchWord}}</p>
    <input wire:model="searchWord" wire:keyup="search()" type="text" class="form-control" style="border-radius: 0.375rem">
    <h4 style="color: white;">gevonden items</h4>

    <ul class="list-group">
        @foreach($searchResults as $product)
            <li class="list-group-item">{{$product->name}}</li>
        @endforeach
    </ul>
</div>


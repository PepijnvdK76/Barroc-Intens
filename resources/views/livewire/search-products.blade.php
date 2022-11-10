<div>

    <h3 style="color: black;">zoek een item</h3>
    <p style="color: black;">U zoekt nu op: {{$searchWord}}</p>
    <input wire:model="searchWord" wire:keyup="search()" type="text" class="form-control" style="border-radius: 0.375rem">
    <h4 style="color: black;">gevonden items</h4>

    <ul class="list-group">
        @foreach($searchResults as $product)
            <li class="list-group-item">{{$product->name}}</li>
        @endforeach
    </ul>
</div>


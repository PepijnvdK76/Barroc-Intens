<h1>Producten</h1>
<h2>pas een product aan</h2>
<form method="POST" action="{{route('inkoop.update', $product)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="">description</label>
        <textarea name="description" class="form-control" id="" cols="" rows="10">{{$product->description}} </textarea>
    </div>
    <div class="form-group">
        <label for="">image path</label>
        <input type="text" name="image_path" class="form-control" value="{{$product->image_path}}">
    </div>

    <div class="form-group">
        <input type="text" name="product code" class="form-control" value="{{$product->product_code}}">
    </div>

    <div class="form-group">
        <label for="">price</label>
        <input type="number" step="any" name="price" class="form-control" value="{{$product->price}}">
    </div>

    <select name="products_category_id">
        <option value="{{$product->products_category_id}}"></option>
        <option value="1">bonen</option>
        <option value="2">apparaten</option>
        <option value="3">materiaal</option>
    </select>
    <input type="submit" value="save item" class="btn btn-primary">
</form>

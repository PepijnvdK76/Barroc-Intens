<h1>Producten</h1>
<h2>voeg een product toe</h2>
<form method="POST" action="{{route('inkoop.store')}}">
    @csrf
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">description</label>
        <textarea name="description" class="form-control" id="" cols="" rows="10"> </textarea>
    </div>
    <div class="form-group">
        <label for="">image path</label>
        <input type="text" name="image_path" class="form-control">
    </div>

    <div class="form-group">
        <label for="">price</label>
        <input type="number" step="any" name="price" class="form-control">
    </div>

    <select name="products_category_id">
        <option value="1">bonen</option>
        <option value="2">apparaten</option>
        <option value="3">materiaal</option>
    </select>
    <input type="submit" value="save item" class="btn btn-primary">
</form>

@extends('app')

@section('content')

    //bu alan user oluşturmak için kullanılacak
    //user migration'ını kullanacak
    //one to one ilişki kurulacak
    <h1>Yeni Ürün Ekle</h1>
    <hr>
    <form action="/products" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Ürün Adı</label>
            <input type="text" class="form-control" id="productName"  name="name">
        </div>
        <div class="form-group">
            <label for="description">Ürün Markası</label>
            <select class="form-control" name="company">
                <option>Apple</option>
                <option>Google</option>
                <option>Mi</option>
                <option>Samsung</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Stok Miktarı</label>
            <input type="text" class="form-control" id="productAmount" name="amount"/>
        </div>
        <div class="form-group">
            <label for="description">Stok aktifliği</label><br/>
            <label class="radio-inline"><input type="radio" name="available" value="1"> Aktif</label>
            <label class="radio-inline"><input type="radio" name="available" value="0"> Pasif</label>
        </div>
        <div class="form-group">
            <label for="description">Ürün Detayları</label>
            <textarea type="text" class="form-control" id="productDescription" name="description" ></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
@endsection
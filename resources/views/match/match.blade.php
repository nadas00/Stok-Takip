@extends('app')

@section('content')



{{--  BU ALAN MATCH İÇİNDİR  ÜST KISIMDA ÜRÜN ALT KISIMDA KULLANICI BİLGİLERİNİ İÇEREN SEKME ÇIKAR --}}

        <!DOCTYPE html>
<html lang="en">





<body>

<div class="container">
    <h2>Ürüne Stok Sahibi Ata</h2>
    <p>Ürün ve Stok Sahibi Seçiniz</p>
    <br>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="sel1">Ürün (Seçiniz)</label>
            <select name="categories" id="categories" class="form-control" id="productselector">
                <option value="" selected disabled hidden>Ürün ismi seçiniz</option>
                @foreach($products as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </form>
    <br>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="sel1">Stok Sahibi (Seçiniz)</label>
            <select name="categories" id="categories" class="form-control" id="ownerselector">
                <option value="" selected disabled hidden>Kullanıcı ismi seçiniz</option>
                @foreach($owners as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </form>
    <br>
    <button type="button" class="btn btn-primary btn-lg btn-block">Atama Yap</button>
</div>

{{----------------------------------------------------------}}
{{----------------------------------------------------------}}
{{----------------------------------------------------------}}



{{----------------------------------------------------------}}
{{----------------------------------------------------------}}
{{----------------------------------------------------------}}












</body>
</html>
@endsection
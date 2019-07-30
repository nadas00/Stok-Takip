@extends('app')

@section('content')



{{--  BU ALAN MATCH İÇİNDİR  ÜST KISIMDA ÜRÜN ALT KISIMDA KULLANICI BİLGİLERİNİ İÇEREN SEKME ÇIKAR --}}

        <!DOCTYPE html>
<html lang="en">





<body>
<br> <br>
<div class="container">
    <h2>Ürüne Stok Sahibi Ata</h2>
    <p>Ürün ve Stok Sahibi Seçiniz</p>
    <br>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="sel1">Ürün (Seçiniz)</label>
            <select name="productSelector"  class="form-control" id="productselector" >
                <option value="" selected disabled hidden>Ürün ismi seçiniz</option>
                @foreach($products as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

    <br>

        <div class="form-group">
            <label for="sel1">Stok Sahibi (Seçiniz)</label>
            <select name="ownerSelector" class="form-control" id="ownerselector" onselect="function f('$item2->id') {

                    }">
                <option value="" selected disabled hidden>Kullanıcı ismi seçiniz</option>
                @foreach($owners as $item2)
                    <option value="{{ $item2->id }}">{{ $item2->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <a class="btn btn-primary btn-block" role="button" href="deneme{{"/".$item2->id}}{{"/".$item->id}}" >Atama Yap</a>

    </form>



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
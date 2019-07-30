@extends('app')

@section('content')



{{--  BU ALAN MATCH İÇİNDİR  ÜST KISIMDA ÜRÜN ALT KISIMDA KULLANICI BİLGİLERİNİ İÇEREN SEKME ÇIKAR --}}

        <!DOCTYPE html>
<html lang="en">


<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body>
<br> <br>
<div class="container">
    <h2>Ürüne Stok Sahibi Ata</h2>
    <p>Ürün ve Stok Sahibi Seçiniz</p>
    <br>


    <form id="selectorMain" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="sel1">Ürün (Seçiniz)</label>
            <select name="productSelector"  class="form-control" id="productSelector">
                <option value="" selected disabled hidden>Ürün ismi seçiniz</option>
                @foreach($products as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="sel1">Stok Sahibi (Seçiniz)</label>
            <select name="ownerSelector" class="form-control" id="ownerSelector">
                <option value="" selected disabled hidden>Kullanıcı ismi seçiniz</option>
                @foreach($owners as $item2)
                    <option value="{{ $item2->id }}">{{ $item2->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <a href="" id="submit" class="btn btn-primary btn-block" role="button">Eşleştir</a>

{{--        <button id="submit" type="submit" value="Select"class="btn btn-success btn-block">Deneme </button>--}}

    </form>
</div>

<script>
    $(document).ready(function() {

        $("#submit").click(function(){

            $("#productSelector option:selected").text();
            $("#ownerSelector option:selected").text();
            var den1 = $("#productSelector option:selected").text();
            var den2 = $("#ownerSelector option:selected").text();
            document.getElementById("submit").href = den1+den2 ;


        });
    });
</script>

</body>
</html>
@endsection
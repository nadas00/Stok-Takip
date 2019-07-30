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
    <form>
        <div class="form-group">
            <label for="sel1">Ürün (Seçiniz)</label>
            <select name="productSelector"  class="form-control" id="productSelector" >
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
        <button class="btn btn-primary btn-block" id="matchbutton"></button>
        <button type="button" class="btn btn-primary btn-block">Full-Width Button</button>

        <script>
            $("#ownerSelector").change(function () {
                var den = ($(this).val());
               alert(den)


            });

            document.getElementById("ownerSelector").onchange = function() {

                document.getElementById("matchbutton").href = "http://ordernow/"+this.value+"/";

            }
        </script>








    </form>

</div>

{{--

<a class="btn btn-primary btn-block" role="button" id="matchbutton" >Atama Yap</a>
href="deneme{{"/".$item->id}}{{"/".$item2->id}}"




--}}









</body>
</html>
@endsection
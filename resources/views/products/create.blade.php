@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>


<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" id="navName" href="#">asdad</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/products/create">Ürün Kaydet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/owners/create">Stok Sahibi Ekle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products">Ürüleri Görüntüle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/owners">Kullanıcıları Görüntüle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/match/create">Stok Sahibi Ata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/match">İlişkileri Göster</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="mailto:admin@staj.site?Subject=staj.site%20hakkında">Bizimle İletişime Geçin</a>
            </li>

        </ul>

    </div>

</nav>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

@section('content')




    {{--  BU ALAN ÜRÜN EKLEMEK İÇİN BİR FORM İÇERİR  --}}
    @if($agent->isMobile())

        <script>
            window.onload = function () {

                setnav();

            };


            function setnav(){
                var z = document.getElementById("navName");
                z.innerHTML="Stok Takip Mobil";
            }

        </script>


    @else

        <script>


            window.onload = function () {

                setnav();

            };


            function setnav(){
                var t = document.getElementById("navName");
                t.innerHTML="Stok Takip";
            }


        </script>
    @endif

    <br><br>


    <h1 id="demo"></h1>

    <form action="/products" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Ürün Adı</label>
            <input class="form-control" id="productName" name="name">
        </div>


        <div class="form-group">
            <label for="description">Ürün Markası</label>


            <select class="form-control" name="company">
                <option value="" selected disabled hidden>Ürün ismi seçiniz</option>
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
            <textarea type="text" class="form-control" id="productDescription" name="description"></textarea>
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

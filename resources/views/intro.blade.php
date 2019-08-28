<!doctype html>
<html lang="en">



<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>



<head>

    <title>Staj.Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">

</head>

<nav style="padding: 25px" class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" id="navName" href="#">Stok Takip</a>

    <!-- Toggler/collapsibe Button -->



    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/products" >Ürüleri Görüntüle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/owners">Kullanıcıları Görüntüle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/match">İlişkileri Göster</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products/create">Ürün Kaydet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/owners/create">Stok Sahibi Ekle</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/match/create">Stok Sahibi Ata</a>
            </li>

        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="mailto:admin@staj.site?Subject=staj.site%20hakkında">Bizimle İletişime Geçin</a>
            </li>

            @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/logout') }}"> Çıkış Yap </a>
                </li>
            @endif
            @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/login') }}"> Giriş Yap </a>
                </li>
            @endif





        </ul>

    </div>

</nav>

<style>

    .icon-bar {
        width: 22px;
        height: 2px;
        background-color: #B6B6B6;
        display: block;
        transition: all 0.2s;
        margin-top: 4px
    }

    .navbar-toggler {
        border: none;
        background: transparent !important;

    }
    .navbar-toggler .top-bar {
        transform: rotate(45deg);
        transform-origin: 10% 10%;
    }

    .navbar-toggler .middle-bar {
        opacity: 0;
    }

    .navbar-toggler .bottom-bar {
        transform: rotate(-45deg);
        transform-origin: 10% 90%;
    }

    .navbar-toggler.collapsed .top-bar {
        transform: rotate(0);
    }

    .navbar-toggler.collapsed .middle-bar {
        opacity: 1;
    }

    .navbar-toggler.collapsed .bottom-bar {
        transform: rotate(0);
    }
</style>


@if($agent->isMobile())
    <br>
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
    <br>
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

<body>

<div class="container">


    <div class="jumbotron">
        <h1 style="font-style: italic">Staj.site Tanıtım Sayfası</h1>
        <p style="font-style: italic">Ziyaret etmek istediğiniz sayfanın tanıtım kartındaki git butonuna tıklayabilirsiniz.</p>
    </div>

    <div class="card-deck ">
        <div class="card ">
            <div class="card-body">
                <h5 class="card-title">Ürünleri Görüntüle</h5>
                <img class="card-img-top" src="https://i.hizliresim.com/yGj4Vy.jpg"  >


                <p class="card-text">Bu bölümde kayıt edilen ürünler listelenir ve seçili ürün stok ekleme/çıkarma ve ürünü silme işlemleri
                    yapılabilir. Bu işlemler için kullanıcı girişi gereklidir. </p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button class=" btn btn-outline-secondary btn-block" onclick="window.location.href='/products' ">Git</button></small>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kullanıcıları Görüntüle</h5>
                <img class="card-img-top" src="https://i.hizliresim.com/P7GMr9.jpg"  >
                <p class="card-text">Bu bölümde kayıt edilen kullanıcılar listelenir. Kullanıcı ismi ve kullanıcının profil tanımını buradan öğrenebilirsiniz.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button class=" btn btn-outline-secondary btn-block">Git</button></small>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kullanıcıları Görüntüle</h5>
                <img class="card-img-top" src="https://i.hizliresim.com/lQ41bJ.jpg"  >
                <p class="card-text">Bu bölümde kayıt edilen kullanıcılar listelenir. Kullanıcı ismi ve kullanıcının profil tanımını buradan öğrenebilirsiniz.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button class=" btn btn-outline-secondary btn-block">Git</button></small>
            </div>
        </div>


    </div>

    <br>
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ürün Ekle</h5>
                <img class="card-img-top" src="https://i.hizliresim.com/QPyMLy.jpg" alt="Card image cap">


                <p class="card-text">Bu sayfada ürün kaydı için bir form sayfası gösterilir.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button class=" btn btn-outline-secondary btn-block">Git</button></small>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kullanıcı Ekle</h5>
                <img class="card-img-top" src="https://i.hizliresim.com/00ryoR.jpg" alt="Card image cap">


                <p class="card-text">By sayfada kullanıcı kaydı için bir form sayfası gösterilir.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button class=" btn btn-outline-secondary btn-block">Git</button></small>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">İlişki Ekle</h5>
                <img class="card-img-top" src="https://i.hizliresim.com/lQ41bJ.jpg" alt="Card image cap">


                <p class="card-text">Bu sayfada kullanıcı ve stok eşleştirmesi için bir form sayfası gösterilir.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><button class=" btn btn-outline-secondary btn-block">Git</button></small>
            </div>
        </div>


    </div>





</div>

<br><br>
</body>

<div style="margin: 50px">

</div>
<div>


    <div class="bg-dark" id="footer"><a style="font-weight: lighter">Hasan Çiftçi - staj.site &copy; </a><p style="font-weight: normal">Kayıtlar ziyaretçilere aittir.</p></div>
</div>


</html>


<style>
    #footer {
        width: 100%;
        height: 60px;

        text-align: center;
        padding: 10px;
        margin-top: 50px;

        color: rgb(230, 230, 220);
        position: fixed;
        bottom: 0px;
    }
    html {
        position: relative;
        min-height: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: scroll;
    }
    body {
        background-image: url("https://c.wallhere.com/photos/a9/35/gray_white_spots_abstraction_faded-644375.jpg!d");

        background-color: gray(131234);
        overflow-x: hidden;
        margin: 0px;
        position: relative;
        min-height: 100%;
        height: auto;
    }
    body {
        background-image: url("https://c.wallhere.com/photos/a9/35/gray_white_spots_abstraction_faded-644375.jpg!d");

        background-color: gray(131234);
        overflow-x: hidden;
        margin: 0px;
        position: relative;
        min-height: 100%;
        height: auto;
    }
    .navbar{
        padding: 25px;
    }


    .jumbotron{
        background-color: white;
        box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
    }
    .cards-list {
        z-index: 0;
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }



    .card .card_image {
        width: inherit;
        height: inherit;
        border-radius: 40px;
    }

    .card .card_image img {
        width: inherit;
        height: inherit;
        border-radius: 40px;
        object-fit: cover;
    }

    .card .card_title {
        text-align: center;
        border-radius: 0px 0px 40px 40px;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 30px;
        margin-top: -80px;
        height: 40px;
    }

    .card:hover {
        transform: scale(0.9, 0.9);
        box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25),
        -5px -5px 30px 15px rgba(0,0,0,0.22);
    }


    .card {

        box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
        cursor: pointer;
        transition: 0.7s;
    }

    @media all and (max-width: 500px) {
        .card-list {
            /* On small screens, we are no longer using row direction but column */
            flex-direction: column;
        }
    }
 h5{
    font-style: italic;
}

    /*
     .card {
     margin: 30px auto;
     width: 300px;
     height: 300px;
     border-radius: 40px;
     background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
     background-size: cover;
     background-repeat: no-repeat;
     background-position: center;
     background-repeat: no-repeat;
     box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
     transition: 0.4s;
     }
     */
</style>



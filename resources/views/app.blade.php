<!DOCTYPE html>

<html lang="en">

<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

<div>
    @yield("header")
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




</div>


<div style="margin-bottom: 100px; align-content: center" class="container">
    <div class="row"></div>
    <div class="col-md-16">

        {{--            sayfa içeriği için--}}
        @yield("content")


    </div>

</div>

</div>

<div >
    {{--footer içerik arası boşluk için--}}

</div>


{{--           js için--}}
<div>

    @yield("footer")
    <div class="bg-dark" id="footer"><a style="font-weight: lighter">Hasan Çiftçi - staj.site &copy; </a><p style="font-weight: normal">Bu site bir deneme projesidir.</p></div>
</div>


</body>



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
    .navbar{
        padding: 25px;
    }
</style>
</html>

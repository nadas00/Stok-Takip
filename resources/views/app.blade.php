<!DOCTYPE html>
<html lang="en">
<head>



    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>






</head>

<body>

{{-------------------------------------------------------------------------------------------------------------}}

{{-------------------------------------------------------------------------------------------------------------}}
{{--

DÖKÜLEN NAVBAR ALANI




<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>
    <ul class="navbar-nav">


        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Ekle
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/products/create">Ürün</a>
                <a class="dropdown-item" href="/owners/create">Srok Sahibi</a>

            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               Görüntüle
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/products">Ürün</a>
                <a class="dropdown-item" href="/owners">Stok Sahibi</a>

            </div>
        </li>
        <!-- Links -->

        <li class="nav-item">
            <a class="nav-link" href="/match">Stok Sahibi Ata</a>
        </li>

    </ul>
</nav>
--}}


{{-------------------------------------------------------------------------------------------------------------}}
{{-------------------------------------------------------------------------------------------------------------}}



<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" href="#">Ürünler</a>

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




<div class="container">
    <div class="row"></div>
    <div class="col-md-16">

        {{--            sayfa içeriği için--}}
        @yield("content")
    </div>

</div>

</div>


{{--           js için--}}
@yield("footer")

</body>
<div>
    <br>
</div>
<div class="footer">

<p class="ftrtxt">Bu site Hasan Çiftçi tarafından, staj projesinin online ortamda testinin gerçekleştirilebilmesi amacıyla yayınlanmıştır.
    <br>
Girilen kayıtlar, bu siteye ulaşabilen herhangi bir ziyaretçi tarafından kaydedilmiş olabilir.</p>
</div>

<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: transparent;
        color:  #171a1d;
        text-align: center;

    }
    .ftrtxt{
        font-weight: 100;
    }
</style>
</html>




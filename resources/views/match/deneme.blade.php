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
    <script>
        window.onload = function () {

            setnav();

        };

    </script>


    {{--  BU ALAN ÜRÜN EKLEMEK İÇİN BİR FORM İÇERİR  --}}
    @if($agent->isMobile())

        <script>


            function setnav(){
                var z = document.getElementById("navName");
                z.innerHTML="Stok Takip Mobil";
            }

        </script>


    @else

        <script>



            function setnav(){
                var t = document.getElementById("navName");
                t.innerHTML="Stok Takip";
            }


        </script>
    @endif





    <div id="ekleButonu">


        <section class="page_404">
            <div class="container">

                <div class="row">

                    <div class="col-sm-12 ">

                        <div class="  text-center">
                            <h1>Eşleşmiş Kayıt Yok</h1>
                            <div class="four_zero_four_bg">


                            </div>

                            <div class="contant_box_404">
                                <h3 class="h2">
                                    Gösterecek bir şey bulamadık
                                </h3>

                                <p>Eşleştirme Eklemek için "Eşleştirme Ekle" Butonuna Tıkla</p>
                                <br>
                                <a href="/match/create" class="btn btn-success btn-block"> Eşleştirme Sayfasına Git </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>





    <h1 id="ownerSayfaBaslik"><br>Stok Sahipleri ve Ürünler</h1>
    <br>




    <table class="table" id="detachTableTop">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Stok Sahibi</th>
            <th scope="col">Kullanıcı adı</th>
            <th scope="col">İşlem</th>


        </tr>
        </thead>


    </table>

    <table class="table" id="detachTable">
        <tbody>

        @foreach($products as $product)

            {{--
            aşağıdaki if eğer sadece bir owner'a bağlıysa listeye ekler
            diğer türlü tüm ürünleri listelemeye çalışınca ownner_id bulamadığı için hata veriyor
            --}}

            @if(\App\Owner::find($product->owner_id))

                <tr>

                    <td>{{\App\Owner::find($product->owner_id)->name}}</td>
                    <td>{{$product->name}}</td>
                    <td><a href="{{ url('/match/delete/'.$product->id)}}" class="btn btn-danger" role="button">Bağlantı
                            Kopar</a>

                </tr>
            @endif
        @endforeach

        </tbody>


    </table>



    <script>
        window.onload = function () {
            sortTable();
        };


        function sortTable() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("detachTable");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[0];
                    y = rows[i + 1].getElementsByTagName("TD")[0];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }
    </script>


    <script>


        if ($('#detachTable tr').length == 0) {
            var x = document.getElementById("detachTableTop");
            x.style.display = "none";
            var y = document.getElementById("ownerSayfaBaslik");
            y.style.display = "none";
            var z = document.getElementById("ekleButonu");
            z.style.display = "visible";

        } else {
            var z = document.getElementById("ekleButonu");
            z.style.display = "none";

        }


    </script>

    <style>

        .page_404 {
            padding: 50px 0;
            background: #fff;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {

            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
        }


        .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 100px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
        }

        .contant_box_404 {
            margin-top: -50px;
        }
    </style>


    {{--<a href="{{ url('/match/create')}}" class="btn btn-success" role="button">Git</a>


        <br><br>
        <div class="form-group">
            <div>
            <label for="sel1">Stok Sahibi (Seçiniz)</label>
            <select name="ownerSelectorIndex" class="form-control" id="ownerSelectorIndex">
                <option value="" selected disabled hidden>Kullanıcı ismi seçiniz</option>
                @foreach($owners as $item2)
                    <option value="{{ $item2->id }}">{{ $item2->name }}</option>
                @endforeach
            </select>
            </div>
            <br>
            <div>
                <input id="matchIndexInput" class="form-control" type="text" placeholder= " Seçim Yapınız "readonly>

            </div>
        </div>



        <script>

            $("#ownerSelectorIndex").on("change",function(){
                var selectedOwner = $("#ownerSelectorIndex option:selected").val();

                $("#matchIndexInput").val(selectedOwner);



            });






        </script>

        --}}


@endsection

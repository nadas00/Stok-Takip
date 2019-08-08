@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

@section('content')




    {{--  BU ALAN EKLENMİŞ ÜRÜNLERİ GÖSTEREN BİR TABLO İÇERİR --}}



    <div id="ekleButonu">


        <section class="page_404">
            <div class="container">

                <div class="row">

                    <div class="col-sm-12 ">

                        <div class="  text-center">
                            <h1>Kayıt Yok</h1>
                            <div class="four_zero_four_bg">


                            </div>

                            <div class="contant_box_404">
                                <h3 class="h2">
                                    Elimizde kayıtlı bir bilgi yok
                                </h3>

                                <p>Kayıt Eklemek için "Kayıt Ekle" Butonuna Tıkla</p>
                                <br>
                                <a href="/products/create" class="btn btn-success btn-block"> Kayıt Ekle </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <script>
        function SomeDeleteRowFunction() {
            // event.target will be the input element.
            var td = event.target.parentNode;
            var tr = td.parentNode; // the row to be removed
            tr.parentNode.removeChild(tr);


        }


    </script>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="topic" id="topic">
        <h3 id="productsSayfaBaslik">Kaydedilen Ürünler</h3>
    </div>









    <div class="content" id="content">
        <div style="overflow-x:auto;" >


            <table class="table" id="productsTable">
                {{--          <table class="table" id="productsBaslik">--}}
                <thead class="thead-dark" >
                <tr>
                    <th scope="col">Sıra</th>
                    <th scope="col">id</th>
                    <th scope="col">Ürün adı</th>
                    <th scope="col">Ürün detayları</th>
                    <th scope="col">Marka</th>
                    <th scope="col">Stok miktarı</th>
                    <th scope="col">Stok Aktifliği</th>
                    <th scope="col">İşlem</th>

                </tr>
                </thead>




                <?php $sıra = 1 ?>
                @foreach($products as $product)

                    <tr>
                        <th scope="row">{{$sıra++}} </th>
                        <td>{{$product->id}} </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->company}}</td>
                        <td>{{$product->amount}}</td>
                        <td>{{$product->available ? 'Yes' : 'No'}}</td>
                        <td><a href="{{ url('/products/delete/'.$product->id)}}" class="btn btn-danger" role="button">Sil</a>
                        </td>

                    </tr>

                @endforeach
                <?php $sayı = $sıra-1 ?>

                <p  style="font-weight: lighter; padding-left: 5px"> 1 - {{$sayı}} arası sonuçlar listeleniyor..</p>

            </table>
        </div>

    </div>



    <script>

        {{--
            içinde başlıkları tutan table tr'si kaldığında yani tüm kayıtlar silindiğinde prodcutstable tr sayısı 1 oluyor
            ve sayfa içeriği buna göre ayarlanıyor.
            --}}


        if ($('#productsTable tr').length == 1) {
            var x = document.getElementById("ekleButonu");
            x.style.display = "visible";
            var z2 = document.getElementById("topic");
            z2.style.display = "none";
            var z3 = document.getElementById("content");
            z3.style.display = "none";

        } else {
            var x = document.getElementById("ekleButonu");
            x.style.display = "none";
        }


    </script>


    <style>
        .content{

            background-color: white;
            border: 1px solid black;
            padding-top: 20px;
            padding-bottom: 30px;
            padding-left: 8px;
            padding-right: 8px;
            border-top: none;





        }

        .topic{

            background-image: url("https://c.wallhere.com/photos/a9/35/gray_white_spots_abstraction_faded-644375.jpg!d");
            color: white;
            background-color: #f1f1f1;
            border: 1px solid black;
            padding: 30px;
            border-bottom-style: dashed;

            text-align: center;


        }
    </style>

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



@endsection


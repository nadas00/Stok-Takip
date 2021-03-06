@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    {{--  BU ALAN EKLENMİŞ KULLANICILARI GÖSTEREN BİR TABLO İÇERİR --}}

    <div id="OwnerEkleButonu">


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
                                <a href="/owners/create" class="btn btn-success btn-block"> Kayıt Ekle </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <div class="topic" id="topic">
        <h3 id="ownerSayfaBaslik">Kaydedilen Kullanıcılar</h3>
    </div>
    <div class="content" id="content">
        <div id="ownersBaslik">
            <div style="overflow-x:auto;" >


                <table class="table" id="ownersTable">


                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sıra</th>
                        <th scope="col">id</th>
                        <th scope="col">Kullanıcı adı</th>
                        <th scope="col">Profil adı</th>
                        <th style="text-align: right; padding-right: 4rem" scope="col">İşlem</th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php $sıra = 1 ?>


                    @foreach($owners as $owner)


                        <tr>
                            <th scope="row">{{$sıra++}} </th>
                            <td>{{$owner->id}} </td>

                            <td style=" word-break: break-all;">{{$owner->ownerNameVar}}</td>





                            <td style=" word-break: break-all;">{{$owner->profil}}</td>


                            <td style="text-align: right; padding-right: 3rem">
                                <a href="{{ url('/owners/delete/'.$owner->id)}}" class="btn btn-danger" role="button">Sil</a>
                                <a  href="{{ url('/owners/items/'.$owner->id)}}"  class="btn btn-success" role="button">Ürünlerini Listele</a>

                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                    <?php $sayı = $sıra-1 ?>

                    <p  style="font-weight: lighter; padding-left: 5px;" > 1 - {{$sayı}} arası sonuçlar listeleniyor..</p>


                </table>

            </div>
        </div>
    </div>


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif



    <script>

        if ($('#ownersTable tr').length == 1) {
            var x = document.getElementById("OwnerEkleButonu");
            x.style.display = "visible";
            var y = document.getElementById("ownersBaslik");
            y.style.display = "none";
            var z = document.getElementById("ownerSayfaBaslik");
            z.style.display = "none";
            var z2 = document.getElementById("topic");
            z2.style.display = "none";
            var z3 = document.getElementById("content");
            z3.style.display = "none";

        } else {
            var x = document.getElementById("OwnerEkleButonu");
            x.style.display = "none";


        }

    </script>

    <style>
        .content{

            background-color: white;
            border: 1px solid black;
            padding: 40px;
            border-collapse: collapse;
            border-top: none;
            padding-top: 1rem;
            padding-left: 8px;
            padding-right: 8px;




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

        {{-- yazı tipi istenirse .page_404 style'ına eklenir. --}}
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


        .contant_box_404 {
            margin-top: -50px;
        }
    </style>



@endsection


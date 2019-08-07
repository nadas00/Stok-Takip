@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>


@section('content')


    {{--  BU ALAN MATCH İÇİNDİR  ÜST KISIMDA ÜRÜN ALT KISIMDA KULLANICI BİLGİLERİNİ İÇEREN SEKME ÇIKAR --}}




    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">




<div class="topic">

    <div class="container">
        <h2>Ürüne Stok Sahibi Ata</h2>
        <p>Ürün ve Stok Sahibi Seçiniz</p>

    </div>
    </div>

    <div class="content">
        <form id="selectorMain" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="sel1">Ürün (Seçiniz)</label>
                <select name="productSelector" class="form-control" id="productSelector">
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


        </form>
    </div>
    <script>

        $(document).ready(function () {


            $("#submit").click(function () {

                event.preventDefault();


                var productId = $("#productSelector option:selected").val();
                var ownerId = $("#ownerSelector option:selected").val();

                if (productId == 0 && ownerId == 0){
                    Swal.fire({
                        text: 'Ürün ve Stok Sahibi giriniz',
                        confirmButtonText: "Tamam",
                        type: "warning",
                    })

                }else if (productId == 0) {
                    Swal.fire({
                        text: 'Ürün ismi giriniz',
                        confirmButtonText: "Tamam",
                        type: "warning",
                    })
                } else if (ownerId == 0) {
                    Swal.fire({
                        text: 'Stok sahibi ismi giriniz',
                        confirmButtonText: "Tamam",
                        type: "warning",
                    })
                } else {


                    Swal.fire({
                        title: 'Başarılı',
                        text: '"'+ $("#productSelector option:selected").text()+'"' + " ürünü " +'"'+ $("#ownerSelector option:selected").text()+'"' + " kullanıcısının stoğuna eklenmiştir",
                        type: "success",
                        confirmButtonText: "Tamam",
                    }).then(function () {
                        window.location = "/match/matched/" + productId + "/" + ownerId;

                    });
                }

                /*
                sweet alert olmadan kullanılacak olan alert
                alert($("#productSelector option:selected").text()+" ürünü " + $("#ownerSelector option:selected").text() +" kullanıcısının stoğuna eklenmiştir.")


                sweet alert olmadan kullanılacak olan href
                document.getElementById("submit").href = "/match/matched/"+productId+"/"+ownerId ;
                */

            });
        });

    </script>

    <style>
        .content{

            background-color: white;
            border: 1px solid black;
            padding: 40px;
            border-collapse: collapse;
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

@endsection

@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();

use App\Product;

?>


@section('content')



    {{--  BU ALAN EKLENMİŞ ÜRÜNLERİ GÖSTEREN BİR TABLO İÇERİR --}}



    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


{{--sweet alert--}}
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    {{--sweet alert--}}

    <div class="topic" id="topic">
        <h3 id="productsSayfaBaslik">Stok Arttır</h3>
    </div>

    <div class="content" id="content">




        <br>
        <h4>Stok miktarını arttırmak istediğiniz ürün : " {{$productSelected->productName}}"</h4>
        <a>Stok miktarını arttırmak istediğiniz ürünün miktarı:  {{$productSelected->amount}}</a>

        <hr>
        <br>

        <form  >
            {{ csrf_field() }}


            {{--eklenecek ürün adedi girilecek bir form gelecek--}}


            <table>
        <input class="form-control" id="uintTextBox" inputmode="numeric"  placeholder="Miktar giriniz...">

            </table>

        </form>

        <br>
        <a style="color: white;" role = "button" id="submitButton" class="btn btn-success btn-block">Stok Arttır</a>
        <div style="alignment: right" >
            <br>
            <div style="margin-bottom: 0">
                <p style="font-style: italic; padding-bottom: 1px">Satın alma sayfasına geri dön</p>
            </div>
            <div style="margin-top: 0" >
                <a id="backButton" role="button" href="/products" style="padding-top: 10px;  "  class="btn btn-outline-secondary backButton"><i class="material-icons">
                        keyboard_backspace
                    </i>
                </a>

            </div>
        </div>

        {{-- x düzlemine kaydırma barı ekler --}}
        <div style="overflow-x:auto;" >







        </div>

    </div>


    {{--
        <script>
            function SomeDeleteRowFunction() {
                // event.target will be the input element.
                var td = event.target.parentNode;
                var tr = td.parentNode; // the row to be removed
                tr.parentNode.removeChild(tr);


            }
        </script>--}}



    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif






    <style>
        .content{

            background-color: white;
            border: 1px solid black;
            padding-top: 1rem;
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
        .backButton:hover{
            color: red;

            background-color: white;
        }
    </style>

    <script>

        $(document).ready(function () {

            //şuanki url adresine selector değerini ekleyip, yeni oluşturulan adrese yönlendiriliyor.

            $("#submitButton").click(function () {
                var selectedAmount = document.getElementById("uintTextBox").value;


                if(selectedAmount>9999){


                    Swal.fire({
                        title: "Tamamlanamadı!",
                        text: "Tek seferde ekleyebileceğiniz stok miktarı en fazla"+' "9999" '+"olabilir.",
                        confirmButtonText: "Tamam",
                        type: "warning",
                    })


                }else {

                window.location.href = window.location.href+"/"+selectedAmount;
                }
            });


        });
    </script>




    <script>
        // Restricts input for the given textbox to the given inputFilter.
        function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                textbox.addEventListener(event, function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    }
                });
            });
        }


        // Install input filters.
        setInputFilter(document.getElementById("uintTextBox"), function(value) {
            return /^\d*$/.test(value); });

    </script>



@endsection


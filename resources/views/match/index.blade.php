@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>



@section('content')





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




    <div class="topic" id="topic">


        <h3 id="ownerSayfaBaslik">Stok Sahipleri ve Ürünler</h3>
    </div>



    <div class="content" id="content">
        <div style="overflow-x:auto;" >

            <table class="table" id="detachTableTop">


                <thead class="thead-dark">
                <tr>

                    <th scope="col">Stok Sahibi</th>
                    <th scope="col">Ürün adı</th>
                    <th scope="col">İşlem</th>


                </tr>
                </thead>




                {{--<table class="table" id="detachTable">--}}
                <tbody>
<?php $sıra = 1?>
                @foreach($products as $product)
<?php $sıra++ ?>
                    {{--
                        aşağıdaki if eğer sadece bir owner'a bağlıysa listeye ekler
                            diğer türlü tüm ürünleri listelemeye çalışınca ownner_id bulamadığı için hata veriyor
                            --}}

                    @if(\App\Owner::find($product->owner_id))

                        <tr>

                            <td style="word-break: break-all;">{{\App\Owner::find($product->owner_id)->ownerNameVar}}</td>
                            <td>{{$product->productName}}</td>
                            <td><a href="{{ url('/match/delete/'.$product->id)}}" class="btn btn-danger" role="button">Bağlantı
                                    Kopar</a>

                        </tr>
                    @endif
                @endforeach
<?php $sayı = $sıra-1 ?>
                </tbody>

                <p style="font-weight: lighter; padding-left: 5px"> 1 - {{$sayı}} arası sonuçlar listeleniyor..</p>
            </table>
        </div>
    </div>


    <script>


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


        if ($('#detachTableTop tr').length == 1) {
            var z = document.getElementById("ekleButonu");
            z.style.display = "visible";
            var za = document.getElementById("topic");
            za.style.display = "none";
            var zb = document.getElementById("content");
            zb.style.display = "none";


        } else {
            var z = document.getElementById("ekleButonu");
            z.style.display = "none";

        }


    </script>


    <style>
        .content{

            background-color: white;
            border: 1px solid black;
            padding: 40px;
            border-collapse: collapse;
            border-top: none;
            padding-left: 8px;
            padding-top: 1rem;
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

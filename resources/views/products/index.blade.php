@extends('app')

@section('content')


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


    {{--  BU ALAN EKLENMİŞ ÜRÜNLERİ GÖSTEREN BİR TABLO İÇERİR --}}

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

    <br><br>
 <h1 id="productsSayfaBaslik">Kaydedilen Ürünler</h1><br><br>

<div>
    <table class="table" id="productsBaslik">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Ürün adı</th>
            <th scope="col">Ürün detayları</th>
            <th scope="col">Marka</th>
            <th scope="col">Stok miktarı</th>
            <th scope="col">Stok Aktifliği</th>
            <th scope="col">İşlem</th>

        </tr>
        </thead>

    </table>
</div>

    <table class="table" id="productsTable">

        <tbody>

        @foreach($products as $product)

            <tr>
                <th scope="row">{{$product->id}} </th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->company}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->available ? 'Yes' : 'No'}}</td>
                <td><a href="{{ url('/products/delete/'.$product->id)}}" class="btn btn-danger" role="button">Sil</a></td>

            </tr>

        @endforeach

        </tbody>

    </table>

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


        if ($('#productsTable tr').length == 0) {
            var x = document.getElementById("ekleButonu");
            x.style.display = "visible";
            var y = document.getElementById("productsBaslik");
            y.style.display = "none";
            var z = document.getElementById("productsSayfaBaslik");
            z.style.display = "none";

        }else{
            var x = document.getElementById("ekleButonu");
            x.style.display = "none";
        }



    </script>

    <style>

        .page_404{ padding:50px 0; background:#fff;
        }

        .page_404  img{ width:100%;}

        .four_zero_four_bg{

            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
        }


        .four_zero_four_bg h1{
            font-size:80px;
        }

        .four_zero_four_bg h3{
            font-size:80px;
        }

        .link_404{
            color: #fff!important;
            padding: 10px 100px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;}

        .contant_box_404{ margin-top:-50px;}
    </style>



@endsection


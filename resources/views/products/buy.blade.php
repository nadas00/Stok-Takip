@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

@section('content')

    {{--  BU ALAN EKLENMİŞ ÜRÜNLERİ GÖSTEREN BİR TABLO İÇERİR --}}



    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">




    <div class="topic" id="topic">
        <h3 id="productsSayfaBaslik">Satın Al</h3>
    </div>

    <div class="content" id="content">
        @foreach($products as $product)

            <tr>
  @if($product->id==$id)
                    <br>
               <h4>Satın almak istediğiniz ürün : "{{\App\Product::where('id',$id)->get()->first()->productName}}"</h4>
      <a>Satın almak istediğiniz ürünün açıklaması: {{\App\Product::where('id',$id)->get()->first()->description}}</a>

                    <hr>
                    <br>
                    <select class="form-control" name="company">
                        <option value="" selected disabled hidden>Ürün adedi seçiniz</option>
                        <?php $i = 1 ?>
                        @for($i=1; $i< $stokMiktari = \App\Product::where('id',$id)->get()->first()->amount+1; $i++)
                        <option>{{$i}}</option>
@endfor
                    </select>

                    <br>
      <button class="btn btn-success btn-block">Satın Al</button>
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
@endif
            </tr>

        @endforeach
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
            size: B5;
            background-color: white;
        }
    </style>


@endsection


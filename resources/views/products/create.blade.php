
@extends('app')
<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>




@section('content')



    {{--  BU ALAN ÜRÜN EKLEMEK İÇİN BİR FORM İÇERİR  --}}





    <form action="/products" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="topic">
            <h3>Yeni Ürün Ekle</h3>
            </div>

            <div class="content">
            <label for="title">Ürün Adı</label>
            <input class="form-control" id="productName" name="name">

                <hr>

        <div class="form-group">
            <label for="description">Ürün Markası</label>


            <select class="form-control" name="company">
                <option value="" selected disabled hidden>Ürün ismi seçiniz</option>
                <option>Apple</option>
                <option>Google</option>
                <option>Mi</option>
                <option>Samsung</option>
            </select>

            <hr>
        </div>
        <div class="form-group">


            <label for="description">Stok Miktarı</label>
            <input type="text" class="form-control" id="productAmount" name="amount"/>
            <hr>
        </div>
        <div class="form-group">
            <label for="description">Stok aktifliği</label><br/>
            <label class="radio-inline"><input type="radio" name="available" value="1"> Aktif</label>
            <label class="radio-inline"><input type="radio" name="available" value="0"> Pasif</label>
            <hr>
        </div>
        <div class="form-group">
            <label for="description">Ürün Detayları</label>
            <textarea type="text" class="form-control" id="productDescription" name="description"></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </div>
    </form>

</div>
@endsection

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
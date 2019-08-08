@extends('app')

<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

@section('content')

    {{--  BU ALAN KULLANICI ADI EKLEMEK İÇİN BİR FORM İÇERİR --}}
    <div class="topic">
        <h3>Yeni Kullanıcı Ekle</h3>
    </div>
    <div class="content">
        <form action="/owners" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Kullanıcı Adı</label>
                <input type="text" class="form-control" id="ownerName"  name="name">
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
        </form>
    </div>


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

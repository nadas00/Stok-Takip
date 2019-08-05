@extends('app')

<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

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


    {{--  BU ALAN KULLANICI ADI EKLEMEK İÇİN BİR FORM İÇERİR --}}



    @if($agent->isMobile())


        <h1>Yeni Kullanıcı Ekle Mobil</h1>
        <hr>
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

    @else

        <br><br>
        <h1>Yeni Kullanıcı Ekle</h1>
        <hr>
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

    @endif



   


@endsection
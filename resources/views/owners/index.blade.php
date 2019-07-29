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


    {{--  BU ALAN EKLENMİŞ KULLANICILARI GÖSTEREN BİR TABLO İÇERİR --}}





    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <h1 id="ownerSayfaBaslik">Kaydedilen Kullanıcılar</h1><br><br>

<div id="ownersBaslik">

    <table class="table" >

        <thead class="thead-dark">
        <tr>

            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Kullanıcı adı</th>
            <th scope="col"></th>
            <th scope="col"></th>

            <th scope="col">İşlem</th>

        </tr>
        </thead>

    </table>

</div>
    <table class="table" id="ownersTable">

        <tbody>

        @foreach($owners as $owner)


            <tr>
                <th scope="row">{{$owner->id}} </th>
                <td></td>
                <td></td>
                <td>{{$owner->name}}</td>
                <td></td>
                <td></td>
                <td><a href="{{ url('/owners/delete/'.$owner->id)}}" class="btn btn-danger" role="button">Sil</a></td>
            </tr>

        @endforeach

        </tbody>



    </table>

    <div id="OwnerEkleButonu">
        <h1><i>Oppss...</i></h1>
        <h2>Hiç Kayıtlı Kullanıcı bulunmuyor.</h2>
        <h5>Kayıt eklemek için "Kullanıcı Ekle" butonuna basın.</h5>
        <br>
        <a class="btn btn-primary btn-lg btn-block" href="/owners/create" role="button">Kullanıcı Ekle</a>

    </div>

    <script>

        if ($('#ownersTable tr').length == 0) {
            var x = document.getElementById("OwnerEkleButonu");
            x.style.display = "visible";
            var y = document.getElementById("ownersBaslik");
            y.style.display = "none";
            var z = document.getElementById("ownerSayfaBaslik");
            z.style.display = "none";

        }else{
            var x = document.getElementById("OwnerEkleButonu");
            x.style.display = "none";


        }

    </script>

@endsection
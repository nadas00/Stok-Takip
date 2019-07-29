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
    <h1>Kaydedilen Kullanıcılar</h1><br><br>
    <table class="table">

        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kullanıcı adı</th>
            <th scope="col"></th>
        </tr>
        </thead>


        <tbody>

        @foreach($owners as $owner)

            <tr>

                <th scope="row">{{$owner->id}} </th>
                <td>{{$owner->name}}</td>
                <td><a href="{{ url('/owners/delete/'.$owner->id)}}" class="btn btn-danger" role="button">Sil</a></td>

{{--

buton aktifleştirilecek
--}}
            </tr>

        @endforeach

        </tbody>

    </table>

@endsection
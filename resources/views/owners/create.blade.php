@extends('app')

<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

@section('content')

    {{--  BU ALAN KULLANICI ADI EKLEMEK İÇİN BİR FORM İÇERİR --}}

        <h3>Yeni Kullanıcı Ekle</h3>
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







@endsection
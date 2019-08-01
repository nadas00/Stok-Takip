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








    <h1 id="ownerSayfaBaslik"><br>Stok Sahipleri ve Ürünler</h1>
    <br>
    <div id="ownersBaslik">



    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Stok Sahibi</th>
            <th scope="col">Kullanıcı adı</th>
            <th scope="col">İşlem</th>


        </tr>
        </thead>
    </table>


    </div>
    <table class="table" id="ownersTable">

        <tbody>

   @foreach($products as $product)

       {{--
       aşağıdaki if eğer sadece bir owner'a bağlıysa listeye ekler
       diğer türlü tüm ürünleri listelemeye çalışınca ownner_id bulamadığı için hata veriyor
       --}}

     @if(\App\Owner::find($product->owner_id))

       <tr>

           <td>{{\App\Owner::find($product->owner_id)->name}}</td>
           <td>{{$product->name}}</td>
           <td><a href="{{ url('/products/delete/'.\App\Owner::find($product->owner_id)->id.'/'.$product->id)}}" class="btn btn-danger" role="button">Bağlantı Kopar</a>
       </tr>
       @endif
       @endforeach

        </tbody>


    </table>






{{--<a href="{{ url('/match/create')}}" class="btn btn-success" role="button">Git</a>


    <br><br>
    <div class="form-group">
        <div>
        <label for="sel1">Stok Sahibi (Seçiniz)</label>
        <select name="ownerSelectorIndex" class="form-control" id="ownerSelectorIndex">
            <option value="" selected disabled hidden>Kullanıcı ismi seçiniz</option>
            @foreach($owners as $item2)
                <option value="{{ $item2->id }}">{{ $item2->name }}</option>
            @endforeach
        </select>
        </div>
        <br>
        <div>
            <input id="matchIndexInput" class="form-control" type="text" placeholder= " Seçim Yapınız "readonly>

        </div>
    </div>



    <script>

        $("#ownerSelectorIndex").on("change",function(){
            var selectedOwner = $("#ownerSelectorIndex option:selected").val();

            $("#matchIndexInput").val(selectedOwner);



        });






    </script>

    --}}

@endsection


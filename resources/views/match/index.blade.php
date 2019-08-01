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


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif





        @foreach($products as $product)

            {{--
            aşağıdaki if eğer sadece bir owner'a bağlıysa listeye ekler
            diğer türlü tüm ürünleri listelemeye çalışınca ownner_id bulamadığı için hata veriyor
            --}}

            @if(\App\Owner::find($product->owner_id))

                <tbody>
                <div id="matchIndexPage">
                    <h1 id="ownerSayfaBaslik"><br>Stok Sahipleri ve Ürünler</h1>
                    <br>



                    <table class="table" id="detachTable">



                        <thead class="thead-dark">


                        <div class="row">

                            <th >Stok sahibi</th>
                            <th >Ürün</th>
                            <th >İşlem</th>
                        </div>


                        </thead>

                <tr>

                    <td>{{\App\Owner::find($product->owner_id)->name}}</td>
                    <td>{{$product->name}}</td>
                    <td><a href="{{ url('/match/delete/'.$product->id)}}" class="btn btn-primary" role="button">Bağlantı Kopar</a>
                </tr>

                    </table>
                </div>
        </tbody>



@break
            @else
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
                                            <a href="/match/create" class="btn btn-success btn-block"> Kayıt Ekle </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                @break
                @endif

        @endforeach




        <script>
            window.onload = function() {
                sortTable();
            };


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

    <style>

        {{-- yazı tipi istenirse .page_404 style'ına eklenir. --}}
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


        .contant_box_404 {
            margin-top: -50px;
        }
    </style>

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


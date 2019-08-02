<!doctype html>
<html lang="en">



    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

<body>


    {{--  BU ALAN EKLENMİŞ KULLANICILARI GÖSTEREN BİR TABLO İÇERİR --}}

    <div id="OwnerEkleButonu">


        <section class="page_404">
            <div class="container">

                <div class="row">

                    <div class="col-sm-12 ">

                        <div class="  text-center">
                            <h1>Eyvah! Çöktük!</h1>

                            <div class="four_zero_four_bg">

                            </div>

                            <div class="contant_box_404">
                                <br>
                                <h3 class="h2">
                                    <span id="countdown">5</span> saniye bekle, bir çay koy ve sakinleş.
                                </h3>
                                <!-- Modify this according to your requirement -->

                                <!-- JavaScript part -->
                                <script type="text/javascript">

                                    // Total seconds to wait
                                    var seconds = 5;

                                    function countdown() {
                                        seconds = seconds - 1;
                                        if (seconds == 0) {
                                            // Chnage your redirection link here
                                             window.location = "/products/create";

                                        } else {
                                            // Update remaining seconds
                                            document.getElementById("countdown").innerHTML = seconds;
                                            // Count down using javascript
                                            window.setTimeout("countdown()", 1000);
                                        }
                                    }

                                    // Run countdown function
                                    countdown();

                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>







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

            background-image: url(https://cdn.dribbble.com/users/1129101/screenshots/3513987/404.gif);
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




</body>


</html>








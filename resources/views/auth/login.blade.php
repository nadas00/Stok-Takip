@extends('app')




@section('content')

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">



    <script>
        window.onload=function(){
            Swal.fire({
                text: "Alanlar otomatik olarak dolduruldu. Giriş Yap'a tıklayınız",
                confirmButtonText: "Tamam",
                type: "success",
            })
        };

    </script>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Login') }}</div>--}}
              <div class="topic" ><div style="margin-bottom: 20px; margin-top: 5px" >ALANLAR OTOMATİK OLARAK DOLDURULDU GİRİŞ YAP'A TIKLAYINIZ</div></div>
<div class="content">
            <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">



{{--                                <input placeholder="deneme" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
                                <input placeholder="deneme" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="deneme" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">

                                <input placeholder="deneme" id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="deneme" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
</div>
            </div>
        </div>
    </div>
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
        padding-top: 20px;
        padding-bottom: 10px;


    }
</style>

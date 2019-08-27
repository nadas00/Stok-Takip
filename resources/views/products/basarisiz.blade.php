
<title>Hata!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">






<body>

<script>
    window.onload=function(){
        Swal.fire({
            title:"Tamamlanamadı!",
            text: "{{$hatamesaji}}",
            confirmButtonText: "Tamam",
            type: "warning",
        }).then(function () {
            window.location.href = "/products";
        })
    };

</script>

</body>


<style>
    body {
        background-image: url("https://c.wallhere.com/photos/a9/35/gray_white_spots_abstraction_faded-644375.jpg!d");

        background-color: gray(131234);
        overflow-x: hidden;
        margin: 0px;
        position: relative;
        min-height: 100%;
        height: auto;
    }
</style>


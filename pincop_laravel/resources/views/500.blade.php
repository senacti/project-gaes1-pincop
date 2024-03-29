<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Error 500</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="{{ asset('css/500.css') }}">
  <link rel="icon" href= {{ asset('img/logo.png') }}>
</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
<body>

        <!-- Error Page -->
            <div class="error">
                <div class="container-floud">
                    <div class="col-xs-12 ground-color text-center">
                        <div class="container-error-500">
                            <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                            <div class="msg">OH!<span class="triangle"></span></div>
                        </div>
                        <h2 class="h1">Lo siento...Error interno del servidor</h2>
                        <h5><center><a href="{{url('/')}}" class="boton">Volver atras</a></center></h5>
                    </div>
                </div>
            </div>
        <!-- Error Page -->
</body>
<!-- partial -->
<script  src={{ asset('js/500.js') }}></script>

</body>
</html>

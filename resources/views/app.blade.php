<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />

    <title>Coalition Technologies</title>

    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">


</head>
<body>
<div class="form-group col-sm-2">
</div>
<div>

        <h1>Marvin Dinaku Coalition Test</h1>


</div>
<div class="form-group col-sm-2">
</div>
<div class="form-group col-sm-2">
</div>
@yield('content')


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/numeral.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>

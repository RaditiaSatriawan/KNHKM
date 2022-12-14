<!doctype html>
<html lang="en">
    
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greetings</title>
    <link rel="icon" href="all-image/carfilogo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="greeting/greeting.css">
</head>

<body>
    @extends('layouts.app')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
    <div class="wrap">
        <h1 id="greeting"></h1>
        <h1 id="namer" style="
        margin-bottom: 30px;"></h1>
        <h1 id="clock"></h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-2 text-center">
            <form action="/home">
                <button type="submit" class="btn btn-outline-primary btn-lg">Mulai Bekerja</button>
            </form>
            <form action="/faz">
                <button type="submit" class="btn btn-outline-primary btn-lg">FAQ</button>
            </form>
        </div>
    </div>
    <span class="metadata" id="name" title="{{ Auth::user()->name }}"></span>
    <script src="greeting/greeting.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> --}}
    @endsection
</body>

</html>

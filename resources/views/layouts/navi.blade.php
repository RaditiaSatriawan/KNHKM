<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CarFi') }}</title>
    <link rel = "icon" href ="../../public/all-image/carfilogo1.png" type = "image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Melamar Pekerjaan - CarFi</title>
    <link rel="icon" href="all-image/carfilogo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="jobpage/style.css">
<style>
    #prop {
        cursor: pointer;
        color: rgb(52, 121, 211)
    }
    @media only screen and (max-width: 600px) {
    .search-box{
        background: transparent;
        width: auto;
        padding: 0;
    }

    .search-box input{
        width: 0;
        padding: 0;
    }

    .navbar-center ul li a span{
        display: none;
    }

    .navbar-center ul li a{
        padding-right: 0;
        margin-top: 25px !important;
    }

    .nav-profile-img{
        width: 30px;
    }

    .container{
        padding: 15px 3%;
    }

    .left-sidebar, .right-sidebar{
        flex-basis: 100%;
        position: relative;
        top: unset;
    }

    .main-content{
        flex-basis: 100%;
    }
}
</style>
</head>
<body>
 <!-- navbar -->
 <nav class="navbar">
    <div class="navbar-left">
        <a href="{{ url('/') }}" class="logo"><img src="all-image/carfilogo1.png" alt=""></a>

        <!-- search -->
        <div class="search-box">
            <img src="all-image/search.png" alt="">
            <input type="text" placeholder="Cari">
        </div>

    </div>
    <div class="navbar-center">
        <ul>
            <li><a onclick="event.preventDefault();document.getElementById('jobsik').submit();"><img src="all-image/home.png" alt="">
                <form id="jobsik" action="/job" class="d-none">
                @csrf
            </form><span    >Melamar
                        Pekerjaan</span></a></li>
            <li><a onclick="event.preventDefault();document.getElementById('pekpas').submit();"><img src="all-image/network.png" alt="">
                <form id="pekpas" action="/fair" class="d-none">
                @csrf
            </form><span>Pekerja
                        Lepas</span></a>
            </li>
        </ul>
    </div>
    <div class="navbar-right">
        <div class="online">
            <img src="all-image/user-1.png" class="nav-profile-img" onclick="toggleMenu()">
        </div>
    </div>
    <!-- profile dropdown menu -->
    <div class="profile-menu-wrap" id="profileMenu">
        <div class="profile-menu">
            <div class="user-info">
                <img src="all-image/user-1.png" alt="">
                <div>
                    <h3> {{ Auth::user()->name }}</h3>
                    <a id="trig2" onclick="event.preventDefault();document.getElementById('prop2').submit();"><form id="prop2" action="/profil">Lihat Profil</form></a>
                </div>
            </div>
            <hr>
            <a href="profileSetting/index.html" class="profile-menu-link">
                <img src="all-image/setting.png" alt="">
                <p>Setelan & Privasi</p>
                <span>></span>
            </a>
            <a href="" class="profile-menu-link">
                <img src="all-image/help.png" alt="">
                <p>Ketentuan Privasi</p>
                <span>></span>
            </a>
            <a id="trig" class="profile-menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logoutform').submit();">
                <img src="all-image/logout.png" alt="">
                <form id="logoutform" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                {{ __('Logout') }}
                <p></p> 
            <span>></span>
            </a>
        </div>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>
{{--  --}}
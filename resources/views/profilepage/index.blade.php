@extends('layouts.navi')
    <!-- content -->
    @section('content')
    <!-- content -->
    <link rel="stylesheet" href="profilepage/style.css">
    <div class="container">
        <div class="profile-main">
            <div class="profile-container">
                <img class="banner" src="all-image/cover-pic.png" width="100%">
                <div class="profile-container-inner">
                    <img src="all-image/user-1.png" class="profile-pic">
                    <h1>
                        @if (is_null($data))
                    {{Auth::user()->name;}}
                    @else 
                    
                    {{$data->displayname;}}
                    @endif
                </h1>
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, nesciunt!</b>
                    <p>{{$data->displaylocation}} &middot; {{$data->displayemail}} &middot; {{$data->displayphone}} &middot; <a style="color: var(--bs-link-color);" onclick="event.preventDefault();document.getElementById('prope').submit();">Edit Profil<form id="prope" action="/profiledit" ></form></a></p>
                    
                </div>
            </div>
            <div class="profile-description">
                <h2>Tentang</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur molestiae blanditiis aut ullam
                    possimus accusamus nemo non consectetur reiciendis inventore ipsum incidunt molestias minus,
                    exercitationem sunt cumque temporibus officiis! Vel!</p>
            </div>
            <div class="profile-description">
                <h2>Pengalaman</h2>
                <div class="profile-desc-row">
                    <div>
                        <h3>{{$data->displaycompanypostition}}</h3>
                        <b>{{$data->displaycompany}}</b>
                        <b>2021 - Sekarang</b>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro repellat velit, earum iste
                            labore similique sed temporibus eligendi fugiat dolor, iusto, vero recusandae voluptatem
                            necessitatibus beatae assumenda enim sit qui!</p>
                        <hr>
                    </div>
                </div>
                <div class="profile-desc-row">
                    <div>
                        <h3>{{$data->displaycompanypostition}}</h3>
                        <b>{{$data->displaycompany}}</b>
                        <b>2021 - Sekarang</b>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro repellat velit, earum iste
                            labore similique sed temporibus eligendi fugiat dolor, iusto, vero recusandae voluptatem
                            necessitatibus beatae assumenda enim sit qui!</p>
                        <hr>
                    </div>
                </div>
                <div class="profile-desc-row">
                    <div>
                        <h3>{{$data->displaycompanypostition}}</h3>
                        <b>{{$data->displaycompany}}</b>
                        <b>2021 - Sekarang</b>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro repellat velit, earum iste
                            labore similique sed temporibus eligendi fugiat dolor, iusto, vero recusandae voluptatem
                            necessitatibus beatae assumenda enim sit qui!</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="education">
                <h2>Pendidikan</h2>
                <div class="profile-edu-row">
                    <div>
                        <h3>Stanford</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro repellat velit, earum iste
                            labore similique sed temporibus eligendi fugiat dolor, iusto, vero recusandae voluptatem
                            necessitatibus beatae assumenda enim sit qui!</p>
                        <hr>
                    </div>
                </div>
                <div class="profile-edu-row">
                    <div>
                        <h3>Stanford</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro repellat velit, earum iste
                            labore similique sed temporibus eligendi fugiat dolor, iusto, vero recusandae voluptatem
                            necessitatibus beatae assumenda enim sit qui!</p>
                        <hr>
                    </div>
                </div>
                <div class="profile-edu-row">
                    <div>
                        <h3>Stanford</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro repellat velit, earum iste
                            labore similique sed temporibus eligendi fugiat dolor, iusto, vero recusandae voluptatem
                            necessitatibus beatae assumenda enim sit qui!</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="profilepage/script.js"></script>
    @endsection
</body>

</html>

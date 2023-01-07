@extends('layouts.navi')
    <head>
        <style>
            .create-post-links li:last-child{
                display: flex;
                flex-basis: 100%;
                color: black;
                border-bottom-left-radius: 15px;
            }
            .sidebar-news h2{
                font-size: large;
                padding: 10px;
                margin-bottom: 15px;
                color: #045be6;
            }
            .sidebar-news p{
                font-size: medium;
                padding: 10px;
            }
        </style>
    </head>
    <!-- content -->
    @section('content')
    <div class="container">
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="all-image/cover-pic.png" width="100%">
                <div class="sidebar-profile-info">
                    <img src="all-image/user-1.png" alt="">
                    <h1>{{ Auth::user()->name }}</h1>
                    <h3>Web Developer di KNHKM</h3>
                    <p>Total Kunjungan Profil <span>52</span></p>
                    <p>Total Unggahan <span>4</span></p>
                </div>
                <div class="sidebar-profile-link">
                    <a onclick="event.preventDefault();document.getElementById('prop').submit();"><form id="prop" action="/profil" >Profil Saya</form></a>
                </div>
            </div>

            <div class="sidebar-activity">
                <h3>Baru-Baru Ini</h3>
                <a href="#"><img src="all-image/recent.png">Web Development</a>
                <a href="#"><img src="all-image/recent.png">User Interface</a>
                <a href="#"><img src="all-image/recent.png">Online Teaching</a>
            </div>
        </div>
        <div class="main-content">
            <div class="create-post">
                <div class="create-post-input">
                    <img src="all-image/user-1.png" alt="">
                    <textarea rows="2" placeholder="Buat Unggahan"></textarea>
                </div>
                <div class="create-post-links">
                    <li>Unggah</li>
                </div>
            </div>
            <div class="post">
                <div class="post-author">
                    <a href="profilepage/index.html"><img src="all-image/user-3.png" alt=""></a>
                    <div>
                        <h1>Kertya Pramana</h1>
                        <small>Backend Engineer di KNHKM</small>
                        <small>2 Jam Yang Lalu</small>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque
                    temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia.
                    Nesciunt similique optio ex.</p>
                <img src="all-image/post-image-1.png" width="100%">
            </div>
            <div class="post">
                <div class="post-author">
                    <a href="profilepage/index.html"><img src="all-image/user-3.png" alt=""></a>
                    <div>
                        <h1>Kertya Pramana</h1>
                        <small>Backend Engineer di KNHKM</small>
                        <small>2 Menit Yang Lalu</small>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque
                    temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia.
                    Nesciunt similique optio ex.</p>
                <img src="all-image/post-image-1.png" width="100%">
            </div>
            <div class="post">
                <div class="post-author">
                    <a href="profilepage/index.html"><img src="all-image/user-3.png" alt=""></a>
                    <div>
                        <h1>Kertya Pramana</h1>
                        <small>Backend Engineer di KNHKM</small>
                        <small>2 Menit Yang Lalu</small>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque
                    temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia.
                    Nesciunt similique optio ex.</p>
                <img src="all-image/post-image-1.png" width="100%">
            </div>
        </div>

        <div class="right-sidebar">
            <div class="sidebar-news">
                <h2>Motivasi Hari Ini</h2>
                <p>
                    "If you are not willing to risk the unusual, you will have to settle for the ordinary."
                </p>
            </div>
        </div>
    </div>

    <script src="jobpage/script.js"></script>
    @endsection
</body>

</html>

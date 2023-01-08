@extends('layouts.navi')
@section('content')
<head>
    <style>
        .create-post-links{
            display: flex;
            flex-basis: 100%;
        }
        input[type="file"]{
            display: none;
        }
        .sidebar-news a{
            margin: 20px;
        }
        .kategori{
            border-radius: 0;
        }
        .dropdown-menu li{
            border-radius: 0;
            border-bottom-right-radius: 0;
            border: 0;
            display: flex;
            flex-basis: 100%;
        }
        .dropdown-menu li:last-child{
            background: white;
            color: black;
            border-top: 0;
            border-right: 0;
            border-bottom-right-radius: 0;
        }
        .create-post-links li:last-child{
            display: flex;
            flex-basis: 100%;
            color: white;
            border-bottom-left-radius: 0;
        }
        .sidebar-news{
            margin-bottom: 15px;
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
<body>

    <!-- content -->
    <div class="container">
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="all-image/cover-pic.png" width="100%">
                <div class="sidebar-profile-info">
                    <img src="all-image/user-1.png" alt="">
                    <h1>Raditia Satriawan</h1>
                    <h3>Web Developer di KNHKM</h3>
                    <p>Total Kunjungan Profil <span>52</span></p> 
                    <p>Total Unggahan <span>4</span></p> 
                </div>
                <div class="sidebar-profile-link">
                    <a href="profilepage/index.html">Profil Saya</a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="create-post">
                <div class="create-post-input">
                    <img src="all-image/user-1.png" alt="">
                    <textarea rows="2" placeholder="Buat Unggahan"></textarea>
                </div>
                <div class="create-post-links justify-content-center">
                    <li>
                        <button class="kategori btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Kategori
                        </button>
                        <ul class="dropdown-menu">
                            <li>Edukasi</li>
                            <li>Sosial</li>
                            <li>Pribadi</li>
                        </ul>
                    </li>

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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia.</p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia. Nesciunt similique optio ex.</p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia. Nesciunt similique optio ex.</p>
            </div>
        </div>
        
        <div class="right-sidebar">
            <div class="sidebar-news">
                <img src="all-image/more.png" class="info-icon">
                <h3>Kategori</h3>
                <a href="#">Edukasi</a>
                <a href="#">Sosial</a>
                <a href="#">Pribadi</a>
            </div>
            <div class="sidebar-news">
                <h2>Motivasi Hari Ini</h2>
                <p>
                    "If you are not willing to risk the unusual, you will have to settle for the ordinary."
                </p>
            </div>
        </div>
    </div>

    <script src="jobpage/script.js"></script>
</body>
@endsection
</html>

@extends('layouts.navi')
@section('content')
<head>
    <style>
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
        }
        .dropdown-menu li:last-child{
            background: white;
            color: black;
            border-top: 0;
            border-right: 0;
            border-bottom-right-radius: 0;
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
                        <input type="file" id="photo" accept="image/*">
                        <label for="file"> <img src="all-image/photo.png" alt="">Foto</label>
                    </li>

                    <li>
                        <input type="file" id="photo" accept="image/*">
                        <label for="file"> <img src="all-image/video.png" alt="">Video</label>
                    </li>

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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia. Nesciunt similique optio ex.</p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia. Nesciunt similique optio ex.</p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum excepturi atque doloremque temporibus accusantium, illum delectus quasi eum et aliquam quod consequatur blanditiis harum quia. Nesciunt similique optio ex.</p>
                <img src="all-image/post-image-1.png" width="100%">
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
        </div>
    </div>

    <script src="jobpage/script.js"></script>
</body>
@endsection
</html>

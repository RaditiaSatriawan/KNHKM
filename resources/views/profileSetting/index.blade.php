<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Setelan & Privasi</title>
    <link rel="icon" href="all-image/carfilogo1.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="profilesetting/style.css">
</head>

<body>
    <div class="back">
        <div class="row justify-content-left">
            <div class="col-2 text-justify">
                <a href="{{ URL::previous() }}">Kembali</a>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <h1 class="mb-5">Pengaturan Akun</h1>
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">
                    <div class="p-4">
                        <div class="img-circle text-center mb-3">
                            <img src="all-image/user-1.png" alt="Image" class="shadow">
                        </div>
                        <h4 class="text-center">Raditia Satriawan</h4>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
                            aria-controls="account" aria-selected="true">
                            <i class="fa fa-home text-center mr-1"></i>
                            Profil
                        </a>
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                            aria-controls="password" aria-selected="false">
                            <i class="fa fa-key text-center mr-1"></i>
                            Kata Sandi
                        </a>
                        <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
                            aria-controls="security" aria-selected="false">
                            <i class="fa fa-user text-center mr-1"></i>
                            Pengalaman
                        </a>
                        <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab"
                            aria-controls="application" aria-selected="false">
                            <i class="fa fa-tv text-center mr-1"></i>
                            Pendidikan
                        </a>
                    </div>
                </div>
                <form action="/uploadprofile" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <h3 class="mb-4">Pengaturan Akun</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Depan</label>
                                        <input type="text" class="form-control" name="frontName" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Belakang</label>
                                        <input type="text" class="form-control" name="backName" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="displayemail" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="text" class="form-control" name="displayphone" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Perusahaan</label>
                                        <input type="text" class="form-control" name="displaycompany" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Posisi</label>
                                        <input type="text" class="form-control" name="displaycompanypostition" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" class="form-control" name="province" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Negara</label>
                                        <input type="text" class="form-control" name="country" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Profil</label>
                                        <input class="form-control" type="file" id="formFile"
                                            accept="image/png, image/jpeg" name="photo" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Banner</label>
                                        <input class="form-control" type="file" id="formFile"
                                            accept="image/png, image/jpeg" name="banner" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-light" type="Submit">Perbarui</button>
                                <button type="button" class="btn btn-light">Batal</button>
                            </div>
                        </div>
                </form>
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <h3 class="mb-4">Pengaturan Kata Sandi</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kata Sandi Lama</label>
                                <input type="password" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kata Sandi Baru</label>
                                <input type="password" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Konfirmasi Kata Sandi Baru</label>
                                <input type="password" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Perbarui</button>
                        <button class="btn btn-light">Batal</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                <form action="/uploadcompany" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <h3 class="mb-4">Pengalaman</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Perusahaan</label>
                                <input type="text" class="form-control" name="companyname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="companyrank">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tahun Mulai Bekerja</label>
                                <input type="text" class="form-control" name="companyserve">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tahun Selesai Bekerja</label>
                                <input type="text" class="form-control" placeholder="Ketik Sekarang Jika Masih Bekerja" name="companydeco">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="desc">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Perbarui</button>
                        <button class="btn btn-light">Batalkan</button>
                    </div>
                </div>
                </form>
                <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                    <h3 class="mb-4">Pendidikan</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Universitas atau Penyelenggara Pendidikan</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Perbarui</button>
                        <button type="button" class="btn btn-light">Batalkan</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>

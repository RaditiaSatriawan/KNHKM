<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Masuk - CarFi</title>
    <link rel = "icon" href ="../../../public/all-image/carfilogo1.png" type = "image/x-icon">
    <link rel="stylesheet" href="logincss/style.css">
  </head>
  <body>
    <div class="center">
      <h1>Masuk</h1>
      <form action="/login" method="post">
       {{ csrf_field() }}
        <div class="txt_field">
          <input id="username" name="username" type="text" required autofocus>
          <span></span>
          <label for="username">Nama Pengguna</label>
        
          <!-- @error('username')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
            class="form-control @error('username') is-invalid @enderror"
          @enderror -->
        
        </div>
        <div class="txt_field">
          <input name="password" id="password" type="password" required>
          <span></span>
          <label>Kata Sandi</label>
        </div>
        <input type="submit" value="Masuk">
        <div class="signup_link">
          Bukan Anggota? <a action={{ {{ route('register') }}}}>Daftar</a>
        </div>
      </form>
    </div>

  </body>
</html>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Masuk - CarFi</title>
    <link rel = "icon" href ="../../../public/all-image/carfilogo1.png" type = "image/x-icon">
    <link rel="stylesheet" href="logincss/style.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <div class="center">
      <h1>Masuk</h1>
      <form action="{{ route('login') }}" method="POST">
       {{ csrf_field() }}
        <div class="txt_field">
          <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"  autofocus>
         @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
          </span>
        @enderror
       
          <span></span>
          <label for="username">Email</label>


        
        </div>
        <div class="txt_field">
          <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror"  required autocomplete="current-password" required>
          @error('password')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
          @enderror
          <span></span>
          <label>Kata Sandi</label>
        </div>
        <input type="submit" value="Masuk">
        <div class="signup_link">
          Bukan Anggota? <a href="{{ route('register') }}">Daftar</a>
        </div>
      </form>
    </div>

  </body>
</html>

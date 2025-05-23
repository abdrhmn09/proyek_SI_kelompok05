<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Suara Kampus</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
  }
  
  body {
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    max-width: 400px;
    /* width: 300px; */
    min-height: 100vh;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    z-index: 0;
  }
  
  .header {
    height: 180px;
    clip-path: ellipse(100% 165% at 0% 0%);
    background-color: rgba(0, 128, 128, 0.7);

    position: relative;
  }

  .header img {
    width: 100%;
    object-fit: cover;
    display: block;
  }
  
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 200%;
    background-color: rgba(0, 128, 128, 0.515);
  }
  
  .overlay h1 {
    font-size: 2em;
    font-weight: bold;
    color: white;
    padding-top: 60px;
    padding-bottom: 15px;
    padding-left: 30px;
  }
  
  .overlay .tagline {
    font-size: 1.1em;
    color: white;
    padding: 30px;
    padding-top: 0;


  }
  
  .login-box {
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 80px;
    text-align: center;
    z-index: 1;
  }
  
  .login-box h2 {
    color: #2d726d;
    margin-bottom: 20px;
    font-weight: bold;
    font-size: 30px;
    padding-top:5px;
  }
  
  .login-box input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
    outline: none;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  
  .login-box button {
    width: 100%;
    padding: 10px;
    margin-top: 12px;
    background-color: #41bfb3;
    color: white;
    border: none;
    border-radius: 10px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
  }
  
  .login-box button:hover {
    background-color: #369e91;
  }
  
  </style>
<body>
  <div class="container">
    <div class="header">
    <img src="/campus.jpg" alt="Gedung Kampus">
      <div class="overlay">
        
        <h1>SUARA KAMPUS</h1>
        <p class="tagline">"Dari Mahasiswa, Untuk Perubahan"</p>
      </div>
    </div>
    
    <div class="login-box">
  <h2>Register</h2>

  {{-- Tampilkan error validasi jika ada --}}
  @if ($errors->any())
    <div style="color:red;">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}" required>
    <input type="text" name="NPM" placeholder="NPM" value="{{ old('NPM') }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    <input type="text" name="no_telepon" placeholder="No Telepon (opsional)" value="{{ old('no_telepon') }}">
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
    
    <button type="submit">Daftar</button>

    <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
  </form>
</div>

  </div>
</body>
</html>

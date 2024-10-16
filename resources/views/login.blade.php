<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiGENDO - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url({{ URL('storage/background.png') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 1200px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.85);
            overflow: hidden;
        }

        .login-content {
            display: flex;
            flex-direction: row;
        }

        .form-section {
            padding: 20px;
            flex: 1;
        }

        .img-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-section img {
            width: 100%;
            max-width: 500;
            height: auto;
        }

        h2 {
            padding: 15px;
            font-family: 'Times New Roman', sans-serif;
            font-style: inherit;
            font-weight: normal;
            text-align: left;
        }
        h2.card-title {
            background-color: #A80063; /* Tambah warna latar belakang */
            color: white; /* Warna teks */
            padding: 10px; /* Padding untuk ruang di dalam elemen */
            border-radius: 30px; /* Agar sudut lebih melengkung */
            text-align: center; /* Tengah-kan teks */
        }
        .input-group {
            margin-bottom: 15px;
        }

        .input-group-text {
            background-color: #f8f9fa;
        }

        .button-group {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button-group button {
            margin: 0 10px;
        }

        .btn-custom-login {
            background-color: #A80063;
            color: white;
            border-radius: 30px;
        }

        .btn-custom-login:hover {
            background-color: #000000;
            color: white;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="col-lg-8">
            <div class="card">
                <h2>SiGENDO</h2>
                <div class="login-content">
                    <div class="img-section">
                        <img src="{{ URL('storage/nusaputra.png') }}" alt="Login Image">
                    </div>
                    <div class="form-section">
                        <h1 class="card-title text-center">Selamat Datang di SiGENDO (Sistem Genetika Jadwal Dosen)</h1>
                        <h2 class="card-title text-center">Masuk ke Akun Anda</h2>
                        @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="nama@gmail.com"
                                    required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Kata Sandi"
                                    required>
                            </div>
                            <div class="button-group">
                                <button type="submit" class="btn btn-custom-login">Masuk</button>
                                <a href="{{route('register')}}"><button type="button" class="btn btn-custom-login">Buat Akun</button></a>
                            </div>
                            <p class="mt-3 text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>

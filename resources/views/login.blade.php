<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiGENDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CDN -->
    <style>
        /* Background image styling */
        body {
            background-image: url({{ URL('storage/background.png')}}); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Full viewport height */
        }

        /* Center the card vertically */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 1000px; /* Set the desired width of the card */
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Card shadow */
            border-radius: 10px; /* Rounded corners */
            background-color: rgba(255, 255, 255, 0.85); /* Slight transparency */
            overflow: hidden; /* Ensure content is contained */
        }

        .card img {
            width: 100%; /* Full width for image */
            height: auto;
        }

        .login-content {
            display: flex;
            flex-direction: row;
        }

        .form-section {
            padding: 20px;
            flex: 1; /* Makes form section expand to fill space */
        }

        .img-section {
            flex: 1;
            max-width: 300px; /* Set max width for image section */
        }

        h2 {
            padding: 15px;
            font-family: 'Times New Roman', sans-serif; /* Apply Poppins font */
            font-style: inherit;
            font-weight: bold;
            text-align: left; /* Center the title */
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group-text {
            background-color: #f8f9fa; /* Light background for icon */
        }

        .button-group {
            display: flex;
            justify-content: center; /* Center buttons */
            margin-top: 20px; /* Space above the button group */
        }

        .button-group button {
            margin: 0 10px; /* Space between buttons */
        }

        /* Custom button styles */
        .btn-custom-login {
            background-color: #A80063; /* Blue color for login button */
            color: white; /* Text color */
        }

        .btn-custom-login:hover {
            background-color: #000000; /* Darker blue on hover */
            color: white; /* Ensure text stays white */
        }

        .btn-custom-register {
            background-color: #A80063; /* Green color for register button */
            color: white; /* Text color */
        }

        .btn-custom-register:hover {
            background-color: #000000; /* Darker green on hover */
            color: white; /* Ensure text stays white */
        }

        .remember-me {
            display: flex;
            justify-content: space-between; /* Space between checkbox and link */
            align-items: center; /* Center the checkbox and label */
            margin-top: 15px; /* Space above the remember me section */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="col-lg-6">
            <div class="card">
                <h2>SiGENDO</h2>
                <div class="login-content">
                    <div class="img-section">
                        <img src="{{ URL('storage/nusaputra.png')}}" alt="Login Image"> <!-- Replace with your login image URL -->
                    </div>
                    <div class="form-section">
                        <h1 class="card-title text-center">Selamat Datang di SiGENDO (Sistem Genetika Jadwal Dosen)</h1>
                        @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@gmail.com" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi" required>
                            </div>
                            <div class="remember-me">
                                <div>
                                    <input type="checkbox" id="rememberMe" name="remember" value="1">
                                    <label for="rememberMe" class="ms-2">Ingat Saya</label>
                                </div>
                                <div>
                                    <a href="">Lupa Password?</a>
                                </div>
                            </div>
                            <div class="button-group">
                                <button type="submit" class="btn btn-custom-login">Masuk</button>
                                <a href="{{route('register')}}"><button type="button" class="btn btn-custom-register">Buat Akun</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

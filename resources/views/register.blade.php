<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
        }

        .register-card h1 {
            font-weight: 700;
            font-size: 28px;
            color: #2c3e50;
        }

        .register-card h3 {
            font-weight: 400;
            font-size: 16px;
            color: #3b3b98;
        }

        .form-label {
            font-weight: 500;
            color: #2c3e50;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            border: none;
            border-radius: 12px;
            font-weight: 600;
            color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        img {
            max-width: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="register-card text-center">
                    <img src="{{ asset('images/pnc_logo1.png') }}" alt="Logo PNC" class="mb-3">
                    <h1 class="mb-2">Register</h1>
                    <h3 class="mb-4">Sistem Booking Konsultasi Dosen</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3 text-start">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>


                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Pilihan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.96);
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.18);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    .glass-card img {
      width: 80px;
      margin-bottom: 20px;
    }

    .glass-card h1 {
      font-weight: 600;
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }

    .glass-card p {
      color: #555;
      font-size: 14px;
      margin-bottom: 30px;
    }

    .btn-primary {
      border: none;
      border-radius: 12px;
      padding: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
      background: linear-gradient(to right,rgb(228, 228, 228), #00f2fe);
    }

    .btn-primary:hover {
      transform: scale(1.05);
      background: linear-gradient(to right, #00f2fe, #4facfe);
    }
  </style>
</head>
<body>

  <div class="glass-card">
    <img src="{{ asset('images/pnc_logo.png') }}" alt="Logo Kampus">
    <h1>Selamat Datang</h1>
    <p>Sistem Booking Konsultasi Dosen</p>

     <a href="{{ url('/login') }}" class="btn btn-primary btn-lg w-100 mb-2">Login</a>
     <a href="{{ url('/register') }}" class="btn btn-outline-primary btn-lg w-100">Register</a>

  </div>

</body>
</html>

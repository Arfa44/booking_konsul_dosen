<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hapus Data Dosen - Use Cash</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
  <div class="container">
    <h3>Konfirmasi Hapus Dosen</h3>
    <p><strong>Nama:</strong> Sidiq</p>
    <p><strong>Email:</strong> yyyyyy</p>
    <form action="/hapus_data_dosen" method="POST">
      @csrf
      <input type="hidden" name="id" value="1">
      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
      <a href="/dosen" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</body>
</html>

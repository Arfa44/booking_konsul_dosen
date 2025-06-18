<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hapus Data Mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body>
<div class="container mt-5">
 
  <form action="/admin/mahasiswa" method="POST">
    @csrf
    @method('DELETE')
    
  </form>
</div>
</body>
</html>

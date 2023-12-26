<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pelanggan</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/form.css') }}">

</head>
<body>
  <form action="/insertdata" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Masukan Data Diri Anda</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" name="nama" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nama</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="number" name="contact" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Contact</label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" name="alamat" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Alamat</>
      </div>
      <button type="text" class="submit">submit</button>
    </div>
</form>
</body>
</html>
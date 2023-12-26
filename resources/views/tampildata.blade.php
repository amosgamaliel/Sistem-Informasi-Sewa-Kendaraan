<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pelanggan</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/form.css') }}">
</head>
<body>
  <form action="/updatedata/{{ $data->id}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form">
      <div class="title">Edit Data</div>
      <div class="subtitle">Anda sedang melakukan perubahan</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" name="nama" placeholder=" "  value="{{ $data->nama }}"/>
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nama</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="number" name="contact" placeholder=" " value="{{ $data->contact }}" />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Contact</label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" name="alamat" placeholder=" "  value="{{ $data->alamat }}" />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Alamat</>
      </div>
      <button class="submit">simpan perubahan</button>
    </div>
</form>

</body>
</html>
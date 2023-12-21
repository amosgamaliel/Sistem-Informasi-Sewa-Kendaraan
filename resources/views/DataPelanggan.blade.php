<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">DATA PELANGGAN</h1>

    <div class="container">
    <a href="/tambahpelanggan" type="button" class="btn btn-success">Tambah +</a>
        <div class="row">
          @if($message = Session::get('succes'))
          <div class="alert alert-success" role="alert">
            {{$message}}
            @endif
          </div>
        </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">No_Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $row->id}}</th>
      <td>{{ $row->nama}}</td>
      <td>0{{ $row->no_telepon}}</td>
      <td>{{ $row->alamat}}</td>
      <td>
        <a href="/delete/{{ $row->id}}" class="btn btn-danger">Hapus</a>
        <a href="/tampilkandata/{{ $row->id}}" class="btn btn-info">Edit</a>
    </td>
    </tr>
    @endforeach
  

        </div>

    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
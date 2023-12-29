<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA DENDA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgrey">
    <h1 class="text-center mb-4">TAMBAH DATA<h1>

        <div class="container">

            <form action="/simpandata" method="POST" enctype="multipart/form-dataq" class="row g-3">
                @csrf
                <div class="col-md-6">
                  <h5 for="inputEmail4" class="form-h5">Hari</h5>
                  <input type="number" name="hari" class="form-control" id="inputEmail4"  placeholder="12 hari">
                </div>
                <div class="col-md-6">
                  <h5 for="inputPassword4" class="form-h5">Jumlah Denda</h5>
                  <input type="number" name="jumlah_denda" class="form-control" id="inputNominal4"  placeholder="250000">
                </div>
                <div class="col-md-4">  
                <div class="col-12">
                </div>
                <div class="col-46">
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
              </form>
            <div class="row"> 
</body>
</html>
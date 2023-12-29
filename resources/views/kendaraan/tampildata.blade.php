<x-app-layout>
    <div>
        <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

            <title>Kendaraan</title>
        </head>

        <body>
            <h2>
                <div class="text-center mb-4">Edit Data Kendaraan</div>
            </h2>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('kendaraan.update', $data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Model Kendaraan</label>
                                        <input type="text" class="form-control" name="model_kendaraan" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->model_kendaraan }}">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tipe Kendaraan</label>
                                            <select class="form-select" name="tipe_kendaraan_id" aria-label="Default select example">
                                                <option selected>{{$data->tipe_kendaraan_id}}</option>
                                                <option value="Mobil">Mobil</option>
                                                <option value="Motor">Motor</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Merk Kendaraan</label>
                                            <input type="text" name="merk_kendaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->merk_kendaraan}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nomor Polisi</label>
                                        <input type="text" name="nomor_polisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nomor_polisi}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nomor Rangka</label>
                                        <input type="text" name="nomor_rangka" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nomor_rangka }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nomor Mesin</label>
                                        <input type="text" class="form-control" name="nomor_mesin" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nomor_mesin }}">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tahun Pembuatan</label>
                                            <input type="text" name="tahun_pembuatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tahun_pembuatan}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Harga Sewa/Hari</label>
                                            <input type="text" name="harga_sewa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->harga_sewa}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
        </body>

        </html>
    </div>
</x-app-layout>
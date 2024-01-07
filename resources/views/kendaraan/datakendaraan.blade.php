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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
                integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
                crossorigin="anonymous">

            <title>Kendaraan</title>
        </head>

        <body>
            @php
                $noid = 1;
            @endphp
            <div class="overflow-auto">
                <div class="container m-5">
                    <button type="button" class="btn btn-success mt-5 mb-5" data-bs-toggle="modal"
                        data-bs-target="#exampleModalLong">
                        Tambah+
                    </button>
                    <div class="row">
                        <div class="col-md-5">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $message }}
                                </div>
                            @endif
                            <table
                                class="table table-hover table-striped table-borderless text align-middle text-center">
                                <thead>
                                    <tr class="text align-middle">
                                        <th scope="col">Model Kendaraan</th>
                                        <th scope="col">Merk Kendaraan</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Transmisi</th>
                                        <th scope="col">Daya</th>
                                        <th scope="col">Bahan Bakar</th>
                                        <th scope="col">Warna</th>
                                        <th scope="col">Nomor Polisi</th>
                                        <th scope="col">Nomor Rangka</th>
                                        <th scope="col">Nomor Mesin</th>
                                        <th scope="col">Tahun Pembuatan</th>
                                        <th scope="col">Harga Sewa/Hari</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->brand->nama }}</td>
                                            <td>{{ $row->category->nama }}</td>
                                            <td>{{ $row->type->nama }}</td>
                                            <td>{{ $row->daya }}</td>
                                            <td>{{ $row->bahan_bakar }}</td>
                                            <td>{{ $row->warna }}</td>
                                            <td>{{ $row->plat_nomor }}</td>
                                            <td>{{ $row->nomor_rangka }}</td>
                                            <td>{{ $row->nomor_mesin }}</td>
                                            <td>{{ $row->tahun_pembuatan }}</td>
                                            <td>{{ $row->harga }}</td>
                                            <td>
                                                <a href="{{ route('kendaraan.show', $row->id) }}"
                                                    class="btn btn-light">Edit</a>
                                                <a href="{{ route('kendaraan.delete', $row->id) }}"
                                                    class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kendaraan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form action="{{ route('kendaraan.insert') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Model
                                                                Kendaraan</label>
                                                            <input type="text" class="form-control" name="nama"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Slug</label>
                                                            <input type="text" class="form-control" name="slug"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Merk
                                                                Kendaraan</label>
                                                            <input type="text" name="brand_id" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Kategori</label>
                                                            <input type="text" name="category_id"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Transmisi</label>
                                                            <input type="text" name="type_id"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Daya</label>
                                                            <input type="text" name="daya" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Bahan
                                                                Bakar</label>
                                                            <input type="text" name="bahan_bakar"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Warna</label>
                                                            <input type="text" name="warna" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Nomor
                                                                Polisi</label>
                                                            <input type="text" name="plat_nomor"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Nomor
                                                                Rangka</label>
                                                            <input type="text" name="nomor_rangka"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Nomor
                                                                Mesin</label>
                                                            <input type="text" class="form-control"
                                                                name="nomor_mesin" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Tahun
                                                                Pembuatan</label>
                                                            <input type="text" name="tahun_pembuatan"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                                            <input type="text" name="deskripsi"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Harga
                                                                Sewa/Hari</label>
                                                            <input type="text" name="harga" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Confirm</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    </body>

    </html>
    </div>
</x-app-layout>

<x-app-layout>
    <h3 class="text-center mb-4">TAMBAH DATA<h1>

        <div class="container">

          <form action="{{route('denda.insert')}}" method="POST" enctype="multipart/form-dataq" class="row g-3">
            @csrf
            <div class="col-md-6">
              <h5 for="inputEmail4" class="form-h5">Hari</h5>
              <input type="number" name="hari" class="form-control" id="inputEmail4" placeholder="Jumlah hari">
            </div>
            <div class="col-md-6">
              <h5 for="inputPassword4" class="form-h5">Jumlah Denda</h5>
              <input type="number" name="jumlah_denda" class="form-control" id="inputNominal4" placeholder="Nilai denda">
            </div>
            <div class="col-md-4">
              <div class="col-12">
              </div>
              <div class="col-46">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
          </form>
        </div>
</x-app-layout>
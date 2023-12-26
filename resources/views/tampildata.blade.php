<x-app-layout>
  <form action="/updatedata/{{ $data->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form">
      <div class="title">Edit Data</div>
      <div class="subtitle">Anda sedang melakukan perubahan</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" name="nama" placeholder=" " value="{{ $data->nama }}" />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nama</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="number" name="contact" placeholder=" " value="{{ $data->contact }}" />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Contact</label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" name="alamat" placeholder=" " value="{{ $data->alamat }}" />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Alamat</>
      </div>
      <button class="submit">simpan perubahan</button>
    </div>
  </form>

</x-app-layout>
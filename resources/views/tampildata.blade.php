<x-app-layout>
<form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-container ic1">
        <label for="firstname" class="placeholder">Nama</label>
        <div class="cut"></div>
        <input id="firstname" class="input" type="text" name="nama" placeholder=" " value="{{ $data->nama }}"  />
      </div>
      <div class="input-container ic2">
        <label for="lastname" class="placeholder">Nik</label>
        <div class="cut"></div>
        <input id="lastname" class="input" type="number" name="nik" placeholder=" " value="{{ $data->nik }}"  />
      </div>
      <div class="input-container ic2">
        <label for="lastname" class="placeholder">No_Hp</label>
        <div class="cut"></div>
        <input id="lastname" class="input" type="number" name="No_Hp" placeholder=" " value="{{ $data->no_hp }}"  />
      </div>
      <div class="input-container ic2">
        <label for="email" class="placeholder">Email</>
        <div class="cut cut-short"></div>
        <input id="email" class="input" type="text" name="email" placeholder=" " value="{{ $data->email }}" />
      </div>
      <div class="input-container ic2">
        <label for="email" class="placeholder">Alamat</>
        <div class="cut cut-short"></div>
        <input id="email" class="input" type="text" name="alamat" placeholder=" " value="{{ $data->alamat }}" />
      </div>
      <button type="text" class="submit">Simpan Perubahan</button>
    </div>
  </form>

</x-app-layout>
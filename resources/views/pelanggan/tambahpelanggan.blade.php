<x-app-layout>
  <form action="{{route('pelanggan.insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Masukan Data Diri Anda</div>
      <div class="input-container ic1">
        <label for="firstname" class="placeholder">Nama</label>
        <div class="cut"></div>
        <input id="firstname" class="input" type="text" name="nama" placeholder=" " />
      </div>
      <div class="input-container ic2">
        <label for="lastname" class="placeholder">Nik</label>
        <div class="cut"></div>
        <input id="lastname" class="input" type="number" name="nik" placeholder=" " />
      </div>
      <div class="input-container ic2">
        <label for="lastname" class="placeholder">No_Hp</label>
        <div class="cut"></div>
        <input id="lastname" class="input" type="number" name="No_Hp" placeholder=" " />
      </div>
      <div class="input-container ic2">
        <label for="email" class="placeholder">Email</>
        <div class="cut cut-short"></div>
        <input id="email" class="input" type="text" name="email" placeholder=" " />
      </div>
      <div class="input-container ic2">
        <label for="email" class="placeholder">Alamat</>
        <div class="cut cut-short"></div>
        <input id="email" class="input" type="text" name="alamat" placeholder=" " />
      </div>
      <button type="text" class="submit">submit</button>
    </div>
  </form>
</x-app-layout>
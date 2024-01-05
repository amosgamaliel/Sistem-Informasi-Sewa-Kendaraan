<x-app-layout>
  <form action="/insertdata" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Masukan Data Diri Anda</div>
      <div class="input-container ic1">
        <label for="firstname" class="placeholder">Nama</label>
        <div class="cut"></div>
        <input id="firstname" class="input" type="text" name="nama" placeholder="Ini Nama" />
      </div>
      <div class="input-container ic2">
        <label for="lastname" class="placeholder">Nik</label>
        <div class="cut"></div>
        <input id="lastname" class="input" type="number" name="nik" placeholder="33200xxxxxxxxxxx" />
      </div>
      <div class="input-container ic2">
        <label for="lastname" class="placeholder">No_Hp</label>
        <div class="cut"></div>
        <input id="lastname" class="input" type="number" name="No_Hp" placeholder="082xxxxxxxxx" />
      </div>
      <div class="input-container ic2">
        <label for="email" class="placeholder">Email</>
        <div class="cut cut-short"></div>
        <input id="email" class="input" type="text" name="email" placeholder="example@gmail.com" />
      </div>
      <div class="input-container ic2">
        <label for="email" class="placeholder">Alamat</>
        <div class="cut cut-short"></div>
        <input id="email" class="input" type="text" name="alamat" placeholder="jl.pemuda.." />
      </div>
      <button type="text" class="submit">submit</button>
    </div>
  </form>
</x-app-layout>
<form  action="/tambahmember" method="POST" enctype="multipart/form-data">
  @csrf
<div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="nama" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Berlangganan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="berlangganan">
      <option>Ya</option>
      <option>Tidak</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="harga" placeholder=" ">
  </div>
  </div>
      <button type="text" class="submit">submit</button>
    </div>
    @include('sweetalert::alert')
</form>
<x-app-layout>
  <h1><span class="blue"></span>DATA<span class="blue"></span> <span class="yellow">PELANGGAN</pan>
  </h1>
  <h2> <a href="/tambahpelanggan" type="button" class="btn btn-success">Tambah +</a></h2>
  <table class="container">
    <thead>
      <tr>
        <th>
          <h1>Id</h1></th>
        <th>
          <h1>Nama</h1>
        </th>
        <th>
          <h1>Nik</h1>
        </th>
        <th>
          <h1>No_Hp</h1>
        </th>
        <th>
          <h1>Email</h1>
        </th>
        <th>
          <h1>Alamat</h1>
        </th>
        <th>
          <h1>Aksi</h1>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $row)
      <tr>
        <th scope="row">{{ $row->id}}</th>
        <td>{{ $row->nama}}</td>
        <td>{{ $row->nik}}</td>
        <td>{{ $row->no_hp}}</td>
        <td>{{ $row->email}}</td>
        <td>{{ $row->alamat}}</td>
        <td>
            <a href="/delete/{{ $row->id }}" class="btn btn-danger hapus" data-id="{{ $row->id}}" data-nama="{{ $row->nama}}">Hapus</a>
            <a href="/tampilkandata/{{ $row->id}}" class="btn btn-info">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- <script src="sweetalert2/dist/sweetalert2.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

  @include('sweetalert::alert')


</x-app-layout>

<!-- <script>
  $('.hapus').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    swal({
        title: "Apakah Anda Yakin?",
        text: "Anda akan menghapus pelanggan Dengan Id " + id + "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete/" + id + ""
          swal("Pelanggan Berhasil Dihapus!", {
            icon: "success",
          });
        } else {
          swal("Pelanggan Tidak Dihapus!");
        }
      });
  });
</script> -->
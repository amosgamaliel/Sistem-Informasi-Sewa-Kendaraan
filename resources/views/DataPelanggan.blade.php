<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>
<h1><span class="blue"></span>DATA<span class="blue"></span> <span class="yellow">PELANGGAN</pan></h1>
<h2> <a href="/tambahpelanggan" type="button" class="btn btn-success">Tambah +</a></h2>
<table class="container">
	<thead>
		<tr>
			<th><h1>Id</h1></th>
			<th><h1>Nama</h1></th>
			<th><h1>Contact</h1></th>
			<th><h1>Alamat</h1></th>
            <th><h1>Aksi</h1></th>
		</tr>
	</thead>
	<tbody>
	@foreach ($data as $row)
    <tr>
      <th scope="row">{{ $row->id}}</th>
      <td>{{ $row->nama}}</td>
      <td>0{{ $row->contact}}</td>
      <td>{{ $row->alamat}}</td>
      <td><a href="#" class="btn btn-danger hapus" data-id="{{ $row->id}}" data-nama="{{ $row->nama}}">Hapus</a></td>
		  <td><a href="/tampilkandata/{{ $row->id}}" class="btn btn-info">Edit</a></td>
    </tr>
    @endforeach
	</tbody>
</table>

        <!-- <script src="sweetalert2/dist/sweetalert2.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        @include('sweetalert::alert')

        
</body>
 <script>
    $('.hapus').click(function(){
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');

        swal({
  title: "Apakah Anda Yakin?",
  text: "Anda akan menghapus pelanggan Dengan Id "+id+"",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+id+""
    swal("Pelanggan Berhasil Dihapus!", {
      icon: "success",
    });
  } else {
    swal("Pelanggan Tidak Dihapus!");
  }
});
    });

 </script>
</html>
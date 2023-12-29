<x-app-layout>
  <h1><span class="blue"></span>DATA<span class="blue"></span> <span class="yellow">PELANGGAN</pan>
  </h1>
  <h2> <a href="{{route('pelanggan.create')}}" type="button" class="btn btn-success">Tambah +</a></h2>
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
            <a href="{{route('pelanggan.delete', $row->id)}}" class="btn btn-danger hapus" data-id="{{ $row->id}}" data-nama="{{ $row->nama}}">Hapus</a>
            <a href="{{route('pelanggan.show', $row->id)}}" class="btn btn-info">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @include('sweetalert::alert')

</x-app-layout>
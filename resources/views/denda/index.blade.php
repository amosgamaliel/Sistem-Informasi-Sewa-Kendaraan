<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{route('denda.create')}}" class="btn btn-md btn-success mb-3">TAMBAH DATA DENDA</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jumlah Denda</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dendas as $denda)
                                <tr>
                                    <td>{{ $denda->hari }}</td>
                                    <td>{!! $denda->jumlah_denda !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/simpandata" class="btn btn-sm btn-danger">HAPUS</a>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data denda belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
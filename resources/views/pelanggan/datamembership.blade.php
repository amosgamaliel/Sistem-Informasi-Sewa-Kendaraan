<x-app-layout>
  <h1>Data Membership</h1>
    <section class="items-center lg:flex bg-blue-50 lg:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
        <div class="pt-4 rounded shadow bg-white dark:bg-gray-900">
        <div class="flex px-6 pb-4 border-b dark:border-gray-700">
            <h1 class="text-xl font-bold dark:text-gray-400"> </h1>
            <h2> <a href="{{route('tambahmembership')}}" type="button" class="btn btn-success inline-block text-green-600 dark:text-green-400">Tambah +</a></h2>

            <form action="{{route('datamembership')}}" method="GET">
            <div class="form-group ml-10 mt-3">
                <input type="cari" class="form-control" id="exampleInputEmail1" nama="cari" aria-describedby="emailHelp" placeholder="Cari..">
            </div>
            </form>
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
        </div>
        <div class="p-4 overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="text-xs text-left text-gray-500 dark:text-gray-400">
                    <th class="px-6 pb-3 font-medium">Id </th>
                    <th class="px-6 pb-3 font-medium ">Nama </th>
                    <th class="px-6 pb-3 font-medium">Slug </th>
                    <th class="px-6 pb-3 font-medium ">Harga </th>            
                </tr>
            </thead>
            <tbody>
                 @foreach ($data as $row)
                    <tr class="text-xs {{$loop->index%2 != 1 ? 'bg-gray-100' : '' }} dark:text-gray-400 dark:bg-gray-700">
                    <td class="px-6 py-5 font-medium">{{ $row->id }}</td>
                    <td class="px-6 py-5 font-medium">{{ $row->nama }}</td>
                    <td class="px-6 py-5 font-medium">{{ $row->slug}}</td>
                    <td class="px-6 py-5 font-medium">{{ $row->harga }}</td>

                <td>
                    <a href="{{route('hapus', $row->id)}}" class="btn btn-danger hapus inline-block text-red-600 dark:text-red-400">Hapus</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </section>

  @include('sweetalert::alert')

</x-app-layout>
<x-app-layout>
  <h1>Data Pelanggan</h1>
    <section class="items-center lg:flex bg-blue-50 lg:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="pt-4 rounded shadow bg-white dark:bg-gray-900">
                <div class="flex px-6 pb-4 border-b dark:border-gray-700">
                    <h1 class="text-xl font-bold dark:text-gray-400"> </h1>
                    <h2> <a href="{{route('pelanggan.create')}}" type="button" class="btn btn-success">Tambah +</a></h2>
                </div>
                <div class="p-4 overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-xs text-left text-gray-500 dark:text-gray-400">
                                <th class="px-6 pb-3 font-medium">Id </th>
                                <th class="px-6 pb-3 font-medium ">Nama </th>
                                <th class="px-6 pb-3 font-medium">Slug </th>
                                <th class="px-6 pb-3 font-medium ">Nik </th>
                                <th class="px-6 pb-3 font-medium">No_HP </th>
                                <th class="px-6 pb-3 font-medium">Email </th>
                                <th class="px-6 pb-3 font-medium">Alamat </th>
                                
                                <th class="px-6 pb-3 font-medium"> </th>
                                
                            </tr>
                        </thead>
    <tbody>
      @foreach ($data as $row)
      <tr class="text-xs {{$loop->index%2 != 1 ? 'bg-gray-100' : '' }} dark:text-gray-400 dark:bg-gray-700">
                                <td class="px-6 py-5 font-medium">{{ $row->id }}</td>
                                <td class="px-6 py-5 font-medium">{{ $row->nama }}</td>
                                <td class="px-6 py-5 font-medium">{{ $row->membership->slug }}</td>
                                <td class="px-6 py-5 font-medium">{{ $row->nik }}</td>
                                <td class="px-6 py-5 font-medium">{{ $row->no_hp }}</td>
                                <td class="px-6 py-5 font-medium">{{ $row->email }}</td>
                                <td class="px-6 py-5 font-medium">{{ $row->alamat }}</td>
                                
                                <td>
                                <a href="{{route('pelanggan.delete', $row->id)}}" class="btn btn-danger hapus inline-block text-red-600 dark:text-red-400">Hapus</a>
                                <a href="{{route('pelanggan.show', $row->id)}}" class="btn btn-info inline-block text-blue-600 dark:text-blue-400">Edit</a>
                                </td>
                            </tr>
      @endforeach
    </tbody>
  </table>
  </section>

  @include('sweetalert::alert')

</x-app-layout>
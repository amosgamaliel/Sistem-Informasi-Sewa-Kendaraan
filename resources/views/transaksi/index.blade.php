<x-app-layout>
    <h1>Filter Nani</h1>
    <section class="items-center lg:flex bg-blue-50 lg:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="pt-4 rounded shadow bg-white dark:bg-gray-900">
                <div class="flex px-6 pb-4 border-b dark:border-gray-700">
                    <h1 class="text-xl font-bold dark:text-gray-400">Table</h1>
                </div>
                <div class="p-4 overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-xs text-left text-gray-500 dark:text-gray-400">
                                <th class="px-6 pb-3 font-medium">Invoice </th>
                                <th class="px-6 pb-3 font-medium ">Kendaraan </th>
                                <th class="px-6 pb-3 font-medium ">Customer </th>
                                <th class="px-6 pb-3 font-medium">Total Bayar</th>
                                <th class="px-6 pb-3 font-medium">Status </th>
                                <th class="px-6 pb-3 font-medium"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksis as $transaksi)
                            <tr class="text-xs {{$loop->index%2 != 1 ? 'bg-gray-100' : '' }} dark:text-gray-400 dark:bg-gray-700">
                                <td class="px-6 py-5 font-medium">{{$transaksi->id}}</td>
                                <td class="px-6 py-5 font-medium">{{$transaksi->kendaraan->nama}}</td>
                                <td class="px-6 py-5 font-medium">{{$transaksi->pelanggan->nama}}</td>
                                <td class="px-6 py-5 font-medium">{{$transaksi->total_bayar}}</td>
                                <td class="px-6">
                                    <span class="inline-block text-green-600 dark:text-green-400">Completed</span>
                                </td>
                                <td class="px-6 py-5 ">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-300 hover:underline">Edit </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $transaksis->links() }}
            </div>
        </div>

    </section>
</x-app-layout>
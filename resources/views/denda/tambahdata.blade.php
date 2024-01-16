<x-app-layout>
    <h1></h1>
    <section class="items-center lg:flex bg-blue-50 lg:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="pt-4 rounded shadow bg-white dark:bg-gray-900">
                <div class="flex px-6 pb-4 border-b dark:border-gray-700">
                    <div class="mb-6 ">
                        <div class="flex items-center bg-gray-100 font-poppins dark:bg-gray-800 ">
                            <div>
                                <div x-data="{ open: false }">
                                    <div x-show="open" class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <!-- Background overlay, show/hide based on modal state -->
                                            <div x-show="open" class="fixed inset-0 transition-opacity"
                                                aria-hidden="true">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <!-- This element is to trick the browser into centering the modal contents. -->
                                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                aria-hidden="true">&#8203;</span>

                                            <!-- Modal -->
                                            <div x-show="open"
                                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                <div class="bg-white">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-2xl font-semibold mb-4">Form
                                                            Detail Denda</h5>
                                                        <button @click="open = false" type="button"
                                                            class="absolute top-0 right-0 m-4 text-gray-700 hover:text-gray-900 focus:outline-none">
                                                            <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-8">
                                                        <form id="form" action="{{route('denda.insert')}}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label
                                                                    class="block text-sm font-medium text-gray-600">Hari <i class="fas fa-user"></i></label>
                                                                <input type="text" name="hari"
                                                                    class="mt-1 p-2 w-full border rounded-md"
                                                                    number="1"
                                                                    placeholder="Masukan jumlah hari"
                                                                    autofocus required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label
                                                                    class="block text-sm font-medium text-gray-600">Jumlah Denda <i class="fas fa-user"></i></label>
                                                                <input type="text" name="jumlah_denda"
                                                                    class="mt-1 p-2 w-full border rounded-md"
                                                                    number="1"
                                                                    placeholder="Masukan jumlah denda"
                                                                    autofocus required>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal-footer p-4">
                                                        <button @click="open = false" type="button"
                                                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                                            Keluar
                                                        </button>
                                                        <button type="submit" form="form"
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                                            Simpan Data
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Trigger button -->
                                    <button @click="open = true" type="button"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Tambah Data 
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-xs text-left text-gray-500 dark:text-gray-400">
                                <th class="px-6 pb-3 font-medium">id </th>
                                <th class="px-6 pb-3 font-medium ">hari </th>
                                <th class="px-6 pb-3 font-medium ">jumlah denda </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dendas as $denda)
                </div>
                <tr class="text-xs {{$loop->index%2 != 1 ? 'bg-gray-100' : '' }} dark:text-gray-400 dark:bg-gray-700">
                    <td class="px-6 py-5 font-medium">{{$denda->id}}</td>
                    <td class="px-6 py-5 font-medium">{{$denda->hari}}</td>
                    <td class="px-6 py-5 font-medium">{{$denda->jumlah_denda}}</td>
                    <td class="px-6 py-5 ">
                        <a href="{{route('denda.edit', $denda->id)}}" class="font-medium text-blue-600 dark:text-blue-300 hover:underline">Edit Data </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <div>
        </div>
        </div>

    </section>
</x-app-layout>
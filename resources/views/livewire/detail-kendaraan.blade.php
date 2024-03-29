<section class="py-10 font-poppins dark:bg-gray-800">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="flex flex-wrap mb-24 -mx-4">
            <div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
                <div class="sticky top-0 overflow-hidden ">
                    <div class="relative mb-6 lg:mb-10 lg:h-96">
                        <img class="object-contain w-full lg:h-full" src="@if (!$kendaraan -> image)
                                            {{ asset('img/kendaraan/'.$kendaraan -> slug.'.png') }}
                                            @else
                                            {{asset('storage/'.$kendaraan->image)}}
                                          @endif" alt="">
                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
                <div class="lg:pl-20">
                    <div class="mb-6 ">
                        <span class="px-2.5 py-0.5 text-xs text-blue-600 bg-blue-100 dark:bg-gray-700 rounded-xl dark:text-gray-200">New
                            Arrival</span>
                        <h2 class="max-w-xl mt-6 mb-6 text-xl font-semibold leading-loose tracking-wide text-gray-700 md:text-2xl dark:text-gray-300">
                            {{$kendaraan->nama}}
                        </h2>
                        <p class="inline-block text-2xl font-semibold text-gray-700 dark:text-gray-400 ">
                            <span>@rupiah($kendaraan->harga) / hari</span>
                            <span class="ml-3 text-base font-normal text-gray-500 line-through dark:text-gray-400">Rp.230,000.00</span>
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="mb-2 text-lg font-bold text-gray-700 dark:text-gray-400">System Specs :</h2>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-xl">
                            <div class="p-3 lg:p-5 ">
                                <div class="p-2 rounded-xl lg:p-6 dark:bg-gray-800 bg-gray-50">
                                    <div class="flex flex-wrap justify-center gap-x-10 gap-y-4">
                                        <div class="w-full mb-4 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3 w-7 h-7" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        Jumlah seat
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                                        8
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-4 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gpu-card w-7 h-7" viewBox="0 0 16 16">
                                                        <path d="M4 8a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm7.5-1.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
                                                        <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .5.5V4h13.5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5H2v2.5a.5.5 0 0 1-1 0V2H.5a.5.5 0 0 1-.5-.5Zm5.5 4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM9 8a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"></path>
                                                        <path d="M3 12.5h3.5v1a.5.5 0 0 1-.5.5H3.5a.5.5 0 0 1-.5-.5v-1Zm4 1v-1h4v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        Daya
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                                        1600 cc
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-4 lg:mb-0 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-7 h-7 bi bi-cpu" viewBox="0 0 16 16">
                                                        <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        Transmisi
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                                        Manual
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-4 lg:mb-0 md:w-2/5">
                                            <div class="flex ">
                                                <span class="mr-3 text-gray-500 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history w-7 h-7" viewBox="0 0 16 16">
                                                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                                    </svg>
                                                </span>
                                                <div>
                                                    <p class="mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        Tahun Pembuatan
                                                    </p>
                                                    <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                                        {{$kendaraan->tahun}}

                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 ">
                        <div class="flex items-center bg-gray-100 font-poppins dark:bg-gray-800 ">
                            <div class="justify-center flex-1 max-w-6xl py-4 mx-auto text-center lg:py-10 ">
                                <div x-data="{ open: false }">
                                    <div x-show="open" class="fixed inset-0 overflow-y-auto">
                                        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <!-- Background overlay, show/hide based on modal state -->
                                            <div x-show="open" class="fixed inset-0 transition-opacity" aria-hidden="true">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>

                                            <!-- This element is to trick the browser into centering the modal contents. -->
                                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                            <!-- Modal -->
                                            <div x-show="open" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                <div class="bg-white">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-2xl font-semibold mb-4">Form Pemesanan</h5>
                                                        <button @click="open = false" type="button" class="absolute top-0 right-0 m-4 text-gray-700 hover:text-gray-900 focus:outline-none">
                                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-8">
                                                        <form id="form" action="{{ route('transaksi.create') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $kendaraan->id }}" name="kendaraan_id">
                                                            <input type="hidden" value="{{ $selectedPelanggan }}" name="pelanggan_id">
                                                            <input type="hidden" value="{{ $kendaraan->harga }}" name="total_bayar">
                                                            <div class="mb-3">
                                                                <label class="block text-sm font-medium text-gray-600">Pilih Pemesan <i class="fas fa-user"></i></label>
                                                                <x-simple-select class=" dark:bg-gray-800 dark:border-gray-800 px-4 dark:placeholder-gray-500 dark:text-gray-400 py-2.5 text-base text-gray-900 rounded-lg font-normal border border-gray-200" wire:model.debounce.300ms="selectedPelanggan" name="statusPekerjaan" id="statusPekerjaan" :options="$pelanggans" value-field='id' text-field='nama' placeholder="Pilih pelanggan" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="block text-sm font-medium text-gray-600">Email <i class="fas fa-envelope"></i></label>
                                                                <input type="email" class="mt-1 p-2 w-full border rounded-md" value="{{ Auth::user()->email }}" name="email" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="flex">
                                                                    <div class="w-1/2 pr-2">
                                                                        <label class="block text-sm font-medium text-gray-600">Tanggal Sewa <i class="fas fa-calendar-alt"></i></label>
                                                                        <input type="date" class="mt-1 p-2 w-full border rounded-md" name="tanggal_sewa" required value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}">
                                                                    </div>
                                                                    <div class="w-1/2 pl-2">
                                                                        <label class="block text-sm font-medium text-gray-600">Lama sewa
                                                                            @if ($kendaraan->category->nama == 'Mobil')
                                                                            <i class="fas fa-car"></i>
                                                                            @elseif ($kendaraan->category->nama == 'Motor') <i class="fas fa-motorcycle"></i>
                                                                            @endif
                                                                        </label>
                                                                        <input type="number" min="1" class="mt-1 p-2 w-full border rounded-md" name="lama_sewa" value="1" required>
                                                                        <small>*dalam hari</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="block text-sm font-medium text-gray-600">Catatan <i class="fas fa-edit"></i></label>
                                                                <textarea class="mt-1 p-2 w-full border rounded-md" name="catatan" style="height: 100px"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal-footer p-4">
                                                        <button @click="open = false" type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                                            Close
                                                        </button>
                                                        <button type="submit" form="form" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                                            Simpan Pesanan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Trigger button -->
                                    <button @click="open = true" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Open Modal
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
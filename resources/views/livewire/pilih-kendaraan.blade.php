<div class="container-xxl py-5">
    <div class="container px-lg-5 px-5">
        <h2 class="mt-2">Koleksi Mobil Kami</h2>

        <!-- Ini untuk search mobil -->
        <div class="row mt-n2 wow fadeInUp justify-content-center" data-wow-delay="0.1s">
            <div class="col-md-6 col-sm-12 mb-5">
                <div class="input-group mb-5 grid grid-cols-4 gap-4">
                    <input type="text" wire:model="namaMobil" class="-full dark:bg-gray-800 dark:border-gray-800 px-4 dark:placeholder-gray-500 dark:text-gray-400 py-2.5 text-base text-gray-900 rounded-lg font-normal border border-gray-200" placeholder="Mau cari apa?" name="search" autocomplete="off">
                    <x-simple-select class=" dark:bg-gray-800 dark:border-gray-800 px-4 dark:placeholder-gray-500 dark:text-gray-400 py-2.5 text-base text-gray-900 rounded-lg font-normal border border-gray-200" wire:model.debounce.300ms="selectedJenisKendaraan" name="statusPekerjaan" id="statusPekerjaan" :options="$jenisKendaraan" value-field='slug' text-field='nama' placeholder="Pilih jenis transmisi" />
                    <x-simple-select class=" dark:bg-gray-800 dark:border-gray-800 px-4 dark:placeholder-gray-500 dark:text-gray-400 py-2.5 text-base text-gray-900 rounded-lg font-normal border border-gray-200" wire:model.debounce.300ms="selectedJenisKendaraan" name="statusPekerjaan" id="statusPekerjaan" :options="$brands" value-field='slug' text-field='nama' placeholder="Pilih brand" />
                    <x-simple-select class=" dark:bg-gray-800 dark:border-gray-800 px-4 dark:placeholder-gray-500 dark:text-gray-400 py-2.5 text-base text-gray-900 rounded-lg font-normal border border-gray-200" wire:model.debounce.300ms="selectedJenisKendaraan" name="statusPekerjaan" id="statusPekerjaan" :options="$categories" value-field='slug' text-field='nama' placeholder="Pilih jenis kendaraan" />
                </div>
            </div>
        </div>
        @if ($kendaraan -> count() > 0)
        <div class="grid grid-cols-3 grid-flow-row gap-2">
            @foreach ($kendaraan as $item)
            <div class="bg-white rounded overflow-hidden shadow-lg row align-items-center justify-content-center">
                <div class="max-h-44">
                    <img class="w-full max-h-72" src="@if (!$item -> image)
                                            {{ asset('img/kendaraan/'.$item -> slug.'.png') }}
                                            @else
                                            {{asset('storage/'.$item->image)}}
                                            @endif" alt="Sunset in the mountains">
                </div>
                <div class="px-6 py-4 min-h-40 h-40">
                    <div class="font-bold text-xl mb-2">{{ $item -> brand -> nama }} {{ $item -> nama }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $item -> deskripsi }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#bahanbakar</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tenaga</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$item->warna}}</span>
                </div>
                <div class="px-6 pb-2 w-full">
                    <button type="button" class="w-full justify-content-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> <a href="{{route('transaksi.detail-kendaraan', $item->slug)}}">Lihat Kendaraan</a></button>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $kendaraan -> links() }}
        </div>
        @else
        <div class="text-center">
            <p class="text-center fs-2">Data tidak ditemukan!</p>
        </div>
        @endif
    </div>
</div>
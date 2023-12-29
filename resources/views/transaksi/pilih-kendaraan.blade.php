<x-app-layout>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
                <h2 class="mt-2">Koleksi Mobil Kami</h2>
            
            <!-- Ini untuk search mobil -->
            <!-- <div class="row mt-n2 wow fadeInUp justify-content-center" data-wow-delay="0.1s">
                <div class="col-md-6 col-sm-12 mb-5">
                    <form action="/project ">
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" placeholder="Mau cari apa?" name="search" onchange="submit()">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="fas fa-search fa-2x"></i></button>
                        </div>
                    </form>
                </div>
            </div> -->
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
                <img src="/img/sad.png" alt="" width="200px" class="img-fluid mb-3">
                <p class="text-center fs-2">Data tidak ditemukan!</p>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
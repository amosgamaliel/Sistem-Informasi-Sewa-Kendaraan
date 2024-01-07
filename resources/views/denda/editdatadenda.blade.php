<x-app-layout>
    <div class="modal-body p-8">
    <form id="update" action="{{route('denda.update',$dendas->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
    <label
        class="block text-sm font-medium text-gray-600">Hari <i class="fas fa-user"></i></label>
    <input type="text" name="hari" value="{{$dendas->hari}}"
        class="mt-1 p-2 w-full border rounded-md"
        number="1"
        placeholder="Masukan jumlah hari"
        autofocus required>
    </div>
        <div class="mb-3">
        <label
            class="block text-sm font-medium text-gray-600">Jumlah Denda <i class="fas fa-user"></i></label>
        <input type="text" name="jumlah_denda" value="{{$dendas->jumlah_denda}}"
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
            <button type="submit" form="update"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    Simpan Data
            </button>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
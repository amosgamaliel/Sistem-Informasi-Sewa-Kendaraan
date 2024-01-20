<x-app-layout>
  <div class="modal-body p-8">
     <form id="form" action="{{route('pelanggan.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="block text-sm font-medium text-gray-600">Nama <i class="fas fa-user"></i></label>
            <input type="text" class="mt-1 p-2 w-full border rounded-md" name="nama" autofocus required value="{{ $data->nama }}">
        </div>
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-600">Nik <i class="fas fa-user"></i></label>
            <input type="number" class="mt-1 p-2 w-full border rounded-md" name="nik" autofocus required value="{{ $data->nik }}">
          </div>
          <div class="mb-3">
              <label class="block text-sm font-medium text-gray-600">No_HP <i class="fas fa-user"></i></label>
              <input type="number" class="mt-1 p-2 w-full border rounded-md" name="no_hp" autofocus required value="{{ $data->no_hp }}">
          </div>
          <div class="mb-3">
              <label class="block text-sm font-medium text-gray-600">Email <i class="fas fa-user"></i></label>
              <input type="email" class="mt-1 p-2 w-full border rounded-md" name="email" autofocus required value="{{ $data->email }}">
          </div>
          <div class="mb-3">
              <label class="block text-sm font-medium text-gray-600">Alamat <i class="fas fa-user"></i></label>
              <input type="text" class="mt-1 p-2 w-full border rounded-md" name="alamat" autofocus required value="{{ $data->alamat }}">
          </div>
      </form>
          </div>
              <div class="modal-footer p-4">
                  <button type="submit" form="form" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        Simpan
                  </button>
                </div>
            </div>
       </div>
    </div>
</div>
</x-app-layout>

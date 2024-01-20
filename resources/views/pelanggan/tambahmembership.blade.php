

<x-app-layout>
  <div class="modal-body p-8">
     <form id="form" action="{{route('memberinsert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="block text-sm font-medium text-gray-600">Nama <i class="fas fa-user"></i></label>
            <input type="text" class="mt-1 p-2 w-full border rounded-md" name="nama" autofocus required>
        </div>
        <div class="mb-3">
                        <label class="block text-sm font-medium text-gray-600">Slug <i class="fas fa-envelope"></i></label>
                        <input type="text" class="mt-1 p-2 w-full border rounded-md"  name="slug" required>
        </div>
          <div class="mb-3">
            <label class="block text-sm font-medium text-gray-600">Harga <i class="fas fa-user"></i></label>
            <input type="number" class="mt-1 p-2 w-full border rounded-md" name="harga" autofocus required>
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

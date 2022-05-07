<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Layanan') }}
    </h2>
  </x-slot>

  <div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <form action="{{ route('dashboard.service.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="flex flex-wrap mx-2 mb-6 mt-2">
            <div class="w-full mt-4 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Layanan</label>
              <input type="text" value="{{ old('NamaLay') ?? $item->NamaLay }}" name="NamaLay"
                placeholder="Nama Layanan"
                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
          </div>
          <div class="flex flex-wrap mx-2 mb-6 mt-2">
            <div class="w-full mt-4 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Kategori</label>
              <input type="text" value="{{ old('KodeKgr') ?? $item->KodeKgr }}" name="KodeKgr"
                placeholder="Kode Kategori"
                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
          </div>
          <div class="flex flex-wrap mx-2 mb-6 mt-2">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Harga</label>
              <input type="text" value="{{ old('Harga') ?? $item->Harga }}" name="Harga" placeholder="Harga Layanan"
                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
          </div>
          <div class="flex justify-end flex-wrap mx-2 mb-6">
            <div class="w-full px-3 flex justify-end">
              <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                Perbarui Layanan
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if ($errors->any())
        @foreach ($errors->all() as $error)
          toastr.error('{{ $error }}');
        @endforeach
        @endif
      });
  </script>
</x-app-layout>
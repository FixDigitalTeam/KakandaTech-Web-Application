<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Layanan') }}
    </h2>
  </x-slot>

  <x-slot name="script">
    <script>
      //AJAX DataTable
  
              var datatable = $('#crudTable').DataTable({
                  ajax: {
                      url: '{!! url()->current() !!}'
                  },
                  columns: [
                      { data: 'id', name: 'id', width: '5%' },
                      { data: 'NamaLay', name: 'NamaLay' },
                      { data: 'KodeKgr', name: 'KodeKgr' },
                      { data: 'Harga', name: 'Harga' },
                      {
                          data: 'action',
                          name: 'action',
                          orderable: false,
                          searchable: false,
                          width: '20%'
                      }
                  ]
              })
    </script>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="mb-10">
        <a href="{{ route('dashboard.service.create') }}"
          class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">Tambah Layanan</a>
      </div>
      <div class="shadow overflow-hidden sm-rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <table id="crudTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Layanan</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Menu</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
      });
  </script>
</x-app-layout>
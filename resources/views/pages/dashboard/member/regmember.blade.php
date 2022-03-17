<x-app-layout>
<div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-60">
      @if ($errors->any())
      <div class="mb-0">
         <div class="bg-blue-500 text-white font-bold rounded-5 px-4 py-2">
         Terdapat kesalahan!
         </div>
      </div>
      <div class="mb-8">
         <div class="border border-t-0 border-blue-400 bg-blue-100 px-4 py-3 text-blue-700">
         <p>
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
         </p>
         </div>
      </div>
      @endif

      <form action="{{ route('dashboard.member.store') }}" method="post" class="w-full">
         @csrf
         <div class="flex flex-wrap -mx-3 mb-2">
         <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="namamember">
               Nama Member
            </label>
            <input
               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               id="namamember" name="namamember" type="text" value="{{ old('namamember') }}" placeholder="namamember">
         </div>
         </div>
         <div class="flex flex-wrap -mx-3 mb-2">
         <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jeniskelamin">
               Pengarang
            </label>
            <select name="jeniskelamin" class=""></select>
         </div>
         </div>
         <div class="flex flex-wrap -mx-3 mb-2">
         <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="penerbit">
               Penerbit
            </label>
            <input
               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               id="penerbit" name="penerbit" type="text" value="{{ old('penerbit') }}" placeholder="Penerbit">
         </div>
         </div>
         <div class="flex flex-wrap -mx-3 mb-2">
         <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tahun">
               Tahun Terbit
            </label>
            <input
               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               id="tahun" name="tahun_terbit" type="text" value="{{ old('tahun_terbit') }}" placeholder="Tahun Terbit">
         </div>
         </div>
         <div class="flex flex-wrap -mx-3 mb-2">
         <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="stok">
               Stok
            </label>
            <input
               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               id="stok" name="stock" type="text" value="{{ old('stock') }}" placeholder="Stok">
         </div>
         </div>
         <div class="flex flex-wrap -mx-3 mb-6">
         <div class="flex justify-end w-full px-3">
            <button type="submit"
               class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow-md">
               Simpan
            </button>
         </div>
         </div>
      </form>
   </div>
</x-app-layout>
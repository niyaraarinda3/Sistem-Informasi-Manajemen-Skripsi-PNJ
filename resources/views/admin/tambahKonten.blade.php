<x-admin-layout :title="'Tambah Konten'">
    @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
    @endif

    <form class="w-full space-y-4" enctype='multipart/form-data' action="{{route('admin.create-tambah-konten')}}" method="POST" action="/proses-data" onsubmit="return confirm('Apakah Anda yakin ingin mengirim data ini?')">
        @csrf
        <h1 class="font-bold text-xl">Unggah Konten</h1>
        <div class="flex justify-between mb-2">
            <div>
            <label class="block text-sm mb-2" for="">
                    Judul
                </label>
                <x-text-input id="judul" class="block mt-1 w-80 border-black mb-4" type="text" name="judul" placeholder="Masukkan teks..." required autofocus/>
            </div>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm border-black">
                Deskripsi Konten
            </label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="block p-2.5 w-full h-40 text-sm text-black rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tambahkan catatan..."></textarea>
        </div>
         <div>
            <label class="block text-sm mb-2" for="">
                File Konten
            </label>
            <x-text-input id="file_konten" class="block w-80 h-10 p-1 border border-black cursor-pointer bg-white" type="file" name="file_konten" required autofocus/>
        </div>
        <div class="flex justify-end">
            <x-primary-button class="flex justify-center w-fit">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
    </form>

</x-admin-layout>
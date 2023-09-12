<x-user-layout :title="'Detail Logbook Bimbingan'">
    <div class="w-full space-y-4">
        <div class="flex justify-between">
            <h1 class="font-bold text-xl text-font">Logbook Bimbingan</h1>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512" class="mr-2 mt-1" fill="#286D75"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                <h1 class="font-bold text-xl text-font">{{$detailLogbook->status}}</h1>
            </div>
        </div>
        <hr class="border-2 border-primary">
        <div class="flex justify-between mb-2">
            <div>
                <label class="block text-sm mb-2" for="">
                    Tanggal Bimbingan
                </label>
                <x-text-input value="{{$detailLogbook->created_at->format('Y-m-d') }}" id="judul" class="block mt-1 w-80 border-black mb-4" type="date" name="date" readonly/>
            </div>
            <!-- <div>
            <label class="block text-sm mb-2" for="">
                    Dokumentasi
                </label>
                <x-text-input id="judul" class="block w-80 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" readonly/>
            </div> -->
            <div>
            <label class="block text-sm mb-2" for="">
                    Media Bimbingan
                </label>
                <x-text-input value="{{$detailLogbook->media}}" id="judul" class="block mt-1 w-80 border-black mb-4" type="text" name="judul" placeholder="Masukkan teks..." readonly/>
            </div>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                Uraian Catatan Bimbingan
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-60 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Catatan bimbingan blablabla" readonly>{{$detailLogbook->rincian_kegiatan}}</textarea>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                Rencana Pencapaian
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Target pencapaian blablabla" readonly>{{$detailLogbook->rencana_pencapaian}}</textarea>
        </div>
    </div>


    <!-- Feedback -->
    <div class="mt-12"> 
        <div class="flex justify-center rounded-t-lg bg-header h-10 p-2">
            <p class="font-bold text-white">Umpan Balik</p>
        </div>
        <div class="border rounded-b-lg rounded-br-lg shadow">
            <p>{{$detailLogbook->feedback}}</p>
        </div>
    </div>

</x-user-layout>
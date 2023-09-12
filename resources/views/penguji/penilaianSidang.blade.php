<x-penguji-layout :title="'Penilaian Sidang Skripsi'">

<div class="flex w-full space-x-10">
        <!-- Card data mahasiswa -->
        <div class="w-72 rounded bg-cardData p-6">
            <h1 class="flex justify-center font-bold text-xl text-font mb-6">Data Mahasiswa</h1>
            <label class="block mb-4 font-bold text-sm" for="">Nama : 
                <p class="font-normal mt-2">{{$penilaianSidang->mahasiswa->nama}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">NIM : 
                <p class="font-normal mt-2">{{$penilaianSidang->mahasiswa->nim}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Program Studi : 
                <p class="font-normal mt-2">{{$penilaianSidang->mahasiswa->prodi}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Kelas : 
                <p class="font-normal mt-2">{{$penilaianSidang->mahasiswa->kelas}}</p>
            </label>
        </div>

        <div>
            <!-- @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif -->
            <!-- Form penilaian -->
            @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif
            <form class="" enctype="multipart/form-data" action="" method="post" action="/proses-data" onsubmit="">
            <h1 class="font-bold text-xl text-font mb-8">Penilaian Sidang Skripsi</h1>
            @csrf
                <!-- <div class="flex space-x-10"> -->
                    <div class="flex space-x-10">
                        <div class="w-20">
                            <label class="block text-sm" for="">
                                Nilai :
                            </label>
                        </div>
                        <x-text-input id="" name="nilai_penguji" class="block mb-2 w-full h-10 p-1 border border-black cursor-pointer bg-white" type="number"  placeholder="Masukkan nilai..." autofocus/>
                    </div>
                    <div class="flex space-x-6">
                        <div class="w-24">
                            <label class="block text-sm mt-4" for="">
                                Poin Revisi :
                            </label>
                        </div>
                        <textarea id="" name="revisi" class="block mt-4 w-full h-36 p-1 border border-gray-300 rounded cursor-pointer bg-white" type="text"  placeholder="Tuliskan poin revisi disini..." autofocus></textarea>
                    </div>
                    <div class="mt-7 flex justify-end">
                        <x-primary-button class="flex justify-center w-fit h-10">
                            {{ __('Kirim') }}
                        </x-primary-button>
                    </div>
                <!-- </div> -->
            </form>

            <!-- Dokumen Skripsi Mahsiswa-->
            <div class="mt-8 mb-8">
                <h1 class="font-bold text-xl text-font mb-8">Dokumen Skripsi Mahasiswa</h1>
                <div class="">
                    <div class="">
                        <div class="flex space-x-1 text-sm mb-2">
                            <label class="font-bold" for="" style="display: inline-block; white-space: nowrap;">
                                Judul :
                            </label>
                            {{$penilaianSidang->mahasiswa->skripsi->judul}}
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2" for="">
                                Dokumen Skripsi :
                            </label>
                            <!-- pdf viewer -->
                            <iframe src="{{ url('/storage/'. $penilaianSidang->mahasiswa->skripsi->file_skripsi) }}" width="600" height="400"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-penguji-layout>
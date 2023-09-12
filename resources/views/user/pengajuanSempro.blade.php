<x-user-layout :title="'Pengajuan Seminar Proposal'">
    <div class="flex space-x-20">
        <!-- Card data mahasiswa -->
        <div class="w-80 rounded bg-cardData p-6">
            <h1 class="flex justify-center font-bold text-xl text-font mb-6">Data Mahasiswa</h1>
            <label class="block mb-4 font-bold text-sm" for="">Nama : 
                <p class="font-normal mt-2">{{$mahasiswa->nama}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">NIM : 
                <p class="font-normal mt-2">{{$mahasiswa->nim}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Program Studi : 
                <p class="font-normal mt-2">{{$mahasiswa->prodi}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Kelas : 
                <p class="font-normal mt-2">{{$mahasiswa->kelas}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Dosen Pembimbing : 
                <p class="font-normal mt-2">{{$mahasiswa->dosen ? $mahasiswa->dosen->nama:""}}</p>
            </label>
        </div>

        <div class="flex-wrap w-full">
             <!-- Notif pengiriman berhasil -->
            @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif

            @if(($pengajuanJudul != 0) && ($logbook >= 3) )
            <!-- Form Pengajuan -->
            <form class="w-full" enctype='multipart/form-data' action="{{route('user.create-pengajuan-sempro')}}" method="post" action="/proses-data" onsubmit="return confirm('Apakah Anda yakin ingin mengirim data ini?')">
                @csrf
                <h1 class="flex justify-center font-bold text-xl text-font mb-10">Pengajuan Seminar Proposal</h1>
                <div>
                    <div class="flex justify-between space-x-10">
                        <div>
                            <label class="flex flex-wrap text-sm mb-2" for="">
                                Judul Skripsi
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <x-text-input id="judul" class="block mt-1 w-96 border-black mb-9" type="text" name="judul" placeholder="Masukkan teks..." required autofocus/>
                            <label class="block text-sm mb-2" for="">
                                Sub Judul Skripsi
                            </label>
                            <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-5" type="text" name="subJudul" placeholder="Masukkan teks..." autofocus/>
                        </div>
                        <div>
                            <label class="block text-sm mb-2" for="">
                                Anggota Kelompok
                            </label>
                            <x-text-input id="anggota" class="block w-96  border-black" type="text" name="anggota" placeholder="Masukkan teks..." autofocus/>
                            <p class="text-xs text-gray-500 mb-5">Format penulisan (nama anggota 1, nama anggota 2)</p>
                            <!-- <label class="flex flex-wrap text-sm mb-2" for="">
                                Form F1
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <x-text-input id="file_f1" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="file_f1" accept=".pdf" required autofocus/>
                            <p class="text-xs text-gray-500 mb-5">Format file PDF (<a href="https://s.pnj.ac.id/FormF1" target="_blank" class="text-blue-500">Download disini</a>)</p> -->
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-primary-button class="flex justify-center w-fit">
                            {{ __('Kirim') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
            @else
            <div class="flex items-center w-full h-fit rounded bg-[#EF9C9C] border border-[#E03131] font-bold p-2">
                <h1>Anda belum mengajukan judul/melengkapi logbook!</h1>
            </div>
            @endif
        </div>
    </div>

</x-user-layout>
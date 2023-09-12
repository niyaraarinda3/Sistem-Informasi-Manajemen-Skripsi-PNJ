<x-user-layout :title="'Pengajuan Judul dan Dosen Pembimbing'">
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
            <!-- <label class="block mb-4 font-bold text-sm" for="">Dosen Pembimbing : 
                <p class="font-normal mt-2">Eriya, S.Kom., M.T</p>
            </label> -->
        </div>

        <div class="flex-wrap">
            <!-- Notif pengiriman berhasil -->
            @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif
            
            <!-- Form Pengajuan -->
            <form class="w-full" enctype='multipart/form-data' action="{{route('user.create-pengajuan-judul')}}" method="post" action="/proses-data" onsubmit="return confirm('Apakah Anda yakin ingin mengirim data ini?')">
                @csrf
                <h1 class="flex justify-center font-bold text-xl text-font mb-10">Pengajuan Judul dan Dosen Pembimbing</h1>
                <div>
                    <div class="flex justify-between space-x-10">
                        <div>
                            <label class="flex flex-wrap text-sm mb-2" for="">
                                Judul Skripsi
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <x-text-input id="judul" class="block mt-1 w-96 border-black mb-4" type="text" name="judul" placeholder="Masukkan teks..." required autofocus />
                            <label class="block text-sm mb-2" for="">
                                Sub Judul Skripsi
                            </label>
                            <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-4" type="text" name="subJudul" placeholder="Masukkan teks..." autofocus />
                            <label class="block text-sm mb-2" for="">
                                Anggota Kelompok
                            </label>
                            <x-text-input id="anggota" class="block mt-1 w-96 border-black" type="text" name="anggota" placeholder="Masukkan teks..." autofocus />
                            <p class="text-xs text-gray-500 mb-2">Format penulisan (nama anggota 1, nama anggota 2)</p>
                            <label class="flex flex-wrap text-sm mb-2" for="">
                                Jurnal Referensi
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <x-text-input id="jurnal" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="jurnal" accept=".pdf" required autofocus />
                            <p class="text-xs text-gray-500 mb-2">Format file PDF </p>
                        </div>
                        <div>
                            <label class="flex flex-wrap text-sm mb-2" for="">
                                Calon Dosen Pembimbing 1
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <div class="relative">
                               
                                <select name="dosen1" class="w-96 h-10 text-sm text-gray-700 border border-black rounded-md px-3 mb-4" id="">
                                    @foreach($dosen as $val)
                                    <option value="{{$val->nip}}">{{$val->nama}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="flex flex-wrap text-sm mb-2" for="">
                                Calon Dosen Pembimbing 2
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <div class="relative">
                                <select name="dosen2" class="w-96 h-10 text-sm text-gray-700 border border-black rounded-md px-3 mb-4" id="">
                                    @foreach($dosen as $val)
                                    <option value="{{$val->nip}}">{{$val->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="flex flex-wrap text-sm mb-2" for="">
                                Calon Dosen Pembimbing 3
                                <p class="text-red-600 pl-1">*</p>
                            </label>
                            <div class="relative">
                                <select name="dosen3" class="w-96 h-10 text-sm text-gray-700 border border-black rounded-md px-3 mb-4" id="">
                                    @foreach($dosen as $val)
                                    <option value="{{$val->nip}}">{{$val->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="flex flex-wrap mb-2 text-sm font-medium text-gray-900">
                            Deskripsi/Abstrak
                            <p class="text-red-600 pl-1">*</p>
                        </label>
                        <textarea name="deskripsi" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan deskripsi skripsi anda..."></textarea>
                    </div>
                    <div class="flex justify-end">
                        <x-primary-button class="flex justify-center w-fit">
                            {{ __('Kirim') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-user-layout>
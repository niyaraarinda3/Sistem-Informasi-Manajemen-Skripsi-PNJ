<x-user-layout :title="'Home'">
    <div class="mb-8" >
    @foreach($daftarKonten as $konten)
        <a class="text-xl" href="{{ url('/storage/'. $konten->file_konten) }}" target="_blank">{{$konten->judul}}</a>
        <hr class="mt-2 mb-8 border-2 border-primary">
        <p class="mb-8">{{$konten->deskripsi}}</p>
    @endforeach
    </div>
    <!-- timeline skripsi -->
    <a class="text-xl" href="#">Timeline Skripsi JTIK 2022/2023</a>
    <hr class="mt-2 mb-8 border-2 border-primary">
    <img src="/assets/timeline-skripsi.png" />

    <!-- tabs -->

    <div class="mb-4 border-b border-primary py-6">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2">
                <x-primary-button class="flex justify-center w-full" aria-selected="bg-white" id="proposal-tab" data-tabs-target="#proposal" type="button" role="tab" aria-controls="proposal">
                    {{ __('Proposal') }}
                </x-primary-button>
            </li>
            <li class="mr-2">
                <x-primary-button class="flex justify-center w-full" id="skripsi-tab" data-tabs-target="#skripsi" type="button" role="tab" aria-controls="skripsi">
                    {{ __('Skripsi') }}
                </x-primary-button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 rounded-lg" id="proposal" role="tabpanel" aria-labelledby="proposal-tab">
            <p class="text-sm">
                Syarat seminar proposal Skripsi </br>
                1. Melakukan bimbingan proposal skripsi minimal 3x dengan dosen pembimbing dan mengisi logbook bimbingan </br>
                2. Melakukan pengajuan proposal skripsi paling lambat tanggal 20 Februari 2023 </br>
                3. Mahasiswa menyerahkan berkas proposal kepada panitia skripsi pada poin 3, diantaranya: </br>
                - Mahasiswa aktif semester berjalan (Fotokopi bukti daftar ulang semester genap 2022/2023) </br>
                - Telah lulus pada PKL (Fotokopi marksheet semester ganjil 2022/2023) </br>
                - Berkas Proposal (1 eksemplar) </br>
                - Form Persetujuan proposal skripsi oleh pembimbing(form F1)
            </p>
        </div>
        <div class="hidden p-4 rounded-lg" id="skripsi" role="tabpanel" aria-labelledby="skripsi-tab">
            <p class="text-sm">
                Syarat sidang skripsi </br>
                1. Melakukan bimbingan skripsi minimal 10x dengan dosen pembimbin dan mengisi logbook bimbingan </br>
                2. Melakukan pendaftaran sidang skripsi paling lambat tanggal 24 Juli 2023 </br>
                3. Memiliki minimal 1 sertifikat lomba sesuai bidang TIK (sebagai perserta/pemenang), baik di tingkat lokal, nasional atau internasional selama menjadi mahasiswa aktif JTIKPNJ </br>
                4. Mahasiswa menyerahkan berkas persyaratan sidang skripsi kepada panitia skripsi, diantaranya: </br>
                - Laporan Skripsi </br>
                - Sertifikat lomba (pada poin3) </br>
                - Form Persetujuan maju sidang skripsi oleh pembimbing (form F4) </br>
            </p>
        </div>
    </div>

</x-user-layout>
<x-user-layout :title="'Logbook'">
    <div class="flex w-full gap-5 space-x-10">
        <div class="flex flex-col w-1/4">
            <!-- card dosen pembimbing -->
            <div class="p-5 bg-card text-center mt-11 flex flex-col items-center rounded-lg shadow">
                <h1 class="text-l">Dosen Pembimbing</h1>
                @empty($dospem)
                <p>Belum memiliki dosen pembimbing</p>
                @else
                <div class="w-20 h-20 mr-5 mt-5 rounded-full flex items-center justify-center overflow-hidden">
                    <img class="w-full h-full object-cover" src="/assets/user.png" alt="Gambar">
                </div>
                <p class="mt-4 text-xs">{{$dospem->nama}}</p>
                <p class="text-xs">NIP. {{$dospem->nip}}</p>
                @endempty
            </div>

            <!-- card file skripsi -->
            <div class="text-center mt-11 bg-header p-4 rounded-t-lg rounded-tr-lg text-white shadow">
                <h3 class="font-bold">Dokumen Skripsi</h3>
            </div>
            <div class="text-center bg-card p-4 rounded-b-lg rounded-br-lg shadow">
                <p class="text-[#838383] text-sm mb-11 mt-5">Unggah dokumen skripsi anda disini</p>
                <a href="{{route('user.profile')}}" class="text-header text-sm font-bold underline mt-4">Unggah</a>
            </div>
        </div>


        <div class="w-3/4">
            <!-- add logbook -->
            <div class="flex justify-end mt-8">
                <a href="{{route('user.form-logbook')}}" class="h-10 w-fit p-2 rounded-lg bg-[#4997A1] flex text-sm font-bold text-white shadow">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="mr-2 mt-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                </svg>
                Tambahkan Logbook bimbingan
                </a>
            </div>

            <!-- history logbook -->
            @foreach ($logbook as $item)
            <div class="w-full">
                <div class="flex mt-8 bg-header p-4 rounded-t-lg rounded-tr-lg text-white justify-between">
                    <h3 class="font-bold">{{$item->created_at}}</h3>
                    <h3 class="font-bold">{{$item->status}}</h3>
                </div>
                <div class="text-center bg-card p-8 rounded-b-lg rounded-br-lg shadow">
                    <p class="text-sm text-justify">{{$item->rincian_kegiatan}}</p>
                    <a href="{{route('user.detail-logbook-mahasiswa',['id' => $item->id])}}" class="text-header text-sm font-bold underline flex justify-end">Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-user-layout>
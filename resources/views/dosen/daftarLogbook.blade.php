<x-dosen-layout :title="'Logbook Mahasiswa'">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-sm text-center">
            <thead class="text-xs text-white bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse($daftarLogbook as $Logbook)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        {{$Logbook->created_at}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$Logbook->mahasiswa->nama}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$Logbook->status}}
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover" href="{{route('dosen.detail-logbook',['id' => $Logbook->id])}}">Detail</a>
                    </td>
                </tr>
                @empty
                <p>Daftar pengajuan sidang masih kosong</p>
                @endforelse
            </tbody>
        </table>
    </div>

</x-dosen-layout>
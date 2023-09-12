<x-penguji-layout :title="'Daftar Revisi Skripsi'">

<h1 class="font-bold mt-11">Daftar Persetujuan Revisi</h1>
    <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr class="bg-primary text-white font-bold text-left block md:table-row">
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Tanggal</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Nama</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Status</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse($daftarRevisiSkripsi as $Revisi)
                <!-- Data mahasiswa yang mengajuan persetujuan revisi akan ditampilkan di sini -->
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span> {{$Revisi->created_at}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$Revisi->mahasiswa->nama}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span> {{$Revisi->status}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                    <a href="{{ route('penguji.approve-revisi',['id' => $Revisi->id]) }}" class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Aksi</a>
                </td>    
            </tr>
            @empty
                <p>Daftar pengajuan persetujuan revisi masih kosong</p>
            @endforelse    
            </tbody>
        </table>
    </div>
</x-penguji-layout>
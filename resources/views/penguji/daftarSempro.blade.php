<x-penguji-layout :title="'Daftar Seminar Proposal'">
    <h1 class="font-bold mt-11">Daftar Seminar Proposal</h1>
    <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr class="bg-primary text-white font-bold text-left block md:table-row">
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">No</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Nama</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">NIM</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Program Studi</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Judul</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Jadwal</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Nilai</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Poin Revisi</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data mahasiswa seminar proposal akan ditampilkan di sini -->
                @forelse($daftarSempro as $index => $Sempro)
                <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-xs">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $index + 1 }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$Sempro->mahasiswa->nama}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$Sempro->mahasiswa->nim}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Program Studi</span>{{$Sempro->mahasiswa->prodi}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$Sempro->judul}}</td>   
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Jadwal</span>{{$Sempro->jadwal_sempro}}</td>    
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nilai</span>{{$Sempro->hasilSempro ? $Sempro->nilaiPenguji():""}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Poin Revisi</span>
                    @foreach($revisi->where('hasil_sempro_id', $Sempro->hasilSempro->id)->where('nip_penguji',Auth::user()->username)->get()  as $item)
                    {{$item->poin_revisi}}
                    @endforeach
                    </td>    
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                        @if ($Sempro->hasilSempro && $Sempro->isPengujiSudahMenilai() && $Sempro->hasilSempro->revisiProposal->count() > 0)
                            <span class="bg-disabled text-gray-500 font-bold py-1 px-2 border border-edit rounded cursor-not-allowed border-gray-500">Aksi</span>
                        @else
                            <a href="{{ route('penguji.penilaian-sempro',['id'=>$Sempro->id]) }}" 
                             class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Aksi</a>
                        @endif
                    </td>
                </tr>
                @empty
                <p>Daftar seminar proposal masih kosong</p>
                @endforelse        
            </tbody>
        </table>
    </div>
</x-penguji-layout>
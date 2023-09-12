<x-admin-layout>
     <h1 class="font-bold mt-11">Daftar Pengajuan Judul dan Dosen Pembimbing</h1>
      <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative text-sm">
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Anggota Kelompok</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Calon Dosen Pembimbing</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Jurnal Referensi</th>
            </tr>
		</thead>
        <tbody>
        @forelse($daftarPengajuanJudul as $PengajuanJudul)
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-xs">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>{{$PengajuanJudul->created_at}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$PengajuanJudul->Mahasiswa->nama}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$PengajuanJudul->Mahasiswa->nim}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$PengajuanJudul->judul}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Anggota Kelompok</span>{{$PengajuanJudul->anggota}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block md:hidden font-bold">Calon Dosen Pembimbing</span>
                        <ul class="list-disc ml-1 list-inside">
                            @foreach($PengajuanJudul -> pengajuanDospem as $PengajuanDospem)
                            <li style="list-style-type: disc;">{{$PengajuanDospem->dosen->nama}}</li>
                            @endforeach
                        </ul>
                </td>
                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Jurnal Referensi</span>
                    <a href="{{ url('/storage/'. $PengajuanJudul->file_referensi) }}" target="_blank" class="text-blue-500">Referensi</a>
                </td>
            </tr>
			@empty
                <p>Daftar pengajuan judul masih kosong</p>
            @endforelse
		</tbody>
	</table>
</x-admin-layout>
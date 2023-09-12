<x-admin-layout>
     <h1 class="font-bold mt-11">Daftar Penyerahan Alat</h1>
      <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto md:relative" style="font-size: 0.5rem;">
				<th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
				<th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
				<th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sub Judul</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Anggota Kelompok</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F13</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F14</th>
                <th class="padding: 0.1rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Link Vidio Demo</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat PKKP</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat TOEIC</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat Lomba</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat Kejuaraan</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat Organisasi</th>
            </tr>
		</thead>
        <tbody>
        @forelse($daftarPenyerahanAlat as $PenyerahanAlat)
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row" style="font-size: 0.5rem;">
				<td class="padding: 0.5rem;  md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>{{$PenyerahanAlat->created_at}}</td>
				<td class="padding: 0.5rem;  md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$PenyerahanAlat->mahasiswa->nama}}</td>
				<td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$PenyerahanAlat->mahasiswa->nim}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$PenyerahanAlat->judul}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Sub Judul</span>{{$PenyerahanAlat->sub_judul}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Anggota Kelompok</span>{{$PenyerahanAlat->anggota}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f13) }}" target="_blank" class="text-blue-500">F13</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f14) }}" target="_blank" class="text-blue-500">F14</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem;">
                        <a href="{{ $PenyerahanAlat->link_video }}" target="_blank" class="text-blue-500">Video</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_pkkp) }}" target="_blank" class="text-blue-500">Link Sertifikat PPKP</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_toeic) }}" target="_blank" class="text-blue-500">Link Sertifikat TOEIC</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_lomba) }}" target="_blank" class="text-blue-500">Link Sertifikat Lomba</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                      @if ($PenyerahanAlat->sertifikat_kejuaraan && Storage::exists($PenyerahanAlat->sertifikat_kejuaraan)) 
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_kejuaraan) }}" target="_blank" class="text-blue-500">Link Sertifikat Kejuaraan</a>
                    @endif 
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                    @if ($PenyerahanAlat->sertifikat_organisasi && Storage::exists($PenyerahanAlat->sertifikat_organisasi))
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_organisasi) }}" target="_blank" class="text-blue-500">Link Sertifikat Organisasi</a>
                    @endif
                    </div>
                    </td>
                   <!-- <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
					<button onclick="editButton({{$PenyerahanAlat->id}})" class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Edit</button>
                </td> -->
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
                <p>Daftar penyerahan alat masih kosong</p>
            @endforelse
		</tbody>
	</table>
</div>
</x-admin-layout>
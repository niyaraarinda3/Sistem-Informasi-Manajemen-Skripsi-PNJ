<x-admin-layout :title="'Manajemen User KPS'">
<!-- Tabel Manajemen User - Dosen -->
 <h1 class="font-bold"> Daftar Ketua Program Studi</h1>
    <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				{{-- <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Prodi</th> --}}
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIP</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
            </tr>
		</thead>
		<tbody>
		@foreach($daftarKPS as $val)
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
				{{-- <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Prodi</span>Kepala Program Studi Teknik Informatika (D4 TI)</td> --}}
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIP</span>{{$val->user->dosen->nip}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$val->user->dosen->nama}}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
</div>
</x-admin-layout>

<x-user-layout :title="'Daftar Persetujuan Revisi '">
<div class=" pl-11 pr-6">
    <h1 class="font-bold"> Daftar Pengajuan Persetujuan Revisi</h1>
    <div class="w-full h-full mt-5">
      <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
          <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($daftarRevisiSkripsi as $revisi)
          <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen</span>
            @php
            $dosenPenguji = $dosenPenguji->where('nip', $revisi->nip_penguji)->first();
            echo ($dosenPenguji->nama); 
            @endphp
           
            </td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>{{$revisi->status}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                <a href="{{ route('user.form-revisi',['id' => $revisi->id])}}" class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover">Detail</a>
            </td>     
          </tr>
          @empty
                <p>Daftar pengajuan persetujuan revisi masih kosong</p>
          @endforelse 
        </tbody>
      </table>
    </div>
</x-user-layout>
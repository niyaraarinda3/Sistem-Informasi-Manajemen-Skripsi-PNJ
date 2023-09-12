<x-admin-layout :title="'Manajemen User Mahasiswa'">
  <div class=" pl-11 pr-6">
    <!-- add logbook -->
    <div class="flex justify-end mt-8">
      <a href="{{route('admin.tambah-konten')}}" class="h-10 w-fit p-2 rounded-lg bg-[#4997A1] flex text-sm font-bold text-white shadow">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="mr-2 mt-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
        </svg>
        Tambahkan Konten
      </a>
    </div>
    <h1 class="font-bold"> Daftar Konten</h1>
    <div class="w-full h-full mt-5">
      <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
          <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Deskripsi Konten</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($daftarKonten as $konten)
          <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$konten->judul}}</< /td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Deskripsi Konten</span>{{$konten->deskripsi}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>{{$konten->created_at}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
              <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
              <form action="/konten/{{$konten->id}}" method="post">
                @method('delete')
                @csrf
                <button class="bg-delete hover:bg-hoverDelete text-white font-bold py-1 px-2 border border-delete rounded">Hapus</button>
              </form>
            </td>
          </tr>
          @empty
          <p>Daftar Konten masih kosong</p>
          @endforelse
        </tbody>
      </table>
    </div>
</x-admin-layout>
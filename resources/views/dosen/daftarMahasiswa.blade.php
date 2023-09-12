<x-dosen-layout :title="'Daftar Mahasiswa'">

    <!-- Section Permintaan Mahasiswa Bimbingan -->

    <h1 class="font-bold mb-2">
        Daftar Permintaan Mahasiswa Bimbingan
    </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-sm">
            <thead class="text-xs text-white text-center bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Program Studi
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($pengajuanDospem as $val)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        {{$val->pengajuanJudul->mahasiswa->nama}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->pengajuanJudul->mahasiswa->nim}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->pengajuanJudul->mahasiswa->prodi}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->pengajuanJudul->judul}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->pengajuanJudul->deskripsi}}
                    </td>
                    <td class="px-6 py-4 space-x-2 flex">
                        <form action="/terima-permintaan-judul/{{$val->pengajuanJudul->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">Terima</button>
                        </form>
                        <form action="/tolak-permintaan-judul/{{$val->pengajuanJudul->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]">Tolak</button>
                        </form>
                    </td>
                </tr>
                @empty
                <p>Daftar permintaan mahasiswa bimbingan masih kosong</p>
                @endforelse
            </tbody>
        </table>
    </div>


    <!-- Section Daftar Mahasiswa Bimbingan -->

    <h1 class="font-bold mb-2">
        Daftar Mahasiswa Bimbingan
    </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm">
            <thead class="text-xs text-white text-center bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Program Studi
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($mahasiswaBimbingan as $val)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        {{$val->mahasiswa->nama}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->nim}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->mahasiswa->prodi}}
                    </td>
                    <td class="px-6 py-4 border">
                        {{$val->judul}}
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover" href="{{route('dosen.detail-mahasiswa',['id'=>$val->nim])}}">Detail</a>
                    </td>
                </tr>
                @empty
                <p>Belum ada mahasiswa bimbingan</p>
                @endforelse
            </tbody>
        </table>
    </div>

</x-dosen-layout>
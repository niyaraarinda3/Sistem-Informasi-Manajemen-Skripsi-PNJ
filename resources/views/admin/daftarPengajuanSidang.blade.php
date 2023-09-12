<x-admin-layout>
     <h1 class="font-bold mt-11">Daftar Pengajuan Sidang Skripsi</h1>
      <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative text-sm"  style="font-size: 0.6rem;">
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sub Judul</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Anggota Kelompok</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Pembimbing</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Penguji</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Jadwal</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Ruang</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nilai</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
            </tr>
		</thead>
        <tbody>
        @forelse($daftarPengajuanSidang as $PengajuanSidang)
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-xs" style="font-size: 0.6rem;"">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>{{$PengajuanSidang->created_at}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$PengajuanSidang->mahasiswa->nama}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$PengajuanSidang->mahasiswa->nim}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$PengajuanSidang->judul}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Sub Judul</span>{{$PengajuanSidang->sub_judul}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Anggota Kelompok</span>{{$PengajuanSidang->anggota}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>{{$PengajuanSidang->mahasiswa->dosen->nama}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block md:hidden font-bold">Calon Dosen Penguji</span>
                    <ul class="list-disc ml-1 list-inside">
                        <li style="list-style-type: disc;">{{$PengajuanSidang->dosenPenguji1 ? $PengajuanSidang->dosenPenguji1->nama:""}}</li>
                        <li style="list-style-type: disc;">{{$PengajuanSidang->dosenPenguji2 ? $PengajuanSidang->dosenPenguji2->nama:""}}</li>
                        <li style="list-style-type: disc;">{{$PengajuanSidang->dosenPenguji3 ? $PengajuanSidang->dosenPenguji3->nama:""}}</li>
                    </ul>
                </td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Jadwal</span>{{$PengajuanSidang->jadwal_sidang}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Ruang</span>{{$PengajuanSidang->ruang}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>{{$PengajuanSidang->hasilSidang ? $PengajuanSidang->hasilSidang->status:""}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nilai</span>{{$PengajuanSidang->hasilSidang ? $PengajuanSidang->hasilSidang->nilai:""}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                        <a href="#" onclick="editButton({{$PengajuanSidang->id}})" class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Edit</a>
                    </td>
                    <!-- modal -->
                    <div id="modal" class=" z-50 fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center overflow-y-auto hidden">
                        <form method="post" enctype="multipart/form-data">
                        <div class="bg-white p-6 rounded-lg">
                            <div class="flex space-x-10">
                                <div class="w-1/2 p-3">
                                    <h2 class="text-xl font-bold mb-4">Edit Data Pengajuan Sidang Skripsi</h2>
                                    <!-- Konten kiri -->
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Nama:</label>
                                        <p id="namaMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">NIM:</label>
                                        <p id="nimMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Prodi:</label>
                                        <p id="prodiMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Kelas:</label>
                                        <p id="kelasMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Judul:</label>
                                        <p id="judul"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Sub Judul:</label>
                                        <p id="subJudul"></p>
                                    </div>
                                    @csrf
                                <input type="hidden" name="id" id="idPengajuan">
                                <input type="hidden" name="nim" value="123" id="nim">
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Pembimbing:</label>
                                        <input id="namaDosen" class="w-full h-10 text-sm text-gray-700 border border-black rounded-md px-3" readonly>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Jadwal Sidang Skripsi:</label>
                                        <input id="jadwal_sidang" name="jadwal_sidang" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="datetime-local" autofocus/>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Ruang:</label>
                                        <input id="ruang" name="ruang" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="text" autofocus/>
                                    </div>
                                </div>
                                
                                <div class="w-1/2 mt-12">
                                    <!-- Konten kanan -->
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Penguji 1:</label>
                                        <select name="dosen1" id="dosen1" class="h-10 text-xs text-gray-700 border border-black rounded-md px-3">
                                            @foreach($dosen as $item)
                                            <option value="{{$item->nip}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Penguji 2:</label>
                                        <select name="dosen2" id="dosen2" class="h-10 text-xs text-gray-700 border border-black rounded-md" >
                                            @foreach($dosen as $item)
                                            <option value="{{$item->nip}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Penguji 3:</label>
                                        <select name="dosen3" id="dosen3" class="h-10 text-xs text-gray-700 border border-black rounded-md px-3">
                                            @foreach($dosen as $item)
                                            <option value="{{$item->nip}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Nilai Dosen Pembimbing:</label>
                                        <input id="nilaiPembimbing"  class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="text" readonly/>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Nilai Penguji 1:</label>
                                        <input id="nilai_penguji1" name="nilai_penguji1" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="text" readonly/>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Nilai Dosen Penguji 2:</label>
                                        <input id="nilai_penguji2" name="nilai_penguji2" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="text" readonly/>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Nilai Dosen Penguji 3:</label>
                                        <input id="nilai_penguji3" name="nilai_penguji3" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="text" readonly/>
                                    </div>
                                    <div class="flex flex-col mb-4 text-sm">
                                        <label class="font-bold">Rekap Nilai:</label>
                                        <input id="nilai" name="nilai" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer rounded-md" type="number" readonly/>
                                    </div>
                                    <div class="flex flex-col mt-4 text-sm">
                                        <label class="font-bold">Hasil Sidang:</label>
                                        <select name="statusHasil" id="statusHasil" class="w-full h-10 text-sm text-gray-700 border border-black rounded-md px-3">
                                            <option value="">Pilih Status</option>    
                                            <option value="Lulus Sidang">Lulus Sidang</option>
                                            <option value="Lulus dengan Revisi">Lulus Sidang dengan Revisi</option>
                                            <option value="Tidak Lulus Sidang">Tidak Lulus Sidang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex justify-end w-full">
                                    <button id="saveModal" class="mt-4 bg-primary hover:bg-font text-white font-bold py-2 px-4 rounded text-sm">
                                        Simpan
                                    </button>
                                </div>
                                <div class="flex justify-center w-full">
                                    <!-- Tombol "Lulus" dan "Tidak Lulus" berada dalam satu div yang sama -->
                                    <div class="flex">
                                        <button type="submit" name="status" value="Lulus" class="mt-4 bg-[#40C057] hover:bg-font text-white font-bold py-2 px-4 rounded">
                                            Lulus
                                        </button>
                                        <button type="submit" name="status" value="Tidak Lulus" class="mt-4 bg-[#E03131] hover:bg-hoverDelete text-white font-bold py-2 px-4 rounded ml-4">
                                            Tidak Lulus
                                        </button>
                                    </div>
                                </div>
                                <div class="flex justify-center w-full">
                                     <button type="button" id="closeModal" class="mt-4 ml-4 bg-delete hover:bg-hoverDelete text-white font-bold py-2 px-4 rounded">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </td>
            </tr>
            @empty
                <p>Daftar pengajuan sidang masih kosong</p>
            @endforelse
		</tbody>
	</table>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
        // Ambil elemen modal dan tombol-tombolnya
  const modal = document.getElementById('modal');
  const closeModalBtn = document.getElementById('closeModal');
  const editBtns = document.querySelectorAll('.bg-edit');

  // Fungsi untuk membuka modal
  function openModal() {
    modal.classList.remove('hidden');
  }

  // Fungsi untuk menutup modal
  function closeModal() {
    modal.classList.add('hidden');
  }

  // Tambahkan event listener untuk tombol-tombol edit
  editBtns.forEach((btn) => {
    btn.addEventListener('click', openModal);
  });

  // Tambahkan event listener untuk tombol tutup modal
  closeModalBtn.addEventListener('click', closeModal);

   function editButton(id){
    $.ajax({
        type: 'GET',
        url: '/getPengajuanSidang/'+id,
    }).done(function(res){
        console.log(res)
        $('#namaDosen').val(res.namaDosen)
        $('#nim').val(res.nim)
        $('#idPengajuan').val(id)
        $('#namaMahasiswa').text(res.nama)
        $('#nimMahasiswa').text(res.nim)
        $('#prodiMahasiswa').text(res.prodi)
        $('#kelasMahasiswa').text(res.kelas)
        $('#judul').text(res.judul)
        $('#subJudul').text(res.subJudul)
        $('#dosen1').val(res.dosenPenguji[0])
        $('#dosen2').val(res.dosenPenguji[1])
        $('#dosen3').val(res.dosenPenguji[2])
        $('#jadwal_sidang').val(res.jadwalSidang)
        $('#ruang').val(res.ruang)
        $('#nilaiPembimbing').val(res.nilaiPembimbing)
        $('#nilai_penguji1').val(res.nilai_penguji1)
        $('#nilai_penguji2').val(res.nilai_penguji2)
        $('#nilai_penguji3').val(res.nilai_penguji3)
        $('#nilai').val(res.nilai)
        $('#statusHasil').val(res.status)
    })
  }
      
</script>       
</x-admin-layout>
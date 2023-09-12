<x-admin-layout>
    <!-- Tabel Manajemen User - Mahasiswa -->
    <h1 class="font-bold"> Daftar Mahasiswa </h1>
    <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative text-sm">
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Prodi</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Kelas</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tahun Ajaran</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Pembimbing</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
                    <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($daftarMahasiswa as $mahasiswa)
                <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-xs">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$mahasiswa->nama}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$mahasiswa->nim}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Prodi</span>{{$mahasiswa->prodi}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Kelas</span>{{$mahasiswa->kelas}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Kelas</span>{{$mahasiswa->tahun_ajaran}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>{{$mahasiswa->status->nama}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>{{$mahasiswa->dosen ? $mahasiswa->dosen->nama:""}}</td>
                    </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$mahasiswa->skripsi ? $mahasiswa->skripsi->judul:""}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                        <button onclick="editButton('{{$mahasiswa->nim}}')" class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- modal -->
        <div id="modal" class="z-50 fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center overflow-y-auto hidden">
            <form method="post" enctype="multipart/form-data">
                <div class="bg-white p-6 rounded-lg">
                    <div class="flex">
                        <div class="">
                            <h2 class="text-xl font-bold mb-4">Edit Data Mahasiswa</h2>
                            <!-- Konten kiri -->
                            <div class="flex flex-col mb-4 text-xs">
                                <label class="font-bold">Nama:</label>
                                <p id="namaMahasiswa"></p>
                            </div>
                            <div class="flex flex-col mb-4 text-xs">
                                <label class="font-bold">NIM:</label>
                                <p id="nimMahasiswa"></p>
                            </div>
                            <div class="flex flex-col mb-4 text-xs">
                                <label class="font-bold">Prodi:</label>
                                <p id="prodiMahasiswa"></p>
                            </div>
                            <div class="flex flex-col mb-4 text-xs">
                                <label class="font-bold">Kelas:</label>
                                <p id="kelasMahasiswa"></p>
                            </div>
                            <div class="flex flex-col mb-4 text-xs">
                                <label class="font-bold">Tahun Ajaran:</label>
                                <p id="tahunAjaran"></p>
                            </div>
                            <div class="flex flex-col mb-4 text-xs">
                                <label class="font-bold">Judul:</label>
                                <p id="judul"></p>
                            </div>
                            @csrf
                            <input type="hidden" name="id" id="idManajemen">
                            <input type="hidden" name="nim" id="nim">
                        </div>
                        <div class="">
                            <!-- Konten kanan -->
                            <div class="flex flex-col mb-4">
                                <label class="font-bold">Dosen Pembimbing:</label>
                                <select name="dosenPembimbing" class="h-10 text-xs text-gray-700 border border-black rounded-md">
                                    @foreach($dosen as $item)
                                    <option value="{{$item->nip}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex justify-end w-full">
                            <button id="saveModal" class="mt-4 bg-primary hover:bg-font text-white font-bold py-2 px-4 rounded">
                                Simpan
                            </button>
                        </div>
                        <div class="w-full">
                            <button type="button" id="closeModal" class="mt-4 ml-4 bg-delete hover:bg-hoverDelete text-white font-bold py-2 px-4 rounded">
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
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

        function editButton(nim) {
            console.log(nim)
            $.ajax({
                type: 'GET',
                url: '/getManajemenMahasiswa/' + nim,
            }).done(function(res) {
                console.log(res)
                $('#nim').val(res.nim)
                $('#namaMahasiswa').text(res.nama)
                $('#nimMahasiswa').text(res.nim)
                $('#prodiMahasiswa').text(res.prodi)
                $('#kelasMahasiswa').text(res.kelas)
                $('#tahunAjaranMahasiswa').text(res.tahun_ajaran)
                $('#judul').text(res.judul)
            })
        }
    </script>
</x-admin-layout>
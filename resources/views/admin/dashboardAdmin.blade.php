<x-admin-layout :title="'Dashboard Admin'">
    <div class="col-span-2 bg-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-medium">Filter by :</h3>
        <form method="post" action="{{ route('admin.dashboard-admin-filter') }}" enctype="multipart/form-data" class="flex flex-col mt-4">
            @csrf
            <div class="flex justify-between space-x-10">
                <!-- <div class="w-1/2 mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">pilih status</option>
                        <option value="pengajuanJudul" {{ request('status') == 'pengajuanJudul' ? 'selected' : '' }}>Pengajuan Judul dan Dosen Pembimbing</option>
                        <option value="pengajuanSempro" {{ request('status') == 'pengajuanSempro' ? 'selected' : '' }}>Pengajuan Seminar Proposal</option>
                        <option value="lulusSempro" {{ request('status') == 'lulusSempro' ? 'selected' : '' }}>Lulus Seminar Proposal</option>
                        <option value="tidakLulusSempro" {{ request('status') == 'tidakLulusSempro' ? 'selected' : '' }}>Tidak Lulus Seminar Proposal</option>
                        <option value="pengajuanSidang" {{ request('status') == 'pengajuanSidang' ? 'selected' : '' }}>Pengajuan Sidang Skripsi</option>
                        <option value="lulusSidang" {{ request('status') == 'lulusSidang' ? 'selected' : '' }}>Lulus Sidang Skripsi</option>
                        <option value="tidakLulusSidang" {{ request('status') == 'tidakLulusSidang' ? 'selected' : '' }}>Tidak Lulus Sidang Skripsi</option>
                        <option value="penyerahanAlat" {{ request('status') == 'penyerahanAlat' ? 'selected' : '' }}>Penyerahan Alat</option>
                    </select>
                </div> -->
                <div class="w-1/2 mb-4">
                    <label for="prodi" class="block text-sm font-medium text-gray-700">Program Studi</label>
                    <select id="prodi" name="prodi" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Seluruh Prodi</option>
                        @foreach ($prodi as $item)
                            <option value="{{$item->prodi}}">{{$item->prodi}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2 mb-4">
                    <label for="prodi" class="block text-sm font-medium text-gray-700">Tahun Ajaran</label>
                    <select id="prodi" name="tahun_ajaran" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Seluruh Tahun Ajaran</option>
                        @foreach ($tahun_ajaran as $item)
                            <option value="{{$item->tahun_ajaran}}">{{$item->tahun_ajaran}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <button type="submit" class="mt-4 w-fit bg-edit hover:bg-hoverEdit hover:bg-font text-white font-bold py-2 px-4 rounded">
                        Cari
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="flex mt-8 space-x-10">
        <!-- total mahasiswa -->
        <div class="flex flex-wrap justify-center items-center bg-primary shadow rounded w-48 h-60 text-white font-bold">
            <h1 class="flex justify-center items-center w-full">Jumlah Mahasiswa</h1>
            <p class="text-2xl">{{count($dataMahasiswa)}}</p>
        </div>
        <div class="space-y-5">
            <!-- card atas -->
            <div class="flex space-x-10">
                <div class="flex bg-white shadow w-64 h-28 rounded font-bold text-center">
                    <div class="flex items-center justify-center bg-header w-20 rounded-l h-28">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/>
                        </svg>
                    </div>
                    <div class="p-2 w-44">
                        <h1>Total Pengajuan Judul & Dosen Pembimbing</h1>
                        <p class="text-2xl mt-2">{{count($dataMahasiswa->where('status_id', 1))}}</p>
                    </div>
                </div>
                <div class="flex bg-white shadow w-64 h-28 rounded font-bold text-center">
                    <div class="flex items-center justify-center bg-[#F5DA4B] w-20 rounded-l h-28">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 408c0 13.3-10.7 24-24 24s-24-10.7-24-24V305.9l-31 31c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l72-72c9.4-9.4 24.6-9.4 33.9 0l72 72c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-31-31V408z"/>
                        </svg>
                    </div>
                    <div class="p-2 w-44">
                        <h1>Total Pendaftaran Seminar Proposal</h1>
                        <p class="text-2xl mt-2">{{count($dataMahasiswa->where('status_id', 2))}}</p>
                    </div>
                </div>
                <div class="flex bg-white shadow w-64 h-28 rounded font-bold text-center">
                    <div class="flex items-center justify-center bg-[#67F380] w-20 rounded-l h-28">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM288 368a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm211.3-43.3c-6.2-6.2-16.4-6.2-22.6 0L416 385.4l-28.7-28.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l40 40c6.2 6.2 16.4 6.2 22.6 0l72-72c6.2-6.2 6.2-16.4 0-22.6z"/>
                        </svg>
                    </div>
                    <div class="pt-2 p-l1 w-44">
                        <h1>Total Mahasiswa Lulus Seminar Proposal</h1>
                        <p class="text-2xl mt-2">{{count($dataMahasiswa->where('status_id', 3))}}</p>
                    </div>
                </div>
            </div>
            <!-- card bawah -->
            <div class="flex space-x-10">
                <div class="flex bg-white shadow w-64 h-28 rounded font-bold text-center">
                    <div class="flex items-center justify-center bg-[#FFA050] w-20 rounded-l h-28">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 408c0 13.3-10.7 24-24 24s-24-10.7-24-24V305.9l-31 31c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l72-72c9.4-9.4 24.6-9.4 33.9 0l72 72c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-31-31V408z"/>
                        </svg>
                    </div>
                    <div class="p-2 w-44">
                        <h1>Total Pendaftar Sidang Skripsi</h1>
                        <p class="text-2xl mt-2">{{count($dataMahasiswa->where('status_id', 5))}}</p>
                    </div>
                </div>
                <div class="flex bg-white shadow w-64 h-28 rounded font-bold text-center">
                    <div class="flex items-center justify-center bg-[#40C057] w-20 rounded-l h-28">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM288 368a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm211.3-43.3c-6.2-6.2-16.4-6.2-22.6 0L416 385.4l-28.7-28.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l40 40c6.2 6.2 16.4 6.2 22.6 0l72-72c6.2-6.2 6.2-16.4 0-22.6z"/>
                        </svg>
                    </div>
                    <div class="p-2 w-44">
                        <h1>Total Mahasiswa Lulus Sidang Skripsi</h1>
                        <p class="text-2xl mt-2">{{count($dataMahasiswa->where('status_id', 6))}}</p>
                    </div>
                </div>
                <div class="flex bg-white shadow w-64 h-28 rounded font-bold text-center">
                    <div class="flex items-center justify-center bg-[#4686E4] w-20 rounded-l h-28">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM153 289l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L71 337c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM265 255l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"/>
                        </svg>
                    </div>
                    <div class="p-2 w-44">
                        <h1 class="pt-4">Total Penyerahan Alat</h1>
                        <p class="text-2xl mt-4">{{count($dataMahasiswa->where('status_id', 9))}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <p class="mt-2">Total : {{count($dataMahasiswa)}}</p> -->
    <!-- component -->
    <!-- <table class="min-w-full border-collapse block md:table mt-4">
        <thead class="block md:table-header-group text-sm">
            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Prodi</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Kelas</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Pembimbing</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataMahasiswa as $mahasiswa)
            <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$mahasiswa->nama}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$mahasiswa->nim}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Prodi</span>{{$mahasiswa->prodi}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Kelas</span>{{$mahasiswa->kelas}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>{{$mahasiswa->status->nama}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>{{$mahasiswa->dosen ? $mahasiswa->dosen->nama:""}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$mahasiswa->skripsi ? $mahasiswa->skripsi->judul:""}}</td>
            </tr>
            @empty
            <p class="mt-4">Data mahasiswa tidak tersedia</p>
            @endforelse
        </tbody>
    </table> -->
</x-admin-layout>
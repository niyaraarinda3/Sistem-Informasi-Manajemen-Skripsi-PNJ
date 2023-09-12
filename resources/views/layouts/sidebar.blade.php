<!-- sidebar -->
<span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">

    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
</span>
<div class="sidebar fixed z-20 top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-sidebar">
    <div class="text-white text-l font-bold">
        <div class="p-1 ml-2 flex items-center space-x-4">
            <img src="/assets/logo-pnj.png" width="42px" height="42px">
            <h1>Politeknik Negeri Jakarta</h1>
        </div>
        <div class="my-2 bg-white h-[1px]"></div>
    </div>

    <!-- menu sidebar dosen-->
    @if(session()->get('active_role')->role_id==2)
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('dosen.daftar-mahasiswa')}}">Daftar Mahasiswa</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16" fill="white">
            <path fill="currentColor" fill-rule="evenodd" d="M3.5 2.5v11h9v-11h-9ZM3 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3Zm5 10a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 11Zm-2 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 8ZM6 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 5ZM6 6a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" clip-rule="evenodd" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('dosen.daftar-logbook')}}">Logbook</a>
    </div>
    <!-- <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 384 512" class="ml-1 mb-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
    <!-- <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 408c0 13.3-10.7 24-24 24s-24-10.7-24-24V305.9l-31 31c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l72-72c9.4-9.4 24.6-9.4 33.9 0l72 72c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-31-31V408z" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="#">Form Kelengkapan</a> -->
    <!-- </div> -->
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512" class="ml-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
        </svg>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-[15px] ml-3 text-gray-200 font-bold" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</button>
        </form>
    </div>
    @endif


    <!-- menu sidebar admin -->
    @if(session()->get('active_role')->role_id==1)
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('admin.dashboard-admin')}}">Dashboard</a>
    </div>
    <div class="flex-col">
        <div class="p-2.5 mt-3 rounded-md px-4 duration-300 cursor-pointer text-white hover:bg-hover">
            <button class="flex items-center" aria-controls="dropdown-user" data-collapse-toggle="dropdown-user">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                </svg>
                <a class="text-[15px] ml-4 text-gray-200 font-bold">Manajemen User</a>
            </button>
        </div>
        <ul id="dropdown-user" class="hidden py-2 space-y-2">
            <li>
                <a href="{{route('admin.manajemen-mahasiswa')}}" class="flex items-center w-full p-2 text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Mahasiswa</a>
            </li>
            <li>
                <a href="{{route('admin.manajemen-dosen')}}" class="flex items-center w-full p-2 text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Dosen Pembimbing</a>
            </li>
            <li>
                <a href="{{route('admin.manajemen-kps')}}" class="flex items-center w-full p-2 text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Ketua Program Studi</a>
            </li>
        </ul>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm64 64V416H224V160H64zm384 0H288V416H448V160z" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('admin.konten')}}">Manajemen Konten</a>
    </div>
    <div class="flex-col">
        <div class="p-2.5 mt-3 rounded-md px-4 duration-300 cursor-pointer text-white hover:bg-hover">
            <button class="flex items-center" aria-controls="dropdown-pengajuan" data-collapse-toggle="dropdown-pengajuan">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 384 512" class="ml-1 mb-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 408c0 13.3-10.7 24-24 24s-24-10.7-24-24V305.9l-31 31c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l72-72c9.4-9.4 24.6-9.4 33.9 0l72 72c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-31-31V408z" />
                </svg>
                <a class="text-[15px] ml-4 text-gray-200 font-bold">Manajemen Prosedur Skripsi</a>
            </button>
        </div>
        <ul id="dropdown-pengajuan" class="hidden py-2 space-y-2">
            <li>
                <a href="{{route('admin.daftar-pengajuan-judul')}}" class="flex items-center w-full p-2 text-left text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Manajemen Pengajuan Judul dan Dosen Pembimbing</a>
            </li>
            <li>
                <a href="{{route('admin.daftar-pengajuan-sempro')}}" class="flex items-center w-full p-2 text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Manajemen Seminar Proposal</a>
            </li>
            <li>
                <a href="{{route('admin.daftar-pengajuan-sidang')}}" class="flex items-center w-full p-2 text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Manajemen Sidang Skripsi</a>
            </li>
            <li>
                <a href="{{route('admin.daftar-penyerahan-alat')}}" class="flex items-center w-full p-2 text-sm font-bold text-white transition duration-75 rounded-lg group hover:bg-hover  pl-11">Manajemen Penyerahan Alat</a>
            </li>
        </ul>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512" class="ml-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
        </svg>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-[15px] ml-3 text-gray-200 font-bold" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</button>
        </form>
    </div>
    @endif

    <!-- menu sidebar penguji-->
    @if(session()->get('active_role')->role_id==5)
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('penguji.daftar-sempro')}}">Penilaian Seminar Proposal</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16" fill="white">
            <path fill="currentColor" fill-rule="evenodd" d="M3.5 2.5v11h9v-11h-9ZM3 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3Zm5 10a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 11Zm-2 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 8ZM6 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 5ZM6 6a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" clip-rule="evenodd" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('penguji.daftar-sidang')}}">Penilaian Sidang Skripsi</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16" fill="white">
            <path fill="currentColor" fill-rule="evenodd" d="M3.5 2.5v11h9v-11h-9ZM3 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3Zm5 10a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 11Zm-2 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 8ZM6 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 5ZM6 6a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" clip-rule="evenodd" />
        </svg>
        <a class="text-[15px] ml-4 text-gray-200 font-bold" href="{{route('penguji.daftar-revisi')}}">Persetujuan Revisi</a>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-hover text-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512" class="ml-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
        </svg>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-[15px] ml-3 text-gray-200 font-bold" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</button>
        </form>
    </div>
    @endif
</div>

<!-- Header -->
<div class="sticky top-0 bg-white h-16 z-10">
    <div class="flex justify-end p-3 text-sm font-bold space-x-4">
        <div class="mt-2">
            <p>{{Auth::user()->nama}}</p>
            <p>active role {{session('active_role')->role->nama}}</p>
            @foreach(session('roles') as $role)
            @if(session('active_role')->id!=$role->id)
            <a href="/role/switch/{{$role->role_id}}">{{$role->role->nama}}</a>
            <br>
            @endif
            @endforeach
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 19.2c-2.5 0-4.71-1.28-6-3.2c.03-2 4-3.1 6-3.1s5.97 1.1 6 3.1a7.232 7.232 0 0 1-6 3.2M12 5a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-3A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10c0-5.53-4.5-10-10-10Z" />
        </svg>
    </div>
</div>

<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
    }
</script>
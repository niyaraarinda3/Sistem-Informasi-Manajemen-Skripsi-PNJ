<!--Menu bar-->
<div class="flex justify-between pl-6 border-b-4 border-header">
    <ul class="flex">
        <li class="mr-2">
            <a class="flex justify-center items-center inline-block border border-white hover:border-header text-black hover:bg-header py-1 px-3" href="{{route('user.home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 576 512" class="mr-1 mb-1"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
                Home
            </a>
        </li>
        <li class="mr-2">
            <a class="flex justify-center items-center inline-block border border-white hover:border-header text-black hover:bg-header py-1 px-3" href="{{route('user.logbook')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path fill="currentColor" fill-rule="evenodd" d="M3.5 2.5v11h9v-11h-9ZM3 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3Zm5 10a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 11Zm-2 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 8ZM6 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2Zm2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 5ZM6 6a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                </svg>
                Logbook
            </a>
        </li>
        <li class="mr-2">
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <a class="flex justify-center items-center inline-block border border-white hover:border-header text-black hover:bg-header py-1 px-3" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 384 512" class="mr-1 mb-1"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM216 408c0 13.3-10.7 24-24 24s-24-10.7-24-24V305.9l-31 31c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l72-72c9.4-9.4 24.6-9.4 33.9 0l72 72c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-31-31V408z" />
                            </svg>
                            Aktivitas
                        </a>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('user.pengajuan-judul')">
                            {{ __('Pengajuan Judul dan Dosen Pembimbing') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.pengajuan-sempro')">
                            {{ __('Pendaftaran Seminar Proposal') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.pengajuan-sidang')">
                            {{ __('Pengdaftaran Sidang Skripsi') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.penyerahan-alat')">
                            {{ __('Penyerahan Alat dan Dokumen Pelengkap Skripsi') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </li>
        <li class="mr-2">
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <a class="flex justify-center items-center inline-block border border-white hover:border-header text-black hover:bg-header py-1 px-3" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/>
                            </svg>
                            Revisi
                        </a>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('user.daftar-revisi-proposal')">
                            {{ __('Revisi Proposal') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.daftar-revisi-skripsi')">
                            {{ __('Revisi Skripsi') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </li>
        <!-- <li class="mr-2">
            <a class="flex justify-center items-center inline-block border border-white hover:border-header text-black hover:bg-header py-1 px-3" href="{{route('user.notification')}}">
                <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 448 512" class="mr-1 mb-1"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <!-- <path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                </svg>
                Notifikasi
            </a>
        </li>  -->
    </ul>
    <!-- Settings Dropdown -->
    <div class="flex mr-8">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{Auth::user()->nama}} {{Auth::user()->username}}</div>

                    <div class="ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 19.2c-2.5 0-4.71-1.28-6-3.2c.03-2 4-3.1 6-3.1s5.97 1.1 6 3.1a7.232 7.232 0 0 1-6 3.2M12 5a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-3A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10c0-5.53-4.5-10-10-10Z" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('user.profile')">
                    {{ __('Profil') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Keluar') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</div>
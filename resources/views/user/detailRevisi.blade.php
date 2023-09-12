<x-user-layout :title="'Detail Persetujuan Revisi '">
    <div class="w-full space-y-4">
        <div class="flex justify-between">
            <h1 class="font-bold text-xl text-font">Persetujuan Revisi</h1>
            <div class="flex">
                <h1 class="font-bold text-xl text-font">Diterima</h1>
            </div>
        </div>
        <hr class="border-2 border-primary">
        <div class="flex justify-between mb-2">
            <div>
                <label class="block text-sm mb-2" for="">
                    Tanggal Pengajuan:
                </label>
                <x-text-input value="" id="tanggal" class="block mt-1 w-80 border-black mb-4" type="date" name="date" readonly/>
            </div>
            <div>
                <label class="block text-sm mb-2" for="link_vidio">
                    Link Vidio Demo:
                </label>
                <p class="mt-1 w-80 border-black mb-4">
                    <a style="color: blue; text-decoration: underline;" href="https://youtu.be/uB4F9U1aLxo" target="_blank">Link Vidio Demo Aplikasi</a>
                </p>
            </div>
        </div>
        <!-- Dokumen Skripsi -->
        <div>
            <label class="block text-sm mb-2" for="">
                Dokumen Skripsi:
            </label>
            <!-- pdf viewer -->
            <iframe src="{{ asset('asset/fileSkripsi.pdf') }}" width="100%" height="300vh"></iframe>
        </div>

        <!-- Poin-poin Revisi -->
        <div class="mt-12">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                Poin-poin Revisi:
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-60 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" readonly>Ini adalah bagian poin-poin revisi Anda.</textarea>
        </div>

        <!-- Umpan Balik -->
        <div class="mt-12">
            <div class="flex justify-center rounded-t-lg bg-header h-10 p-2">
                <p class="font-bold text-white">Umpan Balik</p>
            </div>
            <div class="border rounded-b-lg rounded-br-lg shadow p-4">
                <p>Ini adalah bagian umpan balik yang diberikan kepada Anda.</p>
            </div>
        </div>
    </div>
</x-user-layout>

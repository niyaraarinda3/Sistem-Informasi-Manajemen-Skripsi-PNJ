<x-dosen-layout :title="'Logbook Mahasiswa'">

    <div class="w-full space-y-4">
        <div class="flex justify-between mb-2">
            <div>
                <label class="block text-sm mb-2" for="">
                    Tanggal Bimbingan
                </label>
                <x-text-input value="{{$detailLogbook->created_at->format('Y-m-d') }}" id="judul" class="block mt-1 w-80 border-black mb-4" type="date" name="date" readonly />
            </div>
            <!-- <div>
                <label class="block text-sm mb-2" for="">
                    Dokumentasi
                </label>
                <x-text-input id="judul" class="block w-64 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus readonly />
            </div> -->
            <div>
                <label class="block text-sm mb-2" for="">
                    Media Bimbingan
                </label>
                <x-text-input value="{{$detailLogbook->media}}" id="media" class="block mt-1 w-80 border-black mb-4" type="text" name="judul" placeholder="Online dengan Media Zoom" readonly />
            </div>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                Uraian Catatan Bimbingan
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-60 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat" readonly>{{$detailLogbook->rincian_kegiatan}}</textarea>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                Rencana Pencapaian
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." readonly>{{$detailLogbook->rencana_pencapaian}}</textarea>
        </div>
</div>

    <!-- Feedback -->
    @if($detailLogbook->status == '-')
    <form method="POST" class="mt-8">
        <div class="flex justify-center rounded-t-lg bg-header h-10 p-2">
            <p class="font-bold text-white">Umpan Balik</p>
        </div>
        <div class="border rounded-b-lg rounded-br-lg shadow">
            <textarea id="feedback" name="feedback" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-b-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan umpan balik Anda disini..."></textarea>
        </div>
    

    <!-- <div class="flex justify-end mt-8">
        <x-primary-button class="flex justify-center w-fit">
            {{ __('Kirim') }}
        </x-primary-button>
    </div> -->

    <!-- button action -->
    <div class="flex justify-center mt-8">
        <!-- button terima -->
        <div class="w-full">
            <input type="submit" name="status" value="terima" class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">
        </div>

        <!-- button tolak -->
        <!-- <div class="w-full">
            <input type="submit" name="status" value="tolak" class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]">
        </div> -->
    </div>
    @csrf
    </form>
    @endif

</x-dosen-layout>
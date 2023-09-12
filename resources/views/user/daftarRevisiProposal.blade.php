<x-user-layout :title="'Daftar Revisi Proposal '">
    <h1 class="font-bold mb-2">
        Daftar Revisi Proposal
    </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-l">
            <thead class="text-l text-white text-center bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border w-1/3">
                        Penguji
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Poin Revisi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarRevisiProposal as $revisi)
                    <tr class="revisi-item">
                        <td class="px-6 py-3 border w-1/3">
                            @php
                                $dosenPenguji = $dosenPenguji->where('nip', $revisi->nip_penguji)->first();
                                $namaDosenPenguji = $dosenPenguji ? $dosenPenguji->nama : 'Tidak ditemukan';
                            @endphp
                            {{ $namaDosenPenguji }}
                        </td>
                        <td class="px-6 py-3 border">
                            {{ $revisi->poin_revisi }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-user-layout>

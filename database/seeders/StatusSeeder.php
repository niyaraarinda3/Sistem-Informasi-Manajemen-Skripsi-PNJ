<?php

namespace Database\Seeders;

use App\Models\Status;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'nama' => 'Pengajuan Judul',
        ]);

        Status::create([
            'nama' => 'Pengajuan Seminar Proposal',
        ]);

        Status::create([
            'nama' => 'Lulus Seminar Proposal',
        ]);

        Status::create([
            'nama' => 'Tidak Lulus Seminar Proposal',
        ]);

        Status::create([
            'nama' => 'Pengajuan Sidang',
        ]);

        Status::create([
            'nama' => 'Lulus Sidang',
        ]);

        Status::create([
            'nama' => 'Tidak Lulus Sidang',
        ]);

        Status::create([
            'nama' => 'Sedang Revisi',
        ]);

        Status::create([
            'nama' => 'Penyerahan Alat',
        ]);
    }
}

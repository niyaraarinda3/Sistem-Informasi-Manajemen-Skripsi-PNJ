<?php

namespace Database\Seeders;

use App\Models\Role; //import

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'nama'=>'admin'
            ]);

        Role::create([
            'nama' => 'dosen_pembimbing',
        ]);

        Role::create([
            'nama' => 'kps',
        ]);

        Role::create([
            'nama' => 'mahasiswa',
        ]);

        Role::create([
            'nama' => 'dosen_penguji',
        ]);
    }
}

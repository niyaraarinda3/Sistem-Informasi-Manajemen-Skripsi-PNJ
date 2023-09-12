<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use App\Models\Dosen;
use App\Models\Mahasiswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        $user1 = User::create([
            'username' => 'nip1',
            'password' => 'nip1',
            'email' => 'admin1@gmail.com',
            'nama' => 'Ayres Pradiptyas, S.S.T., M.M',
            ]);

            //buat penentuan role
            UserRole::create(
                [
                    'user_id' => $user1->id,
                    'role_id' => 1
                ]
            );

            UserRole::create(
                [
                    'user_id' => $user1->id,
                    'role_id' => 5
                ]
            );

            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user1->username,
                    'user_id' => $user1->id,
                    'nama' => $user1->nama,
                    'email' => $user1->email,
                ]
        );

        //dosen pembimbing
        $user2 = User::create([
            'username' => 'nip2',
            'password' => 'nip2',
            'email' => 'dospem@gmail.com',
            'nama' => 'Eriya S.Kom., M.T.',
            ]);

            UserRole::create(
                [
                    'user_id' => $user2->id,
                    'role_id' => 2
                ]
            );

            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user2->username,
                    'user_id' => $user2->id,
                    'nama' => $user2->nama,
                    'email' => $user2->email,
                ]
        );

        //mahasiswa
        $user3 = User::create([
            'username' => '1907411012',
            'password' => '123456',
            'email' => 'farrah@gmail.com',
            'nama' => 'Farrah Dillah Angeli',
            ]);

            UserRole::create(
                [
                    'user_id' => $user3->id,
                    'role_id' => 4
                ]
            );

            //buat data mahasiswa
            Mahasiswa::create(
                [
                    'nim' => $user3->username,
                    'user_id' => $user3->id,
                    'nama' => $user3->nama,
                    'prodi' => 'Teknik Informatika',
                    'kelas' => 'TI 8A',
                    'tahun_ajaran' => '2022/2023',
                    'email' => $user3->email,
                ]
        );

        //mahasiswa
        $user4 = User::create([
            'username' => '1907411032',
            'password' => '123456',
            'email' => 'arin@gmail.com',
            'nama' => 'Niyara Arinda',
            ]);

            UserRole::create(
                [
                    'user_id' => $user4->id,
                    'role_id' => 4
                ]
            );

            //buat data mahasiswa
            Mahasiswa::create(
                [
                    'nim' => $user4->username,
                    'user_id' => $user4->id,
                    'nama' => $user4->nama,
                    'prodi' => 'Teknik Informatika',
                    'kelas' => 'TI 8A',
                    'tahun_ajaran' => '2022/2023',
                    'email' => $user4->email,
                ]
        );

        //KPS TI
        $user5 = User::create([
            'username' => 'nip3',
            'password' => 'nip3',
            'email' => 'kps1@gmail.com',
            'nama' => 'Asep Taufik Muharram, S.Kom., M.Kom.',
            ]);

            UserRole::create(
                [
                    'user_id' => $user5->id,
                    'role_id' => 3
                ]
            );

            //jika memiliki lebih dari 1 role, create userRole 
            UserRole::create(
                [
                    'user_id' => $user5->id,
                    'role_id' => 2
                ]
            );

            UserRole::create(
                [
                    'user_id' => $user5->id,
                    'role_id' => 5
                ]
            );

            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user5->username,
                    'user_id' => $user5->id,
                    'nama' => $user5->nama,
                    'email' => $user5->email,
                ]
            );

        //KPS TMD
        $user6 = User::create([
            'username' => 'nip4',
            'password' => 'nip4',
            'email' => 'kps2@gmail.com',
            'nama' => 'Noorlela Marcheta, S.Kom., M.Kom.',
            ]);

            UserRole::create(
                [
                    'user_id' => $user6->id,
                    'role_id' => 3
                ]
            );

            //jika memiliki lebih dari 1 role, create userRole 
            UserRole::create(
                [
                    'user_id' => $user6->id,
                    'role_id' => 2
                ]
            );
    
            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user6->username,
                    'user_id' => $user6->id,
                    'nama' => $user6->nama,
                    'email' => $user6->email,
                ]
            );
        
        //KPS TMJ
        $user7 = User::create([
            'username' => 'nip5',
            'password' => 'nip5',
            'email' => 'kps3@gmail.com',
            'nama' => 'Dr. Prihatin Oktivasari, S.Si., M.Si',
            ]);

            UserRole::create(
                [
                    'user_id' => $user7->id,
                    'role_id' => 3
                ]
            );

            //jika memiliki lebih dari 1 role, create userRole 
            UserRole::create(
                [
                    'user_id' => $user7->id,
                    'role_id' => 2
                ]
            );
    
            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user7->username,
                    'user_id' => $user7->id,
                    'nama' => $user7->nama,
                    'email' => $user7->email,
                ]
            );

        //KPS TKJ
        $user8 = User::create([
            'username' => 'nip6',
            'password' => 'nip6',
            'email' => 'kps4@gmail.com',
            'nama' => 'Asep Kurniawan, S.Pd., M.Kom.',
            ]);

            UserRole::create(
                [
                    'user_id' => $user8->id,
                    'role_id' => 3
                ]
            );

            //jika memiliki lebih dari 1 role, create userRole 
            UserRole::create(
                [
                    'user_id' => $user8->id,
                    'role_id' => 2
                ]
            );
    
            //buat data dosen
            Dosen::create(
                [
                    'nip' => $user8->username,
                    'user_id' => $user8->id,
                    'nama' => $user8->nama,
                    'email' => $user8->email,
                ]
            );

        //mahasiswa
        $user9 = User::create([
            'username' => '1907411027',
            'password' => '123456',
            'email' => 'dwi@gmail.com',
            'nama' => 'Dwi Adyaksa',
            ]);

            UserRole::create(
                [
                    'user_id' => $user9->id,
                    'role_id' => 4
                ]
            );

            //buat data mahasiswa
            Mahasiswa::create(
                [
                    'nim' => $user9->username,
                    'user_id' => $user9->id,
                    'nama' => $user9->nama,
                    'prodi' => 'Teknik Multimedia Digital',
                    'kelas' => 'TMD 8A',
                    'tahun_ajaran' => '2021/2022',
                    'email' => $user9->email,
                ]
        );

    }
}

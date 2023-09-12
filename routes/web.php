<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\DaftarPengajuanJudulController;
use App\Http\Controllers\PengajuanSemproController;
use App\Http\Controllers\DaftarPengajuanSemproController;
use App\Http\Controllers\DaftarSemproController;
use App\Http\Controllers\PenilaianSemproController;
use App\Http\Controllers\DaftarSidangController;
use App\Http\Controllers\PenilaianSidangController;
use App\Http\Controllers\PengajuanSidangController;
use App\Http\Controllers\DaftarPengajuanSidangController;
use App\Http\Controllers\PenyerahanAlatController;
use App\Http\Controllers\DaftarPenyerahanAlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\LogBookController;
use App\Http\Controllers\DaftarLogBookController;
use App\Http\Controllers\DetailLogBookController;
use App\Http\Controllers\FormLogbookController;
use App\Http\Controllers\FormRevisiController;
use App\Http\Controllers\DetailLogBookMahasiswaController;
use App\Http\Controllers\DetailMahasiswaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ManajemenMahasiswaController;
use App\Http\Controllers\ManajemenKPSController;
use App\Http\Controllers\ManajemenDosenController;
use App\Http\Controllers\TambahKontenController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\RevisiProposalController;
use App\Http\Controllers\RevisiSkripsiController;
use App\Http\Controllers\ApproveRevisiController;
use App\Http\Controllers\DaftarRevisiSkripsiController;
use App\Models\PengajuanJudul;
use App\Models\PengajuanSidang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth', 'verified'])->name('admin.dashboard-admin');
Route::post('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth', 'verified'])->name('admin.dashboard-admin-filter');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::middleware('auth')->group(function () {
    // untuk storage jurnal
    Route::get('/storage/{folder}/{filename}', [StorageController::class, 'getFile']);

    // user - home mahasiswa 
    Route::get("/home", [HomeController::class, 'viewHome'])->name('user.home');


    // user - logbook mahasiswa 
    Route::get("/logbook", [LogBookController::class, 'viewLogBookMahasiswa'])->name('user.logbook');

    // user - Form logbook mahasiswa
    Route::get('/form-logbook', [FormLogbookController::class, 'viewFormLogbook'])->name('user.form-logbook');
    Route::post('/form-logbook', [FormLogbookController::class, 'createFormLogbook'])->name('user.create-form-logbook');

    // user - detail logbook
    Route::get('/detail-logbook-mahasiswa/{id}', [DetailLogbookMahasiswaController::class, 'viewDetailLogbookMahasiswa'])->name('user.detail-logbook-mahasiswa');

    // user - pengajuan judul
    Route::get('/pengajuan-judul', [PengajuanJudulController::class, 'viewPengajuanJudul'])->name('user.pengajuan-judul');
    Route::post('/pengajuan-judul', [PengajuanJudulController::class, 'createPengajuanJudul'])->name('user.create-pengajuan-judul');

    // user - pengajuan sempro
    Route::get('/pengajuan-sempro', [PengajuanSemproController::class, 'viewPengajuanSempro'])->name('user.pengajuan-sempro');
    Route::post('/pengajuan-sempro', [PengajuanSemproController::class, 'createPengajuanSempro'])->name('user.create-pengajuan-sempro');

    // dosen - daftar mahasiswa
    Route::get('/daftar-mahasiswa', [DaftarMahasiswaController::class, 'viewDaftarMahasiswa'])->name('dosen.daftar-mahasiswa');
    Route::put('/terima-permintaan-judul/{idPengajuanJudul}', [DaftarMahasiswaController::class, 'terimaPermintaanBimbingan']);
    Route::put('/tolak-permintaan-judul/{idPengajuanJudul}', [DaftarMahasiswaController::class, 'tolakPermintaanBimbingan']);

    // dosen - daftar logbook
    Route::get('/daftar-logbook', [DaftarLogbookController::class, 'viewDaftarLogbook'])->name('dosen.daftar-logbook');

    // dosen - detail logbook
    Route::get('/detail-logbook/{id}', [DetailLogbookController::class, 'viewDetailLogbook'])->name('dosen.detail-logbook');
    Route::post('/detail-logbook/{id}', [DetailLogbookController::class, 'updateDetailLogbook'])->name('dosen.detail-logbook');

    // user - pengajuan sidang
    Route::get('/pengajuan-sidang', [PengajuanSidangController::class, 'viewPengajuanSidang'])->name('user.pengajuan-sidang');
    Route::post('/pengajuan-sidang', [PengajuanSidangController::class, 'createPengajuanSidang'])->name('user.create-pengajuan-sidang');

    // user - penyerahan alat
    Route::get('/penyerahan-alat', [PenyerahanAlatController::class, 'viewPenyerahanAlat'])->name('user.penyerahan-alat');
    Route::post('/penyerahan-alat', [PenyerahanAlatController::class, 'createPenyerahanAlat'])->name('user.create-penyerahan-alat');

    // user - form revisi
    Route::get('/form-revisi/{id}', [FormRevisiController::class, 'viewFormRevisi'])->name('user.form-revisi');
    Route::post('/form-revisi/{id}', [FormRevisiController::class, 'createFormRevisi'])->name('user.create-form-revisi');

    //user - revisi proposal
    Route::get('/daftar-revisi-proposal', [RevisiProposalController::class, 'viewRevisiProposal'])->name('user.daftar-revisi-proposal');

    //user - revisi skripsi 
    Route::get('/daftar-revisi-skripsi', [DaftarRevisiSkripsiController::class, 'viewDaftarRevisiSkripsi'])->name('user.daftar-revisi-skripsi');
    
    // user - profile
    Route::get('/profile', [ProfileController::class, 'viewProfile'])->name('user.profile');
    Route::post('/profile', [ProfileController::class, 'createProfile'])->name('user.create-profile');

    // admin - manajemen KPS
    Route::get('/manajemen-kps', [ManajemenKPSController::class, 'viewManajemenKPS'])->name('admin.manajemen-kps');

    // admin - manajemen Dosen Pembimbing
    Route::get('/manajemen-dosen', [ManajemenDosenController::class, 'viewManajemenDosen'])->name('admin.manajemen-dosen');

    // admin - manajemen Mahasiswa
    Route::get('/manajemen-mahasiswa', [ManajemenMahasiswaController::class, 'viewManajemenMahasiswa'])->name('admin.manajemen-mahasiswa');
    Route::post('/manajemen-mahasiswa', [ManajemenMahasiswaController::class, 'createManajemenMahasiswa'])->name('admin.create.manajemen-mahasiswa');

    // dosen - detail mahasiswa
    Route::get('/detail-mahasiswa/{id}', [DetailMahasiswaController::class, 'viewDetailMahasiswa'])->name('dosen.detail-mahasiswa');
    Route::post('/detail-mahasiswa/{id}', [DetailMahasiswaController::class, 'createDetailSempro'])->name('dosen.create-detail-mahasiswa');
    Route::post('/detail-mahasiswa/{id}', [DetailMahasiswaController::class, 'createDetailSidang'])->name('dosen.create-detail-mahasiswa');

    // admin - tambah konten
    Route::get('/tambah-konten', [TambahKontenController::class, 'viewTambahKonten'])->name('admin.tambah-konten');
    Route::post('/tambah-konten', [TambahKontenController::class, 'createTambahKonten'])->name('admin.create-tambah-konten');

    // admin - konten
    Route::get("/konten", [KontenController::class, 'viewKonten'])->name('admin.konten');
    Route::delete('/konten/{kontenId}', [KontenController::class, 'deleteKonten']);

    // admin - daftar pengajuan judul
    Route::get('/daftar-pengajuan-judul', [DaftarPengajuanJudulController::class, 'viewDaftarPengajuanJudul'])->name('admin.daftar-pengajuan-judul');

    // admin - daftar pengajuan sempro
    Route::get('/daftar-pengajuan-sempro', [DaftarPengajuanSemproController::class, 'viewDaftarPengajuanSempro'])->name('admin.daftar-pengajuan-sempro');
    Route::post("/daftar-pengajuan-sempro", [DaftarPengajuanSemproController::class, 'createDaftarPengajuanSempro'])->name('admin.create-daftar-pengajuan-sempro');

    // penguji - daftar sempro
    Route::get('/daftar-sempro', [DaftarSemproController::class, 'viewDaftarSempro'])->name('penguji.daftar-sempro');
    Route::post("/daftar-sempro", [DaftarSemproController::class, 'createDaftarSempro'])->name('penguji.create-daftar-sempro');

    // penguji - penilaian sempro
    Route::get('/penilaian-sempro/{id}', [PenilaianSemproController::class, 'viewPenilaianSempro'])->name('penguji.penilaian-sempro');
    Route::post("/penilaian-sempro/{id}", [PenilaianSemproController::class, 'createPenilaianSempro'])->name('penguji.create-penilaian-sempro');

    // penguji - daftar sidang
    Route::get('/daftar-sidang', [DaftarSidangController::class, 'viewDaftarSidang'])->name('penguji.daftar-sidang');
    Route::post("/daftar-sidang", [DaftarSidangController::class, 'createDaftarSidang'])->name('penguji.create-daftar-sidang');

    // penguji - penilaian sidang
    Route::get('/penilaian-sidang/{id}', [PenilaianSidangController::class, 'viewPenilaianSidang'])->name('penguji.penilaian-sidang');
    Route::post("/penilaian-sidang/{id}", [PenilaianSidangController::class, 'createPenilaianSidang'])->name('penguji.create-penilaian-sidang');

    //penguji- revisi skripsi
    Route::get('/daftar-revisi', [RevisiSkripsiController::class, 'viewRevisiSkripsi'])->name('penguji.daftar-revisi');

    // penguji - approve revisi
    Route::get('/approve-revisi/{id}', [ApproveRevisiController::class, 'viewApproveRevisi'])->name('penguji.approve-revisi');
    Route::post("/approve-revisi/{id}", [ApproveRevisiController::class, 'updateApproveRevisi'])->name('penguji.create-approve-revisi');

    // admin - daftar pengajuan sidang
    Route::get('/daftar-pengajuan-sidang', [DaftarPengajuanSidangController::class, 'viewDaftarPengajuanSidang'])->name('admin.daftar-pengajuan-sidang');
    Route::post("/daftar-pengajuan-sidang", [DaftarPengajuanSidangController::class, 'createDaftarPengajuanSidang'])->name('admin.create-daftar-pengajuan-sidang');

    // admin - daftar penyerahan alat
    Route::get('/daftar-penyerahan-alat', [DaftarPenyerahanAlatController::class, 'viewDaftarPenyerahanAlat'])->name('admin.daftar-penyerahan-alat');
    Route::post("/daftar-penyerahan-alat", [DaftarPenyerahanAlatController::class, 'createDaftarPenyerahanAlat'])->name('admin.create-daftar-penyerahan-alat');

    //api
    Route::get("/getPengajuanSempro/{id}", [PengajuanSemproController::class, 'getApi'])->name('pengajuanSempro.getApi');
    Route::get("/getPengajuanSidang/{id}", [PengajuanSidangController::class, 'getApi'])->name('pengajuanSidang.getApi');
    Route::get("/getPenyerahanAlat/{id}", [PenyerahanAlatController::class, 'getApi'])->name('penyerahanAlat.getApi');
    Route::get('/getformRevisi/{id}', [FormRevisiController::class, 'getApi'])->name('formRevisi.getApi');;
    Route::get("/getManajemenMahasiswa/{nim}", [ManajemenMahasiswaController::class, 'getApi'])->name('manajemenMahasiswa.getApi');
});



// Route::get("/home", function () {
//     return view('user.home');
// })->name('user.home');

// Route::get("/form-logbook", function () {
//     return view('user.formLogbook');
// })->name('user.form-logbook');

// Route::get("/detail-logbook", function () {
//     return view('user.detailLogbook');
// })->name('user.detail-logbook');

// Route::get("/profile", function () {
//     return view('user.profile');
// })->name('user.profile');

// Route::get("/pengajuan-sempro", function () {
//     return view('user.pengajuanSempro');
// })->name('user.pengajuan-sempro');

// Route::get("/pengajuan-sidang", function () {
//     return view('user.pengajuanSidang');
// })->name('user.pengajuan-sidang');

// Route::get("/penyerahan-alat", function () {
//     return view('user.penyerahanAlat');
// })->name('user.penyerahan-alat');

Route::get("/notification", function () {
     return view('user.notification');
 })->name('user.notification');

// Route::get("/daftar-revisi-proposal", function (){
//     return view('user.daftarRevisiProposal');
// })->name('user.daftar-revisi-proposal');


//  Route::get("/daftar-revisi-skripsi", function (){
//     return view('user.daftarRevisiSkripsi');
//  })->name('user.daftar-revisi-skripsi');

//  Route::get("/form-revisi", function (){
//     return view('user.formRevisi');
//  })->name('user.form-revisi');

//  Route::get("/detail-revisi", function (){
//     return view('user.detailRevisi');
//  })->name('user.detail-revisi');

// routes for user dosen
// Route::get("/dosen/daftar-mahasiswa", function () {
//     return view('dosen.daftarMahasiswa');
// })->name('dosen.daftar-mahasiswa');

// Route::get("/dosen/logbook", function () {
//     return view('dosen.logbookMahasiswa');
// })->name('dosen.logbook');

// Route::get("/dosen/detail-logbook", function () {
//     return view('dosen.detailLogbook');
// })->name('dosen.detail-logbook');

// Route::get("/dosen/detail-mahasiswa", function () {
//     return view('dosen.detailMahasiswa');
// })->name('dosen.detail-mahasiswa');



// routes for user penguji
// Route::get("/penguji/daftar-sempro", function () {
//     return view('penguji.daftarSempro');
// })->name('penguji.daftar-sempro');

// Route::get("/penguji/penilaian-sempro", function () {
//     return view('penguji.penilaianSempro');
// })->name('penguji.penilaian-sempro');

// Route::get("/penguji/daftar-sidang", function () {
//     return view('penguji.daftarSidang');
// })->name('penguji.daftar-sidang');

// Route::get("/penguji/penilaian-sidang", function () {
//     return view('penguji.penilaianSidang');
// })->name('penguji.penilaian-sidang');

// Route::get("/penguji/daftar-revisi", function () {
//     return view('penguji.daftarRevisi');
// })->name('penguji.daftar-revisi');

// Route::get("/penguji/approve-revisi", function () {
//     return view('penguji.approveRevisi');
// })->name('penguji.approve-revisi');



// routes for user admin
// Route::get("/admin/dashboard-admin", function () {
//     return view('admin.dashboardAdmin');
// })->name('admin.dashboard-admin');

// Route::get("/admin/manajemen-mahasiswa", function () {
//     return view('admin.manajemenMahasiswa');
// })->name('admin.manajemen-mahasiswa');

// Route::get("/admin/manajemen-dosen", function () {
//     return view('admin.manajemenDosen');
// })->name('admin.manajemen-dosen');

// Route::get("/admin/manajemen-kps", function () {
//     return view('admin.manajemenKPS');
// })->name('admin.manajemen-kps');

// Route::get("/admin/konten", function () {
//     return view('admin.Konten');
// })->name('admin.konten');

// Route::get("/admin/tambah-konten", function () {
//     return view('admin.tambahKonten');
// })->name('admin.tambah-konten');

// Route::get("/admin/pengajuan-judul", function () {
//     return view('admin.adminJudul');
// })->name('admin.pengajuan-judul');

// Route::get("/admin/pengajuan-seminar", function () {
//     return view('admin.adminSeminar');
// })->name('admin.pengajuan-seminar');

// Route::get("/admin/pengajuan-sidang", function () {
//     return view('admin.adminSidang');
// })->name('admin.pengajuan-sidang');

// Route::get("/admin/penyerahan-alat", function () {
//     return view('admin.adminAlat');
// })->name('admin.penyerahan-alat');

Route::get('/role/switch/{roleId}', [RoleController::class, 'switchRole'])->name('switch-role');

require __DIR__ . '/auth.php';

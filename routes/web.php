<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Livewire\Login;
use App\Http\Livewire\ResetPassword;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// if (env('APP_ENV') === 'demo') {
//     URL::forceSchema('https');
// }


//Grup testing
Route::get('/', function () {
    return view('pages.sipekerti.main');
})->name('home')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route::get('/login', Login::class)->name('login');
// Route::get('/password-resets', ResetPassword::class)->name('password.resets');

// Route::get('/home', function () {return view('home');});
// Route::get('/tes', function () {return view('layouts.apps');});
// Route::get('/main', function () {return view('pages.main');});
// Route::get('/student', function () {return view('pages.student');});

//Grup SIPEKERTI
Route::get('/sipekerti/2022', function () {
    return view('pages.2022.sipekerti.main');
})->name('2022.dashboard')->middleware(['auth', 'auth.password_reset']);
Route::get('/sipekerti/2022/tahap1', function () {
    return view('pages.2022.sipekerti.tahap1');
})->name('2022.tahap1')->middleware('auth');
Route::get('/sipekerti/2022/tahap2', function () {
    return view('pages.2022.sipekerti.tahap2');
})->name('2022.tahap2')->middleware('auth');
Route::get('/sipekerti/2022/rekap', function () {
    return view('pages.2022.sipekerti.rekap');
})->middleware('2022.auth');
Route::get('/sipekerti/2022/nominasi', function () {
    return view('pages.2022.sipekerti.nominasi');
})->middleware('auth');
Route::get('/sipekerti/2022/komponen', function () {
    return view('pages.2022.sipekerti.komponen');
})->name('2022.komponen')->middleware('auth');
Route::get('/sipekerti/2022/subkomponen', function () {
    return view('pages.2022.sipekerti.subkomponen');
})->name('2022.subkomponen')->middleware('auth');
Route::get('/sipekerti/2022/indikator', function () {
    return view('pages.2022.sipekerti.indikator');
})->name('2022.indikator')->middleware('auth');
Route::get('/sipekerti/2022/jabatan', function () {
    return view('pages.2022.sipekerti.jabatan');
})->name('2022.jabatan')->middleware('auth');
Route::get('/sipekerti/2022/pegawai', function () {
    return view('pages.2022.sipekerti.pegawai');
})->name('2022.pegawai')->middleware('auth');
Route::get('/sipekerti/2022/seleksi', function () {
    return view('pages.2022.sipekerti.seleksi');
})->name('2022.seleksi')->middleware('auth');
Route::get('/sipekerti/2022/rekap1', function () {
    return view('pages.2022.sipekerti.rekap1');
})->name('2022.rekap1')->middleware('auth');
Route::get('/sipekerti/2022/rekap2', function () {
    return view('pages.2022.sipekerti.rekap2');
})->name('2022.rekap2')->middleware('auth');
Route::get('/sipekerti/2022/penilai', function () {
    return view('pages.2022.sipekerti.penilai');
})->name('2022.penilai')->middleware('auth');
Route::get('/sipekerti/2022/user', function () {
    return view('pages.2022.sipekerti.user');
})->name('2022.user')->middleware('auth');

//Grup SIPEKERTI
Route::get('/sipekerti', function () {
    return view('pages.sipekerti.main');
})->name('dashboard')->middleware('auth');
Route::get('/sipekerti/tahap1', function () {
    return view('pages.sipekerti.tahap1');
})->name('tahap1')->middleware('auth');
Route::get('/sipekerti/tahap2', function () {
    return view('pages.sipekerti.tahap2');
})->name('tahap2')->middleware('auth');
Route::get('/sipekerti/rekap', function () {
    return view('pages.sipekerti.rekap');
})->middleware('auth');
Route::get('/sipekerti/nominasi', function () {
    return view('pages.sipekerti.nominasi');
})->middleware('auth');
Route::get('/sipekerti/komponen', function () {
    return view('pages.sipekerti.komponen');
})->name('komponen')->middleware('auth');
Route::get('/sipekerti/subkomponen', function () {
    return view('pages.sipekerti.subkomponen');
})->name('subkomponen')->middleware('auth');
Route::get('/sipekerti/indikator', function () {
    return view('pages.sipekerti.indikator');
})->name('indikator')->middleware('auth');
Route::get('/sipekerti/jabatan', function () {
    return view('pages.sipekerti.jabatan');
})->name('jabatan')->middleware('auth');
Route::get('/sipekerti/pegawai', function () {
    return view('pages.sipekerti.pegawai');
})->name('pegawai')->middleware('auth');
Route::get('/sipekerti/seleksi', function () {
    return view('pages.sipekerti.seleksi');
})->name('seleksi')->middleware('auth');

Route::get('/sipekerti/progresspegawai', function () {
    return view('pages.sipekerti.progress_pegawai');
})->name('progresspegawai')->middleware('auth');

Route::get('/sipekerti/rekap1', function () {
    return view('pages.sipekerti.rekap1');
})->name('rekap1')->middleware('auth');
Route::get('/sipekerti/presensi', function () {
    return view('pages.sipekerti.presensi');
})->name('presensi')->middleware('auth');

Route::get('/sipekerti/rekaptahap1', function () {
    return view('pages.sipekerti.rekaptahap1');
})->name('rekaptahap1')->middleware('auth');

Route::get('/sipekerti/rekap2', function () {
    return view('pages.sipekerti.rekap2');
})->name('rekap2')->middleware('auth');

Route::get('/sipekerti/penilai', function () {
    return view('pages.sipekerti.penilai');
})->name('penilai')->middleware('auth');

Route::get('/sipekerti/user', function () {
    return view('pages.sipekerti.user');
})->name('user')->middleware('auth');

Route::get('/sipekerti/presensi', function () {
    return view('pages.sipekerti.presensi');
})->name('presensi')->middleware('auth');

Route::post('/sipekerti/presensi/import', [PresensiController::class, 'import'])->name('import.presensi')->middleware('auth');

Route::get('/sipekerti/presensi_event', function () {
    return view('pages.sipekerti.presensievent');
})->name('presensi.event')->middleware('auth');

Route::get('/sipekerti/employee_ckp', function () {
    return view('pages.sipekerti.employeeckp');
})->name('employee.ckp')->middleware('auth');

Route::get('/sipekerti/rekap2_2024', function () {
    return view('pages.sipekerti.rekap2_2024');
})->name('rekap2_2024')->middleware('auth');

Route::get('/sipekerti/reset-pass', function () {
    return view('pages.sipekerti.password-resets');
})->name('password.resets')->middleware('auth');

Route::get('/sipekerti/export_excel', 'ExportController@export_excel');

Route::get('/sipekerti/rekaps_excel', function () {
    return view('pages.sipekerti.rekap');
})->name('rekap')->middleware('auth');

//Grup STUBA
// Route::get('/stuba', function () {return view('pages.stuba.main');});
// Route::get('/stuba/tahun', function () {return view('pages.stuba.tahun');});
// Route::get('/stuba/kategori', function () {return view('pages.stuba.kategori');});
// Route::get('/stuba/variabel', function () {return view('pages.stuba.variabel');});
// Route::get('/stuba/strategis', function () {return view('pages.stuba.data');});
// Route::get('/stuba/interpretasi', function () {return view('pages.stuba.interpretasi');});
// Route::get('/stuba/video', function () {return view('pages.stuba.video');});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false]);
// Auth::routes([
//     'register' => false, // Registration Routes...
//     'reset' => false, // Password Reset Routes...
//     'verify' => false, // Email Verification Routes...
// ]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboardadmin', function () {
        return view('admin.dashboardadmin');
    })->middleware('role:admin');

    Route::get('/dashboard', function () {
        return view('user.dashboarduser');
    })->middleware('role:siswa');

    // CRUD
    Route::get('/datamurid', [SiswaController::class, 'index'])->middleware('role:admin');
    Route::get('/adddata', [SiswaController::class, 'create'])->middleware('role:admin');
    Route::post('/adddata', [SiswaController::class, 'store'])->middleware('role:admin');
    Route::get('/editdata/{id}', [SiswaController::class, 'edit'])->middleware('role:admin');
    Route::put('/editdata/{id}', [SiswaController::class, 'update'])->middleware('role:admin');
    Route::delete('/delete/{siswa}', [SiswaController::class, 'destroy'])->middleware('role:admin');

    // Laporan Izin
    Route::post('/izin/store', [IzinController::class, 'store'])->name('izin.store')->middleware('role:siswa');
    Route::get('/laporanizin', [IzinController::class, 'index'])->name('admin.laporan.laporanizin')->middleware('role:admin');

    // admin page
    Route::get('/datapresensi', function () {
        return view('admin.masterdata.datapresensi');
    })->name('datapresensi')->middleware('role:admin');

    Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create')->middleware('role:admin');
    Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store')->middleware('role:admin');
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index')->middleware('role:admin');
    Route::get('/dataabsensi', [AttendanceController::class, 'data'])->name('dataabsensi')->middleware('role:admin');
    Route::get('attendance/{id}', [AttendanceController::class, 'show'])->name('attendance.show')->middleware('role:admin');
    Route::get('/attendance/edit/{id}', [AttendanceController::class, 'edit'])->name('attendance.edit')->middleware('role:admin');
    Route::post('/attendance/update/{id}', [AttendanceController::class, 'update'])->name('attendance.update')->middleware('role:admin');
    Route::post('attendance/scan-result', [AttendanceController::class, 'storeScanResult'])->name('attendance.storeScanResult')->middleware('role:admin');


    // QR code scanning route
    Route::get('/scan-qr', function () {
        return view('user.scanqr');
    })->name('scan-qr')->middleware('role:siswa');
    Route::post('/attendance/scan', [AttendanceController::class, 'scan'])->name('attendance.scan');



    // Admin page to view attendance results
    Route::get('/hasilpresensi', [AttendanceController::class, 'hasilPresensi'])->name('hasilpresensi')->middleware('role:admin');

    // Siswa Page
    Route::get('/presensi', function () {
        return view('user.presensi');
    })->name('presensi')->middleware('role:siswa');

    Route::get('/izinpage', function () {
        return view('user.izinpage');
    })->name('izinpage')->middleware('role:siswa');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('role:siswa');
    Route::get('/lokasi', function () {
        return view('user.lokasi');
    })->name('lokasi')->middleware('role:siswa');
});

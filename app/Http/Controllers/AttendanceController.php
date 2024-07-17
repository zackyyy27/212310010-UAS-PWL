<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\AttendanceResult;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AttendanceController extends Controller
{
    public function create()
    {
        return view('admin.generateqr.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required|string',
            'tanggalAbsensi' => 'required|date',
            'waktuAbsenMasuk' => 'required',
            'batasWaktuAbsenMasuk' => 'required',
            'waktuAbsenPulang' => 'required',
            'batasWaktuAbsenPulang' => 'required',
        ]);

        $attendance = new Attendance();
        $attendance->hari = $request->hari;
        $attendance->tanggal = $request->tanggalAbsensi;
        $attendance->waktu_absen_masuk = $request->waktuAbsenMasuk;
        $attendance->batas_waktu_absen_masuk = $request->batasWaktuAbsenMasuk;
        $attendance->waktu_absen_pulang = $request->waktuAbsenPulang;
        $attendance->batas_waktu_absen_pulang = $request->batasWaktuAbsenPulang;
        $attendance->save();

        // Generate QR code
        $qrCodePath = 'qrcodes/qrcode_' . $attendance->id . '.png';
        QrCode::format('png')->generate(route('attendance.show', $attendance->id), storage_path('app/public/' . $qrCodePath));

        return redirect()->route('attendance.index')->with('success', 'Data absensi dan QR code berhasil disimpan.');
    }

    public function index()
    {
        $attendances = Attendance::all();
        return view('admin.generateqr.view', compact('attendances'));
    }


    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('admin.generateqr.edit', compact('attendance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required|string',
            'tanggalAbsensi' => 'required|date',
            'waktuAbsenMasuk' => 'required',
            'batasWaktuAbsenMasuk' => 'required',
            'waktuAbsenPulang' => 'required',
            'batasWaktuAbsenPulang' => 'required',
        ]);

        $attendance = Attendance::find($id);
        $attendance->tanggal = $request->tanggalAbsensi;
        $attendance->hari = $request->hari;
        $attendance->waktu_absen_masuk = $request->waktuAbsenMasuk;
        $attendance->batas_waktu_absen_masuk = $request->batasWaktuAbsenMasuk;
        $attendance->waktu_absen_pulang = $request->waktuAbsenPulang;
        $attendance->batas_waktu_absen_pulang = $request->batasWaktuAbsenPulang;
        $attendance->save();
        return redirect()->route('dataabsensi');
    }



    public function data()
    {
        $attendances = Attendance::all();
        return (view('admin.generateqr.view', [
            'attendances' => $attendances
        ]));
    }

    public function show($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendance.show', compact('attendance'));
    }

    public function storeScanResult(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'hari' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i:s',
        ]);

        $attendanceResult = new AttendanceResult();
        $attendanceResult->nama_siswa = $request->nama;
        $attendanceResult->hari = $request->hari;
        $attendanceResult->tanggal = $request->tanggal;
        $attendanceResult->jam = $request->jam;
        $attendanceResult->save();

        return response()->json(['success' => 'Hasil scan berhasil disimpan.']);
    }
}

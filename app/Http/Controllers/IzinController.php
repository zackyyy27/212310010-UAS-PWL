<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin;
use App\Models\Siswa;

class IzinController extends Controller
{
    public function store(Request $request)
    {
        $siswa_id = Siswa::where('user_id', auth()->id())->first();
        $file = $request->file('file_path');
        if ($file) {
            $fileName = time() . $file->getClientOriginalName();
            $file->storeAs('public/surat-izin', $fileName);
            $request['file_path'] = $fileName;
        }
        $request['siswa_id'] =  $siswa_id->id;
        Izin::create($request->all());

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function index()
    {
        $izins = Izin::with('siswa')->latest()->get();
        return view('admin.laporan.laporanizin', compact('izins'));
    }
}

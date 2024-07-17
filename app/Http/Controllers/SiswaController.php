<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('admin.masterdata.datamurid', [
            'siswas' => $siswas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masterdata.adddata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $filtered = $request->except(['email', 'password']);
        $dataSiswa = $filtered;
        $fotoProfil = $request->file('foto');
        if ($fotoProfil) {
            $fileName = time() . $fotoProfil->getClientOriginalName();
            $fotoProfil->storeAs('public/foto-profil', $fileName);
            $dataSiswa['foto'] = $fileName;
        }
        $dataSiswa['user_id'] = $user->id;
        Siswa::create($dataSiswa);


        return redirect("/datamurid");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.masterdata.editdata', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { {
            $dataSiswa = Siswa::findOrFail($id);

            $dataSiswa->nama_lengkap = $request->input('nama_lengkap');
            $dataSiswa->nis = $request->input('nis');
            $dataSiswa->agama = $request->input('agama');
            $dataSiswa->tempat_lahir = $request->input('tempat_lahir');
            $dataSiswa->tanggal_lahir = $request->input('tanggal_lahir');
            $dataSiswa->kelas = $request->input('kelas');
            $dataSiswa->jurusan = $request->input('jurusan');
            $dataSiswa->alamat = $request->input('alamat');

            if ($request->hasFile('foto')) {
                Storage::delete('public/foto-profil/' . $dataSiswa->foto);
                $fileName = time() . $request->file('foto')->getClientOriginalName();
                $request->file('foto')->storeAs('public/foto-profil', $fileName);
                $dataSiswa->foto = $fileName;
            }
            $dataSiswa->save();

            return redirect('/datamurid')->with('success', 'Data siswa berhasil diperbarui');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect('/datamurid')->with('success', 'Siswa berhasil dihapus');
    }
}

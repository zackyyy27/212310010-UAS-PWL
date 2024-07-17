<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $siswa = Siswa::where('user_id', $user_id)->first();
        return view('user.profile', [
            'siswa' => $siswa
        ]);
    }
}

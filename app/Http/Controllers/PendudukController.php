<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendudukController extends Controller
{
    function ShowLogin(){
        return view("penduduk.login");
    }

    function Login(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ] , [
            'nik.required' => 'Nik Harus Di Isi',
            'password.required' => 'Password Harus Di Isi',
        ]);

        $periksaLogin = [
            'nik' => $request->nik,
            'password' => $request->password
        ];

        if(Auth::attempt($periksaLogin)){
            $nama = Auth::user()->nama;
            $role = Auth::user()->role;
            if($role === 'masyarakat'){
                return view('masyarakat.dashboard' , [
                    'nama' => $nama,
                    'role' => $role
                ]);
            }elseif($role === 'raja'){
                return view('raja.dashboard' , [
                    'nama' => $nama,
                    'role' => $role
                ]);
            }elseif($role === 'admin'){
                return view('admin.dashboard' , [
                    'nama' => $nama,
                    'role' => $role
                ]);
            }
        }else{
            return redirect('/login')->withErrors('Nik dan Password Tidak Sesuai Atau Tidak Terdaftar');
        }
    }
}

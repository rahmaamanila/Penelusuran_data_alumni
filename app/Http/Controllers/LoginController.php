<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use session;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        // dd($request->all());
        $userCheck = Auth::guard('user')->attempt($request->only('email','password'));
        
        if ($userCheck){
            $user = User::where(['email' => $request->email])->first();
            $alumni = Alumni::where(['email' => $user->email])->first();
            $request->session()->put('alumni', (object) [
                'nik' => $alumni->nik,
                'email' => $alumni->email,
                'nama' => $alumni->nama,
                'id_user' => $alumni->id_user,
                'role' => $user->role,
            ]);
            return redirect('/beranda');
        }else{
            return redirect('/login')->with('error', 'Email atau Password anda salah !!');
        }
       
    }

    public function logout(){
        if (Auth::guard('alumni')->check()){
            Auth::guard('alumni')->logout();
        }elseif (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        // Auth::logout();
        return redirect ('/login');
    }

    public function registrasi(){
        $jabatan = \App\Jabatan::all();
        $perusahaan = \App\Perusahaan::all();
        return view('login.registrasi', compact('jabatan', 'perusahaan'));
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        $messages = [
            'required' => 'Tidak boleh kosong',
            'unique' => 'Sudah terdaftar silahkan login',
            'alpha_num' => 'Hanya boleh berisi huruf dan angka',
            'numeric' => 'Hanya menginput angka'
        ];

        $this->validate($request,[
            'nik' => 'required|numeric|unique:alumni,nik',
    		'id_perusahaan' => 'nullable',
            'id_jabatan' => 'nullable',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenkel' => 'required',
            'agama' => 'required',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
            'thn_lulus' => 'required|numeric',
            'angkatan' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|alpha-num|min:6',
            'status' => 'required',
            'tgl_masuk' => 'nullable'
    	],$messages);

        try {
            $insert = User::create([
                'name' => $request->nama,
                'role'=> 'alumni',
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
 
            $alumni = [
                'nik' => $request->nik,
                'id_perusahaan' => $request->id_perusahaan,
                'id_jabatan' => $request->id_jabatan,
                'nama' => $request->nama,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jenkel' => $request->jenkel,
                'agama' => $request->agama,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'thn_lulus' => $request->thn_lulus,
                'angkatan' => $request->angkatan,
                'email' => $request->email,
                'password' => $request->password,
                'status' => $request->status,
                'tgl_masuk' => $request->tgl_masuk,
                'id_user' => $insert->id,
                'role' => 'alumni'
            ];

            if($request->hasFile('foto')) {
                $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
                // dd($request->file('foto')->getClientOriginalName());
                $alumni2 = array('foto' => $request->file('foto')->getClientOriginalName());
                // dd(array_merge($alumni, $alumni2)); 
                $createAlumni = Alumni::create(array_merge($alumni, $alumni2));
                $createAlumni->save();
            } else {
                Alumni::create($alumni);
            }

        } catch (\Throwable $th) {
            dd($th);
        }

        if ($request->status === 'bekerja') {
            $data['id_perusahaan'] = $request->id_perusahaan;
            $data['id_jabatan'] = $request->id_jabatan;
            $data['tgl_masuk'] = $request->tgl_masuk;
         } else {
            $data['id_perusahaan'] = null;
            $data['id_jabatan'] = null;
            $data['tgl_masuk'] = null;
        }

        // return redirect('/beranda');

        $userCheck = Auth::guard('user')->attempt($request->only('email','password'));
        
        if ($userCheck){
            $user = User::where(['email' => $request->email])->first();
            $alumni = Alumni::where(['email' => $user->email])->first();
            $request->session()->put('alumni', (object) [
                'nik' => $alumni->nik,
                'email' => $alumni->email,
                'nama' => $alumni->nama,
                'id_user' => $alumni->id_user,
                'role' => $user->role,
            ]);
            return redirect('/login')->with('success', 'Berhasil mendaftar silahkan login');
        }else{
            return redirect('/login');
        }

    }
}

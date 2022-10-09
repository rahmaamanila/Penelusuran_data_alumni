<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;
use App\Jabatan;
use App\Perusahaan;
use App\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        if($request) {
            if($request->cari != ''){
                $alumni = Alumni::whereColumn([
                    ['nik', 'like', '%'.$request->cari.'%'],
                    ['nama', "<>","Admin"]
                ])
                ->orWhere('nama', 'like', '%'.$request->cari.'%')
                ->orWhere('thn_lulus', 'like', '%'.$request->cari.'%')
                ->Where('nama', "<>","Admin")
                ->get();
            }else{
                $alumni = Alumni::Where('nama', "<>","Admin")
                ->get();
            }
            
        }else{
            $alumni = Alumni::all();
        }

    	return view('alumni.index',compact('alumni','request'));
    }

    public function index_alumni(Request $request)
    {
        if($request) {
            if($request->cari != ''){
                $index_alumni = Alumni::whereColumn([
                    ['nik', 'like', '%'.$request->cari.'%'],
                    ['nama', "<>","Admin"]
                ])
                ->orWhere('nama', 'like', '%'.$request->cari.'%')
                ->orWhere('thn_lulus', 'like', '%'.$request->cari.'%')
                ->get();
            }else{
                $index_alumni = Alumni::Where('nama', "<>","Admin")
                ->get();
            }
        
        }else{
            $index_alumni = Alumni::all();
        }

    	return view('alumni.index_alumni',compact('index_alumni','request'));
    }

    public function cetak_alumni(Request $request)
    {
        if($request) {
            if($request->cari != ''){
                $cetak_alumni = Alumni::whereColumn([
                    ['nik', 'like', '%'.$request->cari.'%'],
                    ['nama', "<>","Admin"]
                ])
                ->orWhere('nama', 'like', '%'.$request->cari.'%')
                ->orWhere('thn_lulus', 'like', '%'.$request->cari.'%')
                ->get();
            }else{
                $cetak_alumni = Alumni::Where('nama', "<>","Admin")
                ->get();
            }
        
        }else{
            $cetak_alumni = Alumni::all();
        }
        
    	return view('alumni.cetak_alumni',compact('cetak_alumni','request'));
    }

    public function cetak_alumni_form(Request $request)
    {
        if($request) {
            if($request->cari != ''){
                $cetak_alumni_form = Alumni::whereColumn([
                    ['nik', 'like', '%'.$request->cari.'%'],
                    ['nama', "<>","Admin"]
                ])
                ->orWhere('nama', 'like', '%'.$request->cari.'%')
                ->orWhere('thn_lulus', 'like', '%'.$request->cari.'%')
                ->get();
            }else{
                $cetak_alumni_form = Alumni::Where('nama', "<>","Admin")
                ->get();
            }
        
        }else{
            $cetak_alumni_form = Alumni::all();
        }
        
    	return view('alumni.cetak_alumni_form',compact('cetak_alumni_form','request'));
    }

    public function cetak_alumni_pertahun($thn_lulus) 
    {
        // dd(["Tahun : ".$thn_lulus]);

        $cetak_alumni_pertahun = Alumni::with('jabatan', 'perusahaan')->where('thn_lulus',[$thn_lulus])->get();
        return view('alumni.cetak_alumni_pertahun', compact('cetak_alumni_pertahun'));
    }


    // public function profile()
    // {
    //     $user = User::where('id', Auth::user()->id)->first();
    //     return view('alumni.profile', compact('user'));
    // }

    // public function update_profile(Request $request)
    // {
    //     $id = Auth::user()->id;
    //     $user = User::find($id);

    //     $user->email = $request->email;
    //     $user->password = bcrypt($request->password);
    //     $user->save();

    //     return redirect('/alumni/profile')->with('Data diedit', 'Data berhasil diedit');
    // }

    public function tambah() 
    { 
        // return view('alumni.tambah');

        $jabatan = \App\Jabatan::all();
        $perusahaan = \App\Perusahaan::all();
        return view('alumni.tambah', compact('jabatan', 'perusahaan'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Tidak boleh kosong',
            'unique' => 'Nik sudah terdata',
            'numeric' => 'Harus berupa nomor',
            'alpha-num' => 'Kata sandi hanya boleh berisi huruf dan angka',
            'min' => 'Kata sandi harus minimal 6 karakter'
        ];

    	$this->validate($request,[
            'nik' => 'required|string|unique:alumni,nik',
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
                // 'foto' => $request->file('foto')->getClientOriginalName(),
                'role' => 'alumni',
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

            // dd($alumni);
            
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


        // $alumni['password'] = bcrypt($alumni['password']);
        // Alumni::create($alumni);

        return redirect('/alumni')->with('Data ditambah', 'Data berhasil ditambah');
        
    }

    public function detail($id)
    {
        $alumni = Alumni::where('nik',$id)->first();
        return view('alumni.detail', compact('alumni'));
    }

    public function detail_alumni($id)
    {
        $alumni = Alumni::where('nik',$id)->first();
        return view('alumni.detail_alumni', compact('alumni'));
    }

    public function edit($id)
    {
        $jabatan = \App\Jabatan::all();
        $perusahaan = \App\Perusahaan::all();
        $alumni = Alumni::where('nik',$id)->first();
        return view('alumni.editt', compact('alumni','jabatan','perusahaan'));
    }
    
    public function update($id, Request $request)
    {
        $messages = [
            'required' => 'Tidak boleh kosong',
            'unique' => 'Nik sudah terdata',
            'numeric' => 'Harus berupa nomor',
            'alpha-num' => 'Kata sandi hanya boleh berisi huruf dan angka',
            'min' => 'Kata sandi harus minimal 6 karakter'
        ];

        $this->validate($request,[
            'nik' => 'disable',
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

        //  try {
        //     $insert = User::create([
        //         'name' => $request->nama,
        //         'role'=> 'alumni',
        //         'email' => $request->email,
        //         'password' => bcrypt($request->password)
        //     ]);

        // $ubah = Alumni::where('nik',$id)->first();
        // $awal = $ubah->foto;

            $data = [
                'nik' => $request->nik,
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
                // 'id_user' => $insert->id,
                // 'foto' => $awal,
                'role' => 'alumni'
            ];
        // } catch (\Throwable $th) {
        //     // dd($th);
        // }

         if ($request->status === 'bekerja') {
            $data['id_perusahaan'] = $request->id_perusahaan;
            $data['id_jabatan'] = $request->id_jabatan;
            $data['tgl_masuk'] = $request->tgl_masuk;
         } else {
            $data['id_perusahaan'] = null;
            $data['id_jabatan'] = null;
            $data['tgl_masuk'] = null;
        }
        
         Alumni::where('nik',$id)->update($data);

         $alumni = Alumni::where('nik',$id)->first();

         User::where('id', $alumni->id_user)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
         ]);

        return redirect('/alumni')->with('Data diedit', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        $dataAlumni = Alumni::where('nik',$id)->first();
        User::where('email',$dataAlumni->email)->delete();
        Alumni::where('nik',$id)->delete();

        return redirect('/alumni')->with('Data dihapus', 'Data berhasil dihapus');
    }
}

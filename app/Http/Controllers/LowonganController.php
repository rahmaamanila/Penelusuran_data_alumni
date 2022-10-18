<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;

class LowonganController extends Controller
{
    public function index()
    {
    	$lowongan = Lowongan::all();
    	return view ('lowongan.index', compact('lowongan'));
    }

    public function index_alumni()
    {
    	$index_alumni = Lowongan::all();
    	return view ('lowongan.index2', compact('index_alumni'));
    }

    public function tambah() 
    { 
        $alumni = \App\Alumni::all();
        return view('lowongan.tambah', compact('alumni'));
    }

   public function store(Request $request)
    {
        // dd($request->all());

        $messages = [
            'required' => 'Tidak boleh kosong'
        ];

    	$this->validate($request,[
            'judul' => 'required',
            'nik' => 'required',
            'keterangan' => 'required',
            'foto' => 'required'
    	],$messages);

        $lowongan = Lowongan::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
            $lowongan->foto = $request->file('foto')->getClientOriginalName();
            $lowongan->save();
        }

        if (session('alumni')->role === 'alumni') {
            return redirect('/lowongan/index_alumni')->with('Data ditambah', 'Data berhasil ditambah');
        } else {
            return redirect('/lowongan')->with('Data ditambah', 'Data berhasil ditambah');
        }

        // return redirect('/lowongan')->with('Data ditambah', 'Data berhasil ditambah');
        // return redirect('/lowongan');
    }


    public function detail($id)
    {
        $lowongan = Lowongan::where('id_lowongan',$id)->first();
        return view('lowongan.detail', compact('lowongan'));
    }

    public function edit($id)
    {
        $alumni = \App\Alumni::all();
        $lowongan = Lowongan::where('id_lowongan',$id)->first();
        return view('lowongan.edit', compact('lowongan','alumni'));
    }
    
    public function update($id, Request $request)
    {
        $ubah = Lowongan::where('id_lowongan',$id)->first();
        $awal = $ubah->foto;

        $messages = [
            'required' => 'Tidak boleh kosong'
        ];

    	$this->validate($request,[
            'judul' => 'required',
            'nik' => 'required',
            'keterangan' => 'required'
    	],$messages);

        $lowongan = [
            'judul' => $request->judul,
            'nik' => $request->nik,
            'foto' => $awal,
            'keterangan' => $request->keterangan
        ];

        if ($request->foto) {
            $request->foto->move('img/', $awal);
        }
        
        $ubah->update($lowongan);
        
        // $this->validate($request,[
        //     'judul' => 'required',
        //     'keterangan' => 'required'
        //  ]);
        
        //  Lowongan::where('id_lowongan',$id)->update([
        //     'judul' => $request->judul,
        //     'keterangan' => $request->keterangan,
        // ]);

        return redirect('/lowongan')->with('Data diedit', 'Data berhasil diedit');

    }

    public function delete($id)
    {
        Lowongan::where('id_lowongan',$id)->delete();

        // $lowongan = Lowongan::find($id);
        // $lowongan->delete();

        return redirect('/lowongan')->with('Data dihapus', 'Data berhasil dihapus');
    }
}

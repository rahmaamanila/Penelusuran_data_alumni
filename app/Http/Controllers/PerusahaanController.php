<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;

class PerusahaanController extends Controller
{
    public function index()
    {
    	$perusahaan = Perusahaan::all();
    	return view ('perusahaan.index', compact('perusahaan'));
    }

    public function tambah() 
    { 
        return view('perusahaan.tambah');
    }

   public function store(Request $request)
    {
        $messages = [
            'unique' => 'Nama Perusahaan sudah ada',
        ];

    	$this->validate($request,[
            'nm_perusahaan' => 'required|string|unique:perusahaan,nm_perusahaan'
    	],$messages);
 
        Perusahaan::create([
            'nm_perusahaan' => $request->nm_perusahaan
    	]);
 
    	return redirect('/perusahaan')->with('Data ditambah', 'Data berhasil ditambah');
    }

    public function delete($id)
    {
        Perusahaan::where('id_perusahaan',$id)->delete();

        // $lowongan = Lowongan::find($id);
        // $lowongan->delete();

        return redirect('/perusahaan')->with('Data dihapus', 'Data berhasil dihapus');
    }
}

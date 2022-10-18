<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
{ 
    public function index()
    {
    	$jabatan = Jabatan::all();
    	return view ('jabatan.index', compact('jabatan'));
    }
 
    public function tambah() 
    { 
        return view('jabatan.tambah');
    }


    public function store(Request $request)
    {
        $messages = [
            'required' => 'Tidak boleh kosong',
            'unique' => 'Nama Jabatan sudah ada',
        ];

    	$this ->validate($request,[
    		'nm_jabatan' => 'required|string|unique:jabatan,nm_jabatan',
    	],$messages);

        Jabatan::create([
            'nm_jabatan' => $request->nm_jabatan
    	]);

        return redirect('/jabatan')->with('Data ditambah', 'Data berhasil ditambah');
    }
    
    
        public function delete($id)
    {
        Jabatan::where('id_jabatan',$id)->delete();

        // $jabatan = Jabatan::find($id);
        // $jabatan->delete();

        return redirect('/jabatan')->with('Data dihapus', 'Data berhasil dihapus');
    }
}

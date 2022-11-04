<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Event;
use App\Jabatan;
use App\Lowongan;
use App\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $get_jumlah_alumni_jenkel = DB::table('alumni')
                 ->select('jenkel', DB::raw('count(*) as total'))
                 ->groupBy('jenkel')
                 ->get();
        
        $jumlah_alumni_jenkel = [];
        foreach ($get_jumlah_alumni_jenkel as $key => $value) {
            $jumlah_alumni_jenkel[] = $value->total;
        }
        // $var_nama = "Rahma Amanila";
        // return view('halamandepan.beranda');
        // echo "<pre>"; print_r(session('user_login')); exit;
        
        if($request) {
            if($request->cari != ''){
                $jumlah_alumni = Alumni::whereColumn([
                    ['nama', "<>","Admin"]
                ])
                ->Where('nama', "<>","Admin")
                ->count();
            }else{
                $jumlah_alumni = Alumni::Where('nama', "<>","Admin")
                ->count();
            }
            
        }else{
           $jumlah_alumni = Alumni::all()->count();
        }
        
       $jumlah_lowongan = Lowongan::all()->count();
       $jumlah_event = Event::all()->count();
       $jumlah_perusahaan = Perusahaan::all()->count();
       $jumlah_jabatan = Jabatan::all()->count();

       $event = Event::all();

       return view('halamandepan.beranda', compact('event'))
       ->with('jumlah_alumni', $jumlah_alumni)
       ->with('jumlah_alumni_jenkel', $jumlah_alumni_jenkel)
       ->with('jumlah_lowongan', $jumlah_lowongan)
       ->with('jumlah_event', $jumlah_event)
       ->with('jumlah_perusahaan', $jumlah_perusahaan)
       ->with('jumlah_jabatan', $jumlah_jabatan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

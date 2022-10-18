<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Alumni;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
    	$event = Event::all();
    	return view ('event.index', compact('event'));
    }

    public function index_alumni()
    {
        $hariini = date("Y-m-d");
    	$index_alumni = Event::where('selesai_event',">=",$hariini)->get();

    	return view ('event.index_alumni', compact('index_alumni'));
    }

    public function cetak_event()
    {
        $cetak_event = Event::all();
        return view('event.cetak_event',compact('cetak_event'));
    }

    public function cetak_event_form()
    {
        $cetak_event_form = Event::all();
        $textExam = "2022/09/19";
        $coba_data = substr($textExam,0 ,4);
        return view('event.cetak_event_form',compact('cetak_event_form', 'coba_data'));
    }

    public function cetak_event_pertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$awal_event, "Tanggal Selesai :".$selesai_event]);
        // $cetak_event_pertanggal = Event::with('alumni')->where('awal_event','LIKE', '%'. $tahun_event .'%')->get();
        // dd($cetak_event_pertanggal);
        $cetak_event_pertanggal = Event::with('alumni')->whereBetween('awal_event', [$tglawal, $tglakhir])->get();
        return view('event.cetak_event_pertanggal', compact('cetak_event_pertanggal'));
    }

    public function tambah() 
    {
        $alumni = \App\Alumni::all();
        return view('event.tambah', compact('alumni'));
    }

   public function store(Request $request)
    {
        $messages = [
            'required' => 'Tidak boleh kosong'
        ];

    	$this->validate($request,[
            'nik' => 'required',
            'nm_event' => 'required',
            'awal_event' => 'required',
            'selesai_event' => 'required',
            'keterangan' => 'required',
            'foto' => 'required'
    	],$messages);

        $event = Event::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('Gambar/', $request->file('foto')->getClientOriginalName());
            $event->foto = $request->file('foto')->getClientOriginalName();
            $event->save();
        }

    	return redirect('/event')->with('Data ditambah', 'Data berhasil ditambah');
    }

    public function detail($id)
    {
        $event = Event::where('id_event',$id)->first();
        return view('event.detail', compact('event'));
    }

    public function edit($id)
    {
        $alumni = \App\Alumni::all();
        $event = Event::where('id_event',$id)->first();
        return view('event.edit', compact('event','alumni'));
    }

    public function update($id, Request $request)
    {
        $ubah = Event::where('id_event',$id)->first();
        $awal = $ubah->foto;

        $messages = [
            'required' => 'Tidak boleh kosong'
        ];

    	$this->validate($request,[
            'nik' => 'required',
            'nm_event' => 'required',
            'awal_event' => 'required',
            'selesai_event' => 'required',
            'keterangan' => 'required',
    	],$messages);

        $event = [
            'nik' => $request->nik,
            'nm_event' => $request->nm_event,
            'awal_event' => $request->awal_event,
            'selesai_event' => $request->selesai_event,
            'keterangan' => $request->keterangan,
            'foto' => $awal
        ];

        if ($request->foto) {
            $request->foto->move('Gambar/', $awal);
        }

        $ubah->update($event);

        return redirect('/event')->with('Data diedit', 'Data berhasil diedit');
    }

    public function delete($id)
    {
        Event::where('id_event',$id)->delete();
        return redirect('/event')->with('Data dihapus', 'Data berhasil dihapus');
    }
}

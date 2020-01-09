<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PengembalianController extends Controller
{
	public function index()
	{
		$data_pengembalian = \App\Pengembalian::all();
    	return view('pengembalian.index',['data_pengembalian'=> $data_pengembalian]);
	}

	public function create(Request $request)
	{
		\App\Pengembalian::create($request->all());
		return redirect ('/pengembalian')->with('sukses','Data Berhasil Diinput');
	}

	public function	edit($id_pengembalian)
	{
		$pengembalian	= \App\Pengembalian::find($id_pengembalian);
		return	view('pengembalian/edit',['pengembalian'=> $pengembalian]);
	}

		public function update(Request $request){
    		$pengembalian = DB::table('pengembalian')->where('id_pengembalian',$request->id_pengembalian)->update([
    			'id_pengembalian' =>$request->id_pengembalian,
    			'tanggal_pinjam' =>$request->tanggal_pinjam,
    			'tanggal_kembali' =>$request->tanggal_kembali,
    			'keterangan' =>$request->keterangan,
    			'status_pengembalian' =>$request->status_pengembalian,
    			'id_pegawai' =>$request->id_pegawai
    		]);
    			return redirect('/pengembalian')->with('sukses','Data Berhasil Diupdate');
	}

		public function	delete($id_pengembalian)
	{
		$pengembalian	= \App\Pengembalian::find($id_pengembalian);
		$pengembalian->delete($pengembalian);
		return redirect('/pengembalian')->with('sukses','Data Berhasil Dihapus');
	}
}

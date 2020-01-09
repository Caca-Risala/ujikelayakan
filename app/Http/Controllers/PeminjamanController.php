<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PeminjamanController extends Controller
{
	public function index()
	{
		$data_peminjaman = \App\Peminjaman::all();
    	return view('peminjaman.index',['data_peminjaman'=> $data_peminjaman]);
	}

	public function create(Request $request)
	{
		\App\Peminjaman::create($request->all());
		return redirect ('/peminjaman')->with('sukses','Data Berhasil Diinput');
	}

	public function	edit($id_peminjaman)
	{
		$peminjaman	= \App\Peminjaman::find($id_peminjaman);
		return	view('peminjaman/edit',['peminjaman'=> $peminjaman]);
	}

		public function update(Request $request){
    		$peminjaman = DB::table('peminjaman')->where('id_peminjaman',$request->id_peminjaman)->update([
    			'id_peminjaman' =>$request->id_peminjaman,
    			'tanggal_pinjam' =>$request->tanggal_pinjam,
    			'tanggal_kembali' =>$request->tanggal_kembali,
    			'keterangan' =>$request->keterangan,
    			'status_peminjaman' =>$request->status_peminjaman,
    			'id_pegawai' =>$request->id_pegawai
    		]);
    			return redirect('/peminjaman')->with('sukses','Data Berhasil Diupdate');
	}

		public function	delete($id_peminjaman)
	{
		$peminjaman	= \App\Peminjaman::find($id_peminjaman);
		$peminjaman->delete($peminjaman);
		return redirect('/peminjaman')->with('sukses','Data Berhasil Dihapus');
	}
}

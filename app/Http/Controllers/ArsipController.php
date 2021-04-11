<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;



class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_arsip = DB::table('data_arsip')->paginate(5);
        return view('daftar-arsip.arsip', ['data_arsip' => $data_arsip]);
    }

    public function cetak()
    {
        $data_arsip = DB::table('data_arsip')->paginate(15);
        return view('daftar-arsip.arsip-laporan', ['data_arsip' => $data_arsip]);
    }

    // Cari Data
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $data_arsip = DB::table('data_arsip')
            ->where('jenis_arsip', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('daftar-arsip.arsip', ['data_arsip' => $data_arsip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar-arsip.arsip-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('lampiran')) {
            $lampiran = $request->file('lampiran')->store('lampiran', 'public');
        } else {
            $lampiran = null;
        }

        $checkDuplicate1 = DB::table('data_arsip')->where('no_register','=',$request->no_register)->count();
        if ($checkDuplicate1>0) {
            return Redirect::back()->withInput($request->all())->with(["error"=>"no_register sudah dipakai"]);
        }

        DB::table('data_arsip')->insert(
            [
                'kode_klarifikasi' => $request->kode_klarifikasi,
                'jenis_arsip' => $request->jenis_arsip,
                'no_register' => $request->no_register,
                'tahun' => $request->tahun,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'uraian' => $request->uraian,
                'tgl_input' => $request->tgl_input,
                'petugas' => $request->petugas,
                'no_buku' => $request->no_buku,
                'no_boks' => $request->no_boks,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket,
                'lampiran' => $lampiran
            ]
        );

        // $lampiran = $request->lampiran;
        // $new_lampiran = time() . $lampiran->getClientOriginalName();

        return redirect()->route('arsip')->with('message', 'Data berhasil disimpan');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'kode_klarifikasi' => 'required|min:3',
            'no_register' => 'required|min:3',
            'jenis_arsip' => 'required|min:3',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //     $path = $request->file('lampiran')->store('lampiran');


        // if ($request->file('lampiran') == null) {
        //     $file = "";
        // } else {
        //     $file = $request->file('lampiran')->store('lampiran');
        // }
        $data_arsip = DB::table('data_arsip')->where('id', $id)->first();
        return view('daftar-arsip.arsip-detail', ['data_arsip' => $data_arsip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_arsip = DB::table('data_arsip')->where('id', $id)->first();
        return view('daftar-arsip.arsip-edit', ['data_arsip' => $data_arsip]);
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
        if ($request->has('lampiran')) {
            $lampiran = $request->file('lampiran')->store('lampiran', 'public');
            DB::table('data_arsip')->where('id', $id)->update([
                'kode_klarifikasi' => $request->kode_klarifikasi,
                'jenis_arsip' => $request->jenis_arsip,
                'no_register' => $request->no_register,
                'tahun' => $request->tahun,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'uraian' => $request->uraian,
                'tgl_input' => $request->tgl_input,
                'petugas' => $request->petugas,
                'no_buku' => $request->no_buku,
                'no_boks' => $request->no_boks,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket,
                'lampiran' => $lampiran
            ]);
        } else {
            DB::table('data_arsip')->where('id', $id)->update([
                'kode_klarifikasi' => $request->kode_klarifikasi,
                'jenis_arsip' => $request->jenis_arsip,
                'no_register' => $request->no_register,
                'tahun' => $request->tahun,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'uraian' => $request->uraian,
                'tgl_input' => $request->tgl_input,
                'petugas' => $request->petugas,
                'no_buku' => $request->no_buku,
                'no_boks' => $request->no_boks,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket,
                'lampiran' => ""
            ]);
        }

        $this->_validation($request);

        return redirect()->route('arsip')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_arsip')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}

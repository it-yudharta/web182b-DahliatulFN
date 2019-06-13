<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = peserta::paginate(10);
        return view('peserta.index',['pesertas' =>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item= new Peserta;
        $item->nama=$request['nama'];
        $item->jurusan=$request['jurusan'];
        $item->alamat=$request['alamat'];
        $item->delegasi=$request['delegasi'];
        $item->save();

        return redirect()->back()->with('peserta', 'Data Berhasil Tersimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Peserta;
        $item->nama = $request['nama'];
        $item->jurusan = $request['jurusan'];
        $item->alamat = $request['alamat'];
        $item->delegasi = $request['delegasi'];
        $item->save();

        return redirect('peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        $item = Peserta::paginate(10);
        return view('peserta.show', ['pesertas' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Peserta::find($id);
    return view('peserta.edit',['pesertas' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = peserta::find($id);
        $item->nama = $request['nama'];
        $item->jurusan = $request['jurusan'];
        $item->alamat = $request['alamat'];
        $item->delegasi = $request['delegasi'];
        $item->update();

        return redirect('/peserta/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Peserta::where('id',$id);
        $item->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Panitia;
use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panitia = Panitia::paginate(10);

        return view('panitia.index', ['panitias' => $panitia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item= new Panitia;
        $item->nama=$request['nama'];
        $item->jabatan=$request['jabatan'];
        $item->no_hp=$request['no_hp'];
        $item->save();

        return redirect()->back()->with('panitia', 'Data Berhasil Tersimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Panitia;
        $item->nama = $request['nama'];
        $item->jabatan = $request['jabatan'];
        $item->no_hp = $request['no_hp'];
        $item->save();

        return redirect('panitia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panitia  $panitia
     * @return \Illuminate\Http\Response
     */
    public function show(Panitia $panitia)
    {
        $item = Panitia::paginate(10);
        return view('panitia.show', ['panitias' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panitia  $panitia
     * @return \Illuminate\Http\Response
     */
    public function edit(Panitia $panitia)
    {
        $item = Panitia::find($id);
    return view('panitia.edit',['panitias' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panitia  $panitia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panitia $panitia)
    {
        $item = panitia::find($id);
        $item->nama = $request['nama'];
        $item->jabatan = $request['jabatan'];
        $item->no_hp = $request['no_hp'];
        $item->update();

        return redirect('/panitia/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panitia  $panitia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panitia $panitia)
    {
        $item = Panitia::where('id',$id);
        $item->delete();

        return redirect()->back();
    }
}

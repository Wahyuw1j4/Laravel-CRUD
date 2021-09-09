<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = data::all();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        data::create(
            ['nama' => $request-> nama, 
            'alamat'=> $request-> alamat,
            'tgll' => $request->tgll]
        );
        return redirect('/')->with('success', 'Data dengan nama ' . $request->nama . " berhasil ditambahkan");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bawadata = data::find($id);
        return view('edit', compact('bawadata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data $data)
    {
        $datadikirim = ['nama' => $request-> nama, 
        'alamat'=> $request-> alamat,
        'tgll' => $request->tgll];
        data::where('id', $data->id)->update($datadikirim);
        return redirect('/data')->with('success', 'Data dengan nama ' . $request->nama . " berhasil di-update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data1 = data::find($id);
        $data1 -> delete();
        return redirect('/');
    }
}

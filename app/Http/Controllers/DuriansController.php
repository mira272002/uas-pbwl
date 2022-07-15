<?php

namespace App\Http\Controllers;

use App\Models\Durians;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DuriansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Durians::all();
        return view('durians.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('durians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_durian' => 'string',
            'harga_durian' => 'numeric',
            'ket_durian' => 'string',
        ]);

        Durians::create($validatedData);
        return redirect('/durians');
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
        $data = Durians::find($id);
        return view('durians.edit', compact('data'));
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
        $validatedData = $request->validate([
            'jenis_durian' => 'string',
            'harga_durian' => 'numeric',
            'ket_durian' => 'string',
        ]);

        $durian = Durians::find($id);
        $durian->jenis_durian = $request->input('jenis_durian');
        $durian->harga_durian = $request->input('harga_durian');
        $durian->ket_durian = $request->input('ket_durian');
        $durian->update($validatedData);
        return redirect('/durians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $durian = Durians::find($id);
        $durian->delete();
        return  redirect('/durians');
    }
}

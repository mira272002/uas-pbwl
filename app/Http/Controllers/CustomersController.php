<?php

namespace App\Http\Controllers;

use App\Models\Durians;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('customers')
            ->join('durians', 'durians.id_durian', '=', 'customers.durian_cust')
            ->orderBy('id_cust', 'ASC')
            ->get();

        return view('customers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $durians = Durians::all();
        return view('customers.create', compact('durians'));
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
            'nama_cust' => 'string',
            'durian_cust' => 'string',
            'pesanan_cust' => 'numeric',
        ]);

        Customers::create($validatedData);
        return redirect('/customers');
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
        $data = DB::table('customers')
            ->join('durians', 'durians.id_durian', '=', 'customers.durian_cust')
            ->where('id_cust', $id)
            ->get();
        $durians = Durians::all();
        return view('customers.edit', compact('data', 'durians'));
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
            'nama_cust' => 'string',
            'durian_cust' => 'string',
            'pesanan_cust' => 'numeric',
        ]);

        $cust = Customers::find($id);
        $cust->nama_cust = $request->input('nama_cust');
        $cust->durian_cust = $request->input('durian_cust');
        $cust->pesanan_cust = $request->input('pesanan_cust');

        $cust->update($validatedData);
        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cust = Customers::find($id);
        $cust->delete();

        return redirect('/customers');
    }
}

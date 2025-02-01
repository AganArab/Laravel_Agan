<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetching data dari tabel genres
        $casts = DB::table(table: 'casts')->get();
        // return ke view dan kirimkan data $casts
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:5',
            'age'  => 'required|min:2',
            'bio'  => 'required|string',
        ]);
        $query = DB::table('casts')->insert([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio'],
        ]);

        return redirect()->route('cast.index')->with(['success' => 'Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $casts = DB::table('casts')->where('id', $id)->first();
        return view('cast.update', compact('casts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //proses validation data input dari form
        $request->validate([
            'name'=> 'required|min:5',
            'bio'=> "required|string",
            'age'=> "required|min:2",
        ]);
        //query untuk update data
        $query = DB::table('casts')
        ->where('id',$id)
        ->update ([
            'name' => $request['name'],
            'bio' => $request['bio'],
            'age' => $request['age'],
        ]);
        return redirect()->route('cast.index')->with(['success'=> 'data berhasil ditambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('casts')->where('id',$id)->delete();
        return redirect()->route('cast.index')->with(['success' => 'Data berhasil dihapus']);
    }
};

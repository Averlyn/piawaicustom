<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penugasan;

class PenugasansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penugasan.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penugasan.add');
    }

    public function upload(Penugasan $penugasan)
    {
        return view('penugasan.upload', compact(['penugasan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'penugasan' => 'required',
            'pegawai' => 'required',
            'deadline' => 'required',
        ]);
        $data['confirmed'] = NULL;
        auth()->user()->penugasans()->create($data);
        return view('penugasan.index');
    }

    public function evidencestore(Request $request, Penugasan $penugasan)
    {
        $data = request()->validate([
            'file' => 'required|max:1999',
            'keterangan' => 'required',
        ]);
        $file = $request->file('file')->getClientOriginalName();
        $penugasan->penugasanevidences()->create(array_merge($data, ['file' => $file]));
        $path = $request->file('file')->storeAs('public/files/'.auth()->user()->id.'/penugasan', $file);
        
        return view('penugasan.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

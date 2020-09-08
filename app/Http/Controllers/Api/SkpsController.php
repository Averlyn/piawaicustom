<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skp;
use App\Http\Resources\Skp as SkpResource;
use App\Http\Requests;

class SkpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skps = SKP::paginate(15);
        return SkpResource::collection($skps);
    }

    /**
     * Store a newly created or update resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skp = new Skp;
        $skp->user_id = $request->input('user_id');
        $skp->iku = $request->input('iku');
        $skp->ta = $request->input('ta');
        $skp->tj = $request->input('tj');
        $skp->skj = $request->input('skj');
        $skp->jo = $request->input('jo');
        $skp->output = $request->input('output');
        $skp->waktu = $request->input('waktu');
        $skp->kategori = $request->input('kategori');
        
        // auth()->user()->skps()->create($skp);
        // Blog::create($data);
        // if($skp->create(array_merge($data, ['user_id' => $request->input('user_id')]))){
        //     return new SkpResource($skp);
        // }
        if($skp->save()){
            return new SkpResource($skp);
        }

    }

    public function update(Request $request)
    {
        
        $skp = Skp::findOrFail($request->input('id'));
        $skp->user_id = $request->input('user_id');
        $skp->iku = $request->input('iku');
        $skp->ta = $request->input('ta');
        $skp->tj = $request->input('tj');
        $skp->skj = $request->input('skj');
        $skp->jo = $request->input('jo');
        $skp->output = $request->input('output');
        $skp->waktu = $request->input('waktu');
        $skp->kategori = $request->input('kategori');
        
        // if($skp->update(array_merge($data, ['user_id' => $request->input('user_id')]))){
        //     return new SkpResource($skp);
        // }
        if($skp->save()){
            return new SkpResource($skp);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Skp $skp)
    {
        return new SkpResource($skp);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skp $skp)
    {
        if($skp->delete()){
            return new SkpResource($skp);
        }       
    }
}



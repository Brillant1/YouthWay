<?php

namespace App\Http\Controllers\Admin;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddTemoignageRequest;
use Illuminate\Support\Facades\Storage;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoignages=  Temoignage::all();
        return view('admin.Temoignages.index', compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Temoignages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddTemoignageRequest $request)
    {

        // $data = $request->validate();
        // dd($data);
        // $data['photo'] = Storage::disk('public')->put('photo_temoignages', $request->photo);
        // $temoignage = Temoignage::Create($data);
        // return back()->with('addedTemoignageMessage', 'Témoignage ajouté avec succès');


        $filename = Storage::disk('public')->put('photo_temoignages', $request->photo);
        $temoignagesInfo = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'photo' => $filename,
            'email' =>$request->email,
            'message' => $request->message
        ];

        if( Temoignage::Create($temoignagesInfo)){
            return back()->with('addedTemoignageMessage', 'Témoignage ajouté avec succès');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit(Temoignage $temoignage)
    {
        return view('admin.Temoignages.edit', compact('temoignage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        $filename = " ";
        if($request->hasFile('photo')){
            Storage::disk('public')->delete($temoignage->photo);
            $filename = Storage::disk('public')->put('photo_temoignages' ,$request->photo);
        }
        else{
            $filename = $temoignage->photo;
        }

        $temoignage->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'photo' => $filename,
            'message' => $request->message,
            'email' => $request->email
        ]);
        return redirect()->route('temoignages.index')->with('updateTemoignageMessage', "Témoignage mis à jour avec succès");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temoignage $temoignage)
    {
        $temoignage->delete();
        return back()->with('deleteTemoignageMessage', 'Témoignage supprimé avec succès');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Domaine;
use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('admin.actualites.listActualite', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domaines = Domaine::all();
        return view('admin.actualites.addActualite', compact('domaines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $filename = Storage::disk('public')->put('photo_actualites', $request->photo);

        $actualiteInfos = [
            'titre' => $request->titre,
            'description' => $request->description,
            'cout' => $request->cout,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'zone_intervention' => $request->zone_intervention,
            'photo' => $filename,
            'statut' => "nouveau",
            'domaine_id' => $request->domaine_id
        ];

        Actualite::create($actualiteInfos);
        return back()->with('addActualiteMessage', 'Actualité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        if($actualite->statut == "nouveau"){
            $actualite->statut = "en cours";
            $actualite->save();
            return back()->with("changeStateMessage", "Statut de l'activité changé");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        $domaines = Domaine::all();
        return view('admin.actualites.editActualite', compact('domaines','actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $actualite = Actualite::findOrFail($id);
        $filename = " ";

        if($request->hasFile('photo')){
            Storage::disk('public')->delete($actualite->photo);
            $filename = Storage::disk('public')->put('photo_patenaires' ,$request->photo);
        }

        else{
            $filename = $actualite->photo;
        }

        $actualite->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'cout' => $request->cout,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'photo' => $filename,
            'zone_intervention' => $request->zone_intervention,
            'domaine_id' => $request->domaine_id
        ]);

        return redirect()->route('actualites.index')->with("updateActualiteMessage", "L'actualité a été mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return back()->with("deleteActualiteMesage", "Actualité supprimée avec succès");
    }
}

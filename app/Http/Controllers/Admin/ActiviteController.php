<?php

namespace App\Http\Controllers\Admin;

use App\Models\Domaine;
use App\Models\Activite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::all();
        return view('admin.activites.listActivite', compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domaines = Domaine::all();
        return view('admin.activites.addActivite', compact('domaines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $activite = new Activite();

      
        $filename = Storage::disk('public')->put('photo_activites', $request->photo);


        $activite->titre = $request->titre;
        $activite->description = $request->description;
        $activite->date_debut = $request->date_debut;
        $activite->date_fin = $request->date_fin;
        $activite->photo = $filename;
        //$activite->zone_intervention = $request->zone_intervention;
        $activite->domaine_id = $request->domaine_id;
        $activite->save();








        return back()->with('addActiviteMessage', 'Activité ajoutée avec succès');

        // $filename = Storage::disk('public')->put('photo_activites', $request->photo);

        // $activitesInfos = [
        //     'titre' => $request->titre,
        //     'description' => $request->description,
        //     'date_debut' => $request->date_debut,
        //     'date_fin' => $request->date_fin,
        //     'photo' => $filename,
        //     'domaine_id' => $request->domaine_id
        // ];

        // Activite::create($activitesInfos);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        $domaines = Domaine::all();
        return view('admin.activites.editActivite', compact('activite','domaines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $activite = Activite::findOrFail($id);
        $filename = " ";

        if($request->hasFile('photo')){
            Storage::disk('public')->delete($activite->photo);
            $filename = Storage::disk('public')->put('photo_patenaires' ,$request->photo);
        }

        else{
            $filename = $activite->photo;
        }

        $activite->update([
            'titre' => $request->titre,
            'description' => $request->description,

            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'photo' => $filename,
            //'zone_intervention' => $request->zone_intervention,

            'domaine_id' => $request->domaine_id
        ]);

        return redirect()->route('activites.index')->with("updateActualiteMessage", "L'actualité a été mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        $activite->delete();
        return back()->with("deleteActiviteMesage", "Activité supprimée avec succès");
    }
}

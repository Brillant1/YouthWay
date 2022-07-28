<?php

namespace App\Http\Controllers\Admin;

use App\Models\Domaine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DomaineRequest;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domaines = Domaine::all();
        return view('admin.domaines.listDomaine', compact('domaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.domaines.addDomaine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domaineInfo = [
            'nom' => $request->nom,
            'description' => $request->description,
        ];
        Domaine::create($domaineInfo);

        return back()->with('addedDomaineMessage', 'Domaine ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function show(Domaine $domaine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function edit(Domaine $domaine)
    {
        return view('admin.domaines.editDomaine', compact('domaine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domaine $domaine)
    {
        $domaine->update([
            'nom' => $request->nom,
            'description' => $request->description
        ]);

        return redirect()->route('domaines.index')->with("updateDomaineMessage", "Domaine modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domaine  $domaine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domaine $domaine)
    {
        $domaine->delete();
        return back()->with("deleteDomaineMessage", "Le domaine a été supprimé avec succès");
    }
}

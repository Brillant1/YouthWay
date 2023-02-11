<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PartenaireRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partner::all();
       
        return view('admin.partenaires.listPartenaire', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partenaires.addPartenaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {

        $filename = Storage::disk('public')->put('photo_partenaires', $request->photo);
        $partenaireInfo = [
            'nom' => $request->nom,
            'lien' => $request->lien,
            'photo' => $filename,
            'description' => $request->description,
            'contact' =>$request->contact,
            'email' => $request->email
        ];

        Partner::create($partenaireInfo);
        return back()->with('addedPartenaireMessage', 'Partenaire ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partenaire = Partner::findOrFail($id);
        return view('admin.partenaires.editPartenaire', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partenaire = Partner::findOrFail($id);
        $filename = " ";
        if($request->hasFile('photo')){
            Storage::disk('public')->delete($partenaire->photo);
            $filename = Storage::disk('public')->put('photo_patenaires' ,$request->photo);
        }
        else{
            $filename = $partenaire->photo;
        }

        $partenaire->update([
            'nom' => $request->nom,
            'lien' => $request->lien,
            'photo' => $filename,
            'description' => $request->description,
            'contact' =>$request->contact,
            'email' => $request->email
        ]);
        return redirect()->route('partenaires.index')->with('updatePartenaireMessage', "Information du partenaire mises à jour avec succès");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return back()->with("deletePartenaireMessage", "Le partenaire a été supprimé avec succès");
    }
}

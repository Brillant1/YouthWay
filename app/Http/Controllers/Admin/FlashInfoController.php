<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FlashInfo;
use Illuminate\Http\Request;

class FlashInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flashInfos = FlashInfo::all();

        return view('admin.flashInfo.listFlash', compact('flashInfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flashInfo.addFlash');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flashInfo = new FlashInfo();
        $flashInfo->date_debut = $request->date_debut;
        $flashInfo->date_fin = $request->date_fin;
        $flashInfo->etat = "inactive";
        $flashInfo->info = $request->info;

        $flashInfo->save();

        return back()->with('addFlashMessage', 'Le flash info a été enrégistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlashInfo  $flashInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flash_info = FlashInfo::find($id);
        if($flash_info->etat == "active"){

            $flash_info->etat = "inactive";
            $flash_info->save();
            return back()->with("changeStatutMessage","Le flash info a été désactivé avec succès");
        }

        if($flash_info->etat == "inactive"){

            if(FlashInfo::where("etat","active")->exists()){
                $flash_active = FlashInfo::where("etat","active")->first();
                $flash_active->etat = "inactive";
                $flash_active->save();
            }
            $flash_info->etat = "active";
            $flash_info->save();
            return back()->with("changeStatutMessage","Le flash info a été activé avec succès");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlashInfo  $flashInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flash_info = FlashInfo::find($id);
        return view('admin.flashInfo.editFlash')->with('flash_info', $flash_info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlashInfo  $flashInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $upadted_flash = FlashInfo::find($id);
        $upadted_flash->date_debut = $request->date_debut;
        $upadted_flash->date_fin = $request->date_fin;
        $upadted_flash->info = $request->info;
        $upadted_flash->save();

        return redirect()->route('flashInfos.index')->with('editFlashMessage', 'Le flash info a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlashInfo  $flashInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FlashInfo::destroy($id);
        return back()->with('deletedFlashMessage', 'Le flash info a été suprimé avec succès');
    }
}

<?php

namespace App\Http\Controllers\Guest;



use Share;
use App\Models\Domaine;
use App\Models\Activite;
use App\Models\Actualite;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;

class GuestController extends Controller
{
    public function displayAllActualites(){
        $actualites = Actualite::all();
        return view('actualite', compact('actualites'));
    }

    public function getAllDomaines(){

        $domaines = Domaine::all();
        return view('activiteDomaine', compact('domaines'));
    }

    public function getAllActivites(){
        $activites = Activite::all();
        return view('activite', compact('activites'));
    }

    public function showActualiteDetail($id){

        $shareOnMedia = Share::page(
            'https://makitweb.com/datatables-ajax-pagination-with-search-and-sort-in-laravel-8/',
            'Datatable nice'
        )
      ->facebook();
        $actualites = Actualite::all()->take(5);
        $actualite = Actualite::findOrFail($id);
        return view('detail-actualite', compact('actualite','actualites', 'shareOnMedia'));
    }

    public function showActiviteDetail($id){
        $activite =Activite::findOrFail($id);
        return view('detail-activite', compact('activite'));
    }

    public function showHomePage(){

        $actualites = Actualite::all()->take(3);
        $activites = Activite::all()->take(3);
        $temoignages = Temoignage::all();
        $partners = Partner::all();
        return view('accueil', compact('actualites','activites','temoignages','partners'));
    }

    public function don(){
        return view('don');
    }
}



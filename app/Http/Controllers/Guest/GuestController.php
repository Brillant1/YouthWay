<?php

namespace App\Http\Controllers\Guest;



use App\Models\Domaine;
use App\Models\Activite;
use Share;
use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


        $actualites = Actualite::all()->take(4);
        $actualite = Actualite::findOrFail($id);
        return view('detail-actualite', compact('actualite','actualites', 'shareOnMedia'));
    }

    public function showHomePage(){
        $actualites = Actualite::all()->take(3);
        return view('accueil', compact('actualites'));
    }
}



<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\donation;
use CreateDonationsTable;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donations/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donations/donate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'cause'=>'required',
            'montant'=>'required',],
            ['required'=>'veuillez remplir votre :attribute !!! '
        ]);
        $donate = new donation();
        $donate->nom = $request->nom;
        $donate->prenom = $request->prenom;
        $donate->email = $request->email;
        $donate->cause = $request->cause;
        $donate->montant = $request->montant;
        $rs = $donate->save(); 
        if ($rs == true) {
            return redirect()->back()->with('success','we are so glade for your support .');
        }else {
            return redirect()->back()->with('failed','form not created .');
        }
        
    }

}

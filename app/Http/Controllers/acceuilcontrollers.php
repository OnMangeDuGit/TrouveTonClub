<?php

namespace App\Http\Controllers;


use App\Models\acceuil;
use App\Http\Requests\acceuilrequest;
use App\Models\{
    club,
};
class acceuilcontrollers extends Controller
{
    public function index (): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        return view('acceuil');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(acceuilrequest $request, acceuil $acceuil): \Illuminate\Http\Response
    {
        $acceuil->nom_club=$request->nom_club;
        $acceuil->email_club=$request->email_club;
        $acceuil->mdp_club=$request->mdp_club;
        $acceuil->effectif=$request->effectif;
        $acceuil->annonce_publie=$request->annonce_publie;
        $acceuil->save();
        return redirect()->route('acceuil.acceuil');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('connexion');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation): \Illuminate\Http\Response
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormationRequest $request, Formation $formation): \Illuminate\Http\Response
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation) {

    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use App\Models\acceuil;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    protected $redirectTo = '/connexion';
    public function index (): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('connexion');
    }
    public function username(): string
    {
        return 'email_connexion';
    }

    public function traitement(ConnexionRequest $request){

        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    public function redirectPath(){
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }
        return property_exists($this, 'redirectTo') ? $this->redirectTo : 'connexion';
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/');
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

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

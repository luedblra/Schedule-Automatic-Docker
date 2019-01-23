<?php

namespace App\Http\Controllers;

use App\Carrier;
use App\Oauthclient;
use App\Credentialapi;
use Illuminate\Http\Request;

class CredentialApiController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {

      $credentials = Credentialapi::with('carrier')->get();
      //dd($credentials);
      return view('Credentialsapi.index',compact('credentials'));
   }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
   {
      $oauths = Oauthclient::all();
      return view('Credentialsapi.create',compact('oauths'));
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
      //
   }

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
   {
      //
   }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
   {
      $carriers = Carrier::all()->pluck('name','id');
      $credential = Credentialapi::find($id);
      //dd($credential);
      return view('Credentialsapi.BodysLoad.edit',compact('credential','carriers'));
   }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
   {
      $credential = Credentialapi::find($id);
      //dd($request->toArray());
      $credential->auth_post     = $request->auth_post;
      $credential->client_id     = $request->client_id;
      $credential->client_secret = $request->client_secret;
      $credential->user_name     = $request->user_name;
      $credential->password      = $request->password;
      $credential->url           = $request->url;
      $credential->carrier_id    = $request->carrier_id;
      $credential->description   = $request->description;
      $credential->update();

      return redirect()->route('Credential.index')->with('success','Credential Updated');
   }

   public function eliminar($id)
   {
      try{
         $oauthclient = OauthClient::find($id);
         $oauthclient->delete();
         return 1;
      }catch(\Exception $e){
         return 2;
      }

   }

   public function destroy($id)
   {
      //
   }
}

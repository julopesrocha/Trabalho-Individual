<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
  public function createSerie(Request $request)
  {
    $serie = new Serie;

    $serie->name = $request->name;
    $serie->email = $request->email;
    $serie->password = $request->password;
    $serie->platform = $request->platform;
    $serie->description = $request->description;

    return response()->json([$serie]);

      //
  }

  public function listSerie(){
    $serie = Serie::all();
    return response()->json($serie);

  }

  public function showSerie($id){

    $serie = Serie::find0rFail($id);
    return response()->([$serie]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function updateSerie(Request $request, $id)
  {
    $serie = Serie::find($id);

    if($serie){
      if($request->name){
        $serie->name = $request->name;
      }
    if($serie){
      if($request->email){
        $serie->email = $request->email;
      }
    if($serie){
      if($request->password){
        $serie->password = $request->password;
      }
    if($serie){
      if($request->platform){
        $serie->platform = $request->platform;
      }
    if($serie){
      if($request->description){
        $serie->description = $request->description;
      }

    $serie->save();
    return response()->json([$serie]);
  }




    }
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function deleteserie($id)
  {
    serie::destroy($id);
    return response()->json(['Usuário deletado'])
      //
  }
}

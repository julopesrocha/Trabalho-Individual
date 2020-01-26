<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    {
      $user = new User;

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->platform = $request->platform;
      $user->description = $request->description;

      return response()->json([$user]);

        //
    }

    public function listUser(){
      $user = User::all();
      return response()->json($user);

    }

    public function showUser($id){

      $user = User::find0rFail($id);
      return response()->([$user]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
      $user = User::find($id);

      if($user){
        if($request->name){
          $user->name = $request->name;
        }
      if($user){
        if($request->email){
          $user->email = $request->email;
        }
      if($user){
        if($request->password){
          $user->password = $request->password;
        }
      if($user){
        if($request->platform){
          $user->platform = $request->platform;
        }
      if($user){
        if($request->description){
          $user->description = $request->description;
        }
      $user->save();
      return response()->json([$user]);
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
    public function deleteUser($id)
    {
      User::destroy($id);
      return response()->json(['Usuário deletado'])
        //
    }
}

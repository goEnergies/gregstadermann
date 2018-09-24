<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		  return response(Client::all()->jsonSerialize(), Response::HTTP_OK);
	}
	public function show($id)
    {
        return view('client.profile', ['client' => Client::findOrFail($id)]);
    }
}

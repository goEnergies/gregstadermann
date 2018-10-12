<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listClient = Client::all();
        return $listClient;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      *
      * @SWG\Post(
      *     path="/api/clients",
      *     tags={"Clients"},
      *     summary="Create Client",
      *     @SWG\Parameter(
      *         name="body",
      *         in="body",
      *         required=true,
      *         @SWG\Schema(ref="#/definitions/Client"),
      *         description="Json format",
      *     ),
      *     @SWG\Response(
      *          response=201,
      *          description="Success: A Newly Created Client",
      *          @SWG\Schema(ref="#/definitions/Client")
      *      ),
      *     @SWG\Response(
      *          response=401,
      *          description="Refused: Unauthenticated"
      *     ),
      *     @SWG\Response(
      *          response="422",
      *          description="Missing mandatory field"
      *     ),
      *     @SWG\Response(
      *          response="404",
      *          description="Not Found"
      *     ),
      *     @SWG\Response(
      * 			response="405",
      * 			description="Invalid HTTP Method"
      *      ),
      *      security={
      *          { "api_key":{} }
      * 		}
      * ),
      */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'street_address' => 'required',
            'city'=> 'required',
            'state'=> 'required',
            'zip' => 'required',
            'tax_payer_id' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Creating a record in a different way
        $createClient = Client::create([
            'name' => $request->name,
            'legal_name' => $request->leagl_name,
            'description' => $request->description,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'tax_exempt_federal' => $request->tax_exempt_federal,
            'tax_exempt_state' => $request->tax_exempt_state,
            'tax_exempt_county' => $request->tax_exempt_county,
            'tax_payer_id' => $request->tax_payer_id,


        ]);

        return new ClientsResource($createClient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showClientById = Client::with('Site')->findOrFail($id);
        return $showClientById;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        /**
         * if ($request->user()->id !== $client->user_id) {
         * return response()->json(['error' => 'You can only edit your own client.'], 403);
         * }
         */

        $client->update($request->only(['name']));

        return new ClientsResource($client);
        $updateClientById = Client::findOrFail($id);
        $updateClientById->update($request->all());
        return $updateClientById;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteClientById = Client::find($id)->delete();
        return response()->json([], 204);
    }
}

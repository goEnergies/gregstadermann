<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use Validator;
use App\Http\Resources\ClientsResource;

class ClientController extends Controller
{

    /**
     * Protect update and delete methods, only for authenticated users.
     *
     * @return Unauthorized
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @SWG\Get(
     *     path="/api/clients",
     *     tags={"Clients"},
     *     summary="List Clients",
     *     @SWG\Response(
     *          response=200,
     *          description="Success: List all Clients",
     *          @SWG\Schema(ref="#/definitions/Client")
     *      ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *     ),
     *     @SWG\Response(
	 * 			response="405",
	 * 			description="Invalid HTTP Method"
	 *      )
     * ),
     */
    public function index()
    {
        $listClients = Client::all();
        return $listClients;
        // Using Paginate method We explain this later in the book
        // return ClientsResource::collection(Client::with('ratings')->paginate(10));
    }

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
     * 			name="body",
     * 			in="body",
     * 			required=true,
     * 			@SWG\Schema(ref="#/definitions/Client"),
     * 			description="Json format",
     * 		),
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
	 * 		   { "api_key":{} }
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
     *
     * @SWG\Get(
     *     path="/api/clients/{id}",
     *     tags={"Clients"},
     *     summary="Get Client by Id",
     *     @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          type="integer",
     *          description="Display the specified client by id.",
     * 		),
     *     @SWG\Response(
     *          response=200,
     *          description="Success: Return the Client",
     *          @SWG\Schema(ref="#/definitions/Client")
     *      ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *     ),
     *     @SWG\Response(
	 * 			response="405",
	 * 			description="Invalid HTTP Method"
	 *     ),
     *     security={
     * 		  { "api_key":{} }
     * 	   }
     * ),
     */
    public function show(Client $client)
    {
        return new ClientsResource($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * @SWG\Put(
     *     path="/api/clients/{id}",
     *     tags={"Clients"},
     *     summary="Update Client",
     *     @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          required=true,
     *          type="integer",
     *          description="Update the specified client by id.",
     * 		),
     *     @SWG\Parameter(
     * 			name="body",
     * 			in="body",
     * 			required=true,
     * 			@SWG\Schema(ref="#/definitions/Client"),
     * 			description="Json format",
     * 		),
     *     @SWG\Response(
     *          response=200,
     *          description="Success: Return the Client updated",
     *          @SWG\Schema(ref="#/definitions/Client")
     *      ),
     *     @SWG\Response(
     *          response="422",
     *          description="Missing mandatory field"
     *     ),
     *     @SWG\Response(
     *          response="404",
     *          description="Not Found"
     *     ),
     *     @SWG\Response(
	 * 			response="403",
	 * 			description="Forbidden"
	 *     ),
     *     @SWG\Response(
	 * 			response="405",
	 * 			description="Invalid HTTP Method"
	 *      ),
	 *      security={
	 * 		   { "api_key":{} }
	 * 		}
     * ),
     */
    public function update(Request $request, Client $client)
    {
        // check if currently authenticated user is the client owner
     //   if ($request->user()->id !== $client->user_id) {
       //     return response()->json(['error' => 'You can only edit your own client.'], 403);
        //}

        $client->update($request->only(['name', 'legal_name',  'description','street_address','city','state','zip','tax_exempt_federal','tax_exempt_state','tax_exempt_county','tax_payer_id' ]));


        return new ClientsResource($client);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     *     @SWG\Delete(
     *     path="/api/clients/{id}",
     *     tags={"Clients"},
     *     summary="Delete client",
     *     description="Delete the specified client by id",
     *     @SWG\Parameter(
     *         description="Client id to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Not found"
     *     ),
     *     @SWG\Response(
     *         response=204,
     *         description="Success: successful deleted"
     *     ),
     *     @SWG\Response(
	 * 			response="405",
	 * 			description="Invalid HTTP Method"
	 *      ),
	 *      security={
	 * 		   { "api_key":{} }
	 * 		}
     * )
     */
    public function destroy($id)
    {
        $deleteClientById = Client::findOrFail($id)->delete();
        return response()->json([], 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    
	#/clients all clients
    public function index(){
    	$clients = Client::all();
    	return view('clients.index', compact('clients'));
    }
    #/clients/client id
    public function show($id){
    	$client = Client::findOrFail($id);
    	return view('clients.show', compact('client'));
    }
    #/clients/create create a new client
    public function create(){
        return view('clients.create');
    }
    #/clients/store save new client
    public function store(ClientRequest $request){
        Client::create($request->all());
        return redirect('clients');
    }
    #clients/client id/edit 
    public function edit($id){
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    #clients update method
    public function update($id, ClientRequest $request){
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return redirect('clients');
    }
}

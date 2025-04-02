<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Visit;

class ClientsController extends Controller
{
    // SHOW DATA
    public function showClients()
    {
        $clients = Client::all();
        $visits = Visit::all();

        return view('tcl', compact('clients', 'visits'));
    }

    // =================CREATE DATA=================================
    public function store()
    {

        return view('client-add');
    }

    public function storeOnce(Request $request)
    {
            
            $request->validate(['ChildCode' =>'required|unique:clients|max:255'
            ]);
    
            $client = new Client();
            $client->ChildCode = $request->ChildCode;
            $client->FirstName = $request->FirstName;
            $client->MiddleName = $request->MiddleName;
            $client->LastName = $request->LastName;
            $client->BirthDate = $request->BirthDate;
            $client->BirthPlace = $request->BirthPlace;
            $client->BirthFacility = $request->BirthFacility;
            $client->MotherMaidenName = $request->MotherMaidenName;
            $client->FatherName = $request->FatherName;
            $client->Street = $request->Street;
            $client->Purok = $request->Purok;
            $client->Barangay = $request->Barangay;
            $client->Municipality = $request->Municipality;
            $client->Province = $request->Province;
            $client->save();
    
            return redirect('/tcl/all')->with('message','Your record '.$request->ChildCode.' was added!');

        
    }

     // =================UPDATE DATA=================================

      //RETRIEVE DATA
    public function edit($id)
    {
        $client = CLient::findOrFail($id);
        return view('client-edit', compact('client'));
    }

     public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->ChildCode = $request->input('ChildCode');
        $client->FirstName = $request->input('FirstName');
        $client->MiddleName = $request->input('MiddleName');
        $client->LastName = $request->input('LastName');
        $client->BirthDate = $request->input('BirthDate');
        $client->BirthPlace = $request->input('BirthPlace');
        $client->BirthFacility = $request->input('BirthFacility');
        $client->MotherMaidenName = $request->input('MotherMaidenName');
        $client->FatherName = $request->input('FatherName');
        $client->Street = $request->input('Street');
        $client->Purok = $request->input('Purok');
        $client->Barangay = $request->input('Barangay');
        $client->Municipality = $request->input('Municipality');
        $client->Province = $request->input('Province');
        $client->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }
    //================= DESTROY DATA =================
    public function destroy($id)
    {
        $client = Client::findOrFail($id); // Find product
        $client->delete(); // Delete product

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }

   
}

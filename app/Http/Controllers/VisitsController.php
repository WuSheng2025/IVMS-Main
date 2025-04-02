<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Visit;

class VisitsController extends Controller
{
    // SHOW DATA
    public function showVisits(Request $request)
    {
     
        $visits = Visit::all();

        return view('visit', compact('visits'));
    }


    // =================CREATE DATA=================================
    public function create()
    {

        return view('visit-add');
    }
    public function storeVisit(Request $request)
    {
            
            $request->validate(['ChildCode' =>'required|exists:clients,ChildCode'
            
            ]);
    
            $visit = new Visit();
            $visit->VisitID =strtoupper(uniqid());;
            $visit->VisitDate = $request->VisitDate;
            $visit->VisitFacility = "RHU";
            $visit->AttendingPersonnel = "Nurse";
            $visit->ChildCode = $request->ChildCode;
            $visit->Weight = $request->Weight;
            $visit->Height = $request->Height;
            $visit->save();
    
            try {
                $visit->save();
                return redirect('/visit/all')->with('message', 'Visit of '.$request->ChildCode.' was recorded successfully!');
            } catch (\Exception $e) {
                // Handle any errors that may occur during the save process
                return back()->with('error', 'An error occurred while recording the visit: '.$e->getMessage());
            }
    }

     // =================UPDATE DATA=================================

      //RETRIEVE DATA
    public function edit($id)
    {
        $visit = Visit::findOrFail($id);
        return view('visit-edit', compact('visit'));
    }

     public function update(Request $request, $id)
    {
        $visit = Visit::findOrFail($id);
        $visit->VisitID = $request->input('VisitID');
        $visit->VisitDate = $request->input('VisitDate');
        $visit->VisitFacility = $request->input('VisitFacility');
        $visit->AttendingPersonnel = $request->input('AttendingPersonnel');
        $visit->ChildCode = $request->input('ChildCode');
        $visit->Weight = $request->input('Weight');
        $visit->Height = $request->input('Height');
        $visit->Age = $request->input('Age');
        $visit->save();

        return redirect()->back()->with('success', 'Vist updated successfully!');
    }
    //================= DESTROY DATA =================
    public function destroy($id)
    {
        $visit = Visit::findOrFail($id); // Find product
        $visit->delete(); // Delete product

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }

   
}

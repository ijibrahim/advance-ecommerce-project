<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use Carbon\Carbon;

class ShippingAreaController extends Controller
{
    public function DivisionView(){
    	$division = ShipDivision::orderBy('id','DESC')->get();
    	return view('backend.ship.division.division_view',compact('division'));

    }

    public function DivisionStore(Request $request){

    	$request->validate([
            'division_name' => 'required',

        ]);

        

        ShipDivision::insert([
            'division_name' => ucfirst($request->division_name),
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Division Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

     public function DivisionEdit($id){
    	$division = ShipDivision::findOrFail($id);
        return view('backend.ship.division.division_edit', compact('division'));
    }


    public function DivisionUpdate(Request $request, $id){

    	ShipDivision::findOrFail($id)->update([
            'division_name' =>  ucfirst($request->division_name),
            'updated_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Division Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-division')->with($notification);

    } // End method Update

    public function DivisionDelete($id){
    	ShipDivision::findOrFail($id)->delete();
    	 $notification = array(
            'message' => 'Division Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

    }
}

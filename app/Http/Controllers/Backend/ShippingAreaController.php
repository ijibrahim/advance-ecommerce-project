<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;
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
            'division_name' => ucwords($request->division_name),
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Division Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

     public function DivisionEdit($id){
    	$division = ShipDivision::findOrFail($id);
        return view('backend.ship.division.division_edit', compact('division'));
    }


    public function DivisionUpdate(Request $request, $id){

    	ShipDivision::findOrFail($id)->update([
            'division_name' =>  ucwords($request->division_name),
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

    } // end method Division Delete


//==================================== District ======================================

    public function DistrictView(){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::with('division')->orderBy('id','DESC')->get();
            return view('backend.ship.district.district_view',compact('divisions','district'));

    } // end method District View

    public function DistrictStore(Request $request){
        $request->validate([
            'division_id' => 'required',
            'district_name' => 'required',

        ]);

        

        ShipDistrict::insert([
            'division_id' => $request->division_id,
            'district_name' => ucwords($request->district_name),
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'District Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DistrictEdit($id){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::findOrFail($id);
        return view('backend.ship.district.district_edit', compact('district','divisions'));
    } // end method

    public function DistrictUpdate(Request $request, $id){

        ShipDistrict::findOrFail($id)->update([

            'division_id' => $request->division_id,
            'district_name' =>  ucwords($request->district_name),
            'updated_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'District Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-district')->with($notification);

    } // end method

    public function DistrictDelete($id) {
        ShipDistrict::findOrFail($id)->delete();
             $notification = array(
                'message' => 'District Delete Successfully',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);

    }

//====================================== Ship District End =================================================//



//====================================== Ship State Started =================================================//

    public function StateView(){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $districts = ShipDistrict::orderBy('district_name','ASC')->get();
        $state = ShipState::with('division','district')->orderBy('id','DESC')->get();
            return view('backend.ship.state.state_view',compact('divisions','districts','state'));
    }

    public function GetDistrict($division_id){
        $districts = ShipDistrict::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
        return json_encode($districts);
    } // end method


    public function StateStore(Request $request){
        $request->validate([
            'division_id' => 'required',
            'district_id' => 'required',
            'state_name' => 'required',

        ]);

        

        ShipState::insert([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => ucwords($request->state_name),
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'State Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }   // end method

    public function StateEdit($id){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $districts = ShipDistrict::orderBy('district_name','ASC')->get();
        $state = ShipState::findOrFail($id);
        return view('backend.ship.state.state_edit', compact('districts','divisions','state'));
    } // end method

    public function StateUpdate(Request $request,$id){

        ShipState::findOrFail($id)->update([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name' => ucwords($request->state_name),
            'updated_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'State Update Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-state')->with($notification);
    }

    public function StateDelete($id){
        ShipState::findOrFail($id)->delete();

        $notification = array(
            'message' => 'State Delete Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
 
    }

}

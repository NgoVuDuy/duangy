<?php

namespace App\Http\Controllers;

use App\Models\PickupDropoffPoint;
use Illuminate\Http\Request;

class PickupDropoffPointController extends Controller
{
    //
    public function index() {
        
    }
    public function show($id) {
        
        $rs = PickupDropoffPoint::find($id);

        if($rs) {

            return response()->json($rs);
        }
    }
}

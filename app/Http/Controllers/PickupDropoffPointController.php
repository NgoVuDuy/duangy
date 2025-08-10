<?php

namespace App\Http\Controllers;

use App\Models\PickupDropoffPoint;
use Illuminate\Http\Request;

class PickupDropoffPointController extends Controller
{
    //
    public function index($type)
    {

        if ($type ==  "all") {

            $rs = PickupDropoffPoint::orderBy('created_at', 'desc')->get();
        } else {
            $rs = PickupDropoffPoint::where('type', $type)->orderBy('created_at', 'desc')->get();
        }
        if ($rs) {

            return response()->json($rs);
        }
    }
    public function show($id)
    {

        $rs = PickupDropoffPoint::find($id);

        if ($rs) {

            return response()->json($rs);
        }
    }
    public function store($name, $address, $time, $type)
    {

        $rs = PickupDropoffPoint::create([
            'name' => $name,
            'address' => $address,
            'time' => $time,
            'type' => $type,
            'longitude' => '0',
            'latitude' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($rs) {

            return response()->json([
                'code' => 1,
                'message' => 'Pickup/Dropoff point created successfully.',
                'data' => $rs
            ]);
        }
    }

    public function setNullTripId($id)
    {
        PickupDropoffPoint::where('trip_id', $id)->update(['trip_id' => null]);
    }



    public function updateTripId($id, $trip_id)
    {

        $rs = PickupDropoffPoint::find($id);

        if ($rs) {
            $rs->trip_id = $trip_id;
            $rs->save();

            return response()->json([
                'code' => 1,
                'message' => 'Pickup/Dropoff point updated successfully.',
                'data' => $rs
            ]);
        }
    }

    public function update($id, $name, $address, $time, $type)
    {

        $rs = PickupDropoffPoint::find($id);

        if ($rs) {
            $rs->name = $name;
            $rs->address = $address;
            $rs->time = $time;
            $rs->type = $type;
            $rs->save();

            return response()->json([
                'code' => 1,
                'message' => 'Pickup/Dropoff point updated successfully.',
                'data' => $rs
            ]);
        }
    }

    public function destroy($id)
    {

        $rs = PickupDropoffPoint::find($id);

        if ($rs) {
            $rs->delete();

            return response()->json([
                'code' => 1,
                'message' => 'Pickup/Dropoff point deleted successfully.'
            ]);
        } else {
            return response()->json([
                'code' => 0,
                'message' => 'Pickup/Dropoff point not found.'
            ]);
        }
    }
}

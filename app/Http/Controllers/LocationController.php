<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locationModel = new Location();
        $alllocations = $locationModel::all();
        return view('locations.index')->with('locations' , $alllocations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'locationName' => 'bail||required|min:2|max:255',
            'location' => 'required|min:1|max:128',
            'city' => 'required|min:2|max:128',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()) {
            return redirect('locations/create')->WithErrors($validator);
        } else {
            $location = new Location([
                'locationName' => $request->get('locationName'),
                'location' => $request->get('location'),
                'city' => $request->get('city'),
            ]);

            $location->save();
            return redirect('locations');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::find($id);

        return view('locations.show',compact('location', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);

        return view('locations.edit',compact('location', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::find($id);
        $location->locationName = $request->get('locationName');
        $location->location = $request->get('location');
        $location->city = $request->get('city');
        $location->save();
        return redirect('/locations')->with('success', 'Successfully completed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();

        return redirect('locations')->with('success','Location has been deleted!');
    }
}

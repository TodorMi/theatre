<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Theatre;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theatreModel = new Theatre();
        $alltheatres = $theatreModel::all();
        return view('theatres.index')->with('theatres' , $alltheatres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theatres.create');
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
            'theatreName' => 'bail||required|min:2|max:255',
            'conDate' => 'required',
            'location' => 'required|min:1|max:128',
            'ticketType' => 'required|min:2|max:128',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()) {
            return redirect('theatres/create')->WithErrors($validator);
        } else {
            $theatre = new Theatre([
                'theatreName' => $request->get('theatreName'),
                'conDate' => $request->get('conDate'),
                'location' => $request->get('location'),
                'ticketType' => $request->get('ticketType'),
            ]);

            $theatre->save();
            return redirect('theatres');
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
        $theatre = Theatre::find($id);

        return view('theatres.show',compact('theatre', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theatre = Theatre::find($id);
        return view('theatres.edit', compact('theatre','id'));
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
        $theatre = Theatre::find($id);
        $theatre->theatreName = $request->get('theatreName');
        $theatre->conDate = $request->get('conDate');
        $theatre->location = $request->get('location');
        $theatre->ticketType = $request->get('ticketType');
        $theatre->save();
        return redirect('/theatres')->with('success', 'Successfully completed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theatre = Theatre::find($id);
        $theatre->delete();

        return redirect('theatres')->with('success','Theatre has been deleted!');
    }
}

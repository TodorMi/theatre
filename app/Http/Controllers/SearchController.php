<?php
namespace App\Http\Controllers;
use App\Location;
use Illuminate\Http\Request;
use App\Theatre;
use Illuminate\Support\Facades\Input;
class SearchController extends Controller
{
    public function searchTheatres(){
        $search = Input::get ( 'search' );
        $theatre = Theatre::where('theatreName','LIKE','%'.$search.'%')->orWhere('location','LIKE','%'.$search.'%')->orWhere('conDate','LIKE','%'.$search.'%')->get();
        if(count($theatre) > 0)
            return view('theatres.search')->withDetails($theatre)->withQuery ( $search );
        else return view('theatres.search')->withMessage('No theatres found. Try again!');
    }

    public function searchLocations() {
        $search = Input::get('search');
        $location = Location::where('locationName', 'LIKE','%'.$search.'%')->orWhere('city','LIKE','%'.$search.'%')->get();
        if(count($location) > 0)
            return view('locations.search')->withDetails($location)->withQuery ( $search );
        else return view('locations.search')->withMessage('No locations found. Try again!');
    }
}

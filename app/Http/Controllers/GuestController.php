<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Unit;

class GuestController extends Controller
{
    public function index()
    {
        $data_lokasi = Unit::select('lokasi')->distinct()->whereNotNull('lokasi')->get();
        $data_tipe_properti = Unit::select('tipe_properti')->distinct()->whereNotNull('tipe_properti')->get();
        $data_unit = Unit::paginate(3);
        return view('welcome', compact('data_unit', 'data_lokasi', 'data_tipe_properti'));
    }
    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }

    public function newsDetail()
    {
        return view('news-details');
    }

    public function complaint()
    {
        return view('complaint');
    }

    public function unitDetail($id)
    {
        $data_unit = Unit::find($id);
        return view('unit-details', compact('data_unit'));
    }
    public function unit()
    {
        $data_unit = unit::all();
        $data_lokasi = Unit::select('lokasi')->distinct()->whereNotNull('lokasi')->get();
        $data_tipe_properti = Unit::select('tipe_properti')->distinct()->whereNotNull('tipe_properti')->get();
        return view('unit', compact('data_unit', 'data_lokasi', 'data_tipe_properti'));
    }
    
    public function projectDetail()
    {
        return view('project-details');
    }

    public function searchData(Request $request)
    {
        $searchText = $request->search;
        $searchLoc = $request->searchloc;
        $searchType = $request->searchtype;
        // dd($searchType); 
        if($searchText != NULL && $searchLoc != NULL && $searchType != NULL)
        {
            // dd("$searchLoc"); 
            $data_unit = Unit::where('proyek','LIKE',"%$searchText%")->where('lokasi','=',"$searchLoc")->where('tipe_properti','=',"$searchType")->get();
        }
        elseif($searchText != NULL && $searchLoc != NULL)
        {
            // dd("$searchLoc"); 
            $data_unit = Unit::where('proyek','LIKE',"%$searchText%")->where('lokasi','=',"$searchLoc")->get();
        }
        elseif($searchText != NULL && $searchType != NULL)
        {
            // dd("$searchLoc"); 
            $data_unit = Unit::where('proyek','LIKE',"%$searchText%")->where('tipe_properti','=',"$searchType")->get();
        }
        elseif($searchLoc != NULL && $searchType != NULL)
        {
            // dd("$searchLoc"); 
            $data_unit = Unit::where('lokasi','=',"$searchLoc")->where('tipe_properti','=',"$searchType")->get();
        }
        elseif($searchText != NULL)
        {
            // dd("dsad");
            $data_unit = Unit::where('proyek','LIKE',"%$searchText%")->get();
        }
        elseif($searchLoc != NULL)
        {
            // dd("dsad");
            $data_unit = Unit::where('lokasi','=',"$searchLoc")->get();
        }
        elseif($searchType != NULL)
        {
            // dd("dsad");
            $data_unit = Unit::where('tipe_properti','=',"$searchType")->get();
        }
        else
        {
            $data_unit = unit::all();
        }


        // $data_unit = Unit::where('proyek','LIKE',"%$searchText%")->where('lokasi','=',"$searchLoc")->get();
        $data_lokasi = Unit::select('lokasi')->distinct()->whereNotNull('lokasi')->get();
        $data_tipe_properti = Unit::select('tipe_properti')->distinct()->whereNotNull('tipe_properti')->get();
        // $data_lokasi = Unit::where('lokasi','=',"$searchLoc")->get();
        // $data_tipe_properti = Unit::where('tipe_properti','=',"$searchType")->get();

        return view('unit', compact('data_unit', 'data_lokasi', 'data_tipe_properti'));
    }
}

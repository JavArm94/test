<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;





class Select2SearchController extends Controller
{

    public function index()
    {
    	return view('searchSelect');
    }

    public function selectSearch(Request $request)
    {
    	$socios = [];

        if($request->has('q')){
            $search = $request->q;
            $socios =User::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($socios);
    }
}


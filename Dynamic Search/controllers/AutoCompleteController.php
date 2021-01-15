<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AutoCompleteController extends Controller
{
    public function index()
    {
        return view('search');
    }
 
    public function search(Request $request)
    {
          $search = $request->get('term');
      
          $result = User::where('name', 'LIKE', '%'. $search. '%')
          ->OrderBy('name','asc')->get();
 
          return response()->json($result);
            
    } 
}

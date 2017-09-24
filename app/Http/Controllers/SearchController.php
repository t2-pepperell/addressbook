<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class SearchController extends Controller
{
    public function search(Request $request){
       
        $filter = $request->input('search');
       
        $contacts =  Contact::orderBy('name','asc')->where('name', 'like', '%' . $filter . '%')->paginate(5);

        return view('contacts.index')->with('contacts', $contacts);

    }
}

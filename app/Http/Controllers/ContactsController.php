<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth',['except' => ['index','show']]);
     }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contacts =  Contact::orderBy('name','asc')->paginate(5);
        

        return view('contacts.index')->with('contacts', $contacts);
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            
        ]);

        $CompanyName = $request->input('company_name', false);
        $JobTitle = $request->input('job_title', false);
        $PhoneNumber = $request->input('phone_number', false);
        $MobileNumber = $request->input('mobile_number', false);
        $Notes = $request->input('notes', false);

           
        if($CompanyName == ''){
            $CompanyName = "N/A";
        }
        if($JobTitle == ''){
            $JobTitle = "N/A";
        }
        if($PhoneNumber == ''){
            $PhoneNumber = "N/A";
        }
        if($MobileNumber == ''){
            $MobileNumber = "N/A";
        }
        if($Notes == ''){
            $Notes = "-";
        }

        $contact = new Contact;
        $contact->title = $request->input('title');
        $contact->name = $request->input('name');
        $contact->company_name = $CompanyName;
        $contact->job_title = $JobTitle;
        $contact->email = $request->input('email');
        $contact->phone_number = $PhoneNumber;
        $contact->mobile_number = $MobileNumber;
        $contact->address = $request->input('address');
        $contact->notes = $Notes;
        $contact->user_id = auth()->user()->id;
        $contact->save();

        return redirect('/contacts')->with('success', 'Contact Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $contact = Contact::find($id);

        return view('contacts.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        // check for correct user
        if(auth()->user()->id != $contact->user_id){
            return redirect('/contacts')->with('error', 'Unauthorized page');
        }

        return view('contacts.edit')->with('contact', $contact);
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
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            
        ]);

        $contact = Contact::find($id);

        if(auth()->user()->id != $contact->user_id){
            return redirect('/contacts')->with('error', 'Unauthorized page');
        }
        $contact->title = $request->input('title');
        $contact->name = $request->input('name');
        $contact->company_name = $request->input('company_name');
        $contact->job_title = $request->input('job_title');
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('phone_number','No number');
        $contact->mobile_number = $request->input('mobile_number','No number');
        $contact->address = $request->input('address');
        $contact->notes = $request->input('notes');
        $contact->save();



        return redirect('/contacts')->with('success', 'Contact Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if(auth()->user()->id != $contact->user_id){
            return redirect('/contacts')->with('error', 'Unauthorized page');
        }
        $contact->delete();
        return redirect('/contacts')->with('success', 'Contact Deleted');
    }
}

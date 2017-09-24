@extends('layouts.app')

@section('content')
 <div class="container pt-lg-3">
            <div class="card panel-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <h3>Your Contacts</h3>
                     @if(count($contacts)> 0)
                     <table class="table table-sm table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Job Title</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    
                                    <td>{{$contact->title}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->company_name}}</td>
                                    <td>{{$contact->job_title}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone_number}}</td>
                                    <td>{{$contact->address}}</td>
                                    <td>
                                        <a class="btn btn-link" href="contacts/{{$contact->id}}">View</a>
                                    </td> 
                                    <td>
                                        <a  class="btn btn-link" href="contacts/{{$contact->id}}/edit">Edit</a> 
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['ContactsController@destroy', $contact->id,'method' => 'POST','class' => 'form-inline']])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete', ['class' => ' btn btn-link'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @else
                       <p> No contacts have been created! </p>
                        @endif
                    <a class="btn btn-primary" href="contacts/create">Create Contact</a> <a class="btn btn-secondary" href="contacts/">Back to Contacts</a>
                </div>
                
            </div>
              
        </div>
       
</div>
@endsection

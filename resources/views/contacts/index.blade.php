@extends('layouts.app')


@section('content')

 <div class="container pt-lg-5">
    <div class="jumbotron text-center"><h3>Address Book Application</h3>
        <p>Welcome to the Address book Application, the list of searchable contacts can be found below. To create a contact and edit you must be registered and logged in as a user.</p>
        <a>Sign In<a/>
    </div>

    <div class=" row mb-2">
        <div class="col-6">
            {!! Form::open(['action' => 'SearchController@search', 'method' => 'GET']) !!}
            <form>
                <div class="input-group">
                        {{Form::text('search', '', ['class' => 'form-control', 'placeholder' => 'Search Name'])}}
                        <span class="input-group-btn">
                            {{Form::submit('Search', ['class' => 'btn btn-secondary'])}}
                        </span>
                </div>
            </form>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        <table class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Notes</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @if(count($contacts)> 0)
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->title}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->company_name}}</td>
                        <td>{{$contact->job_title}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone_number}}</td>
                        <td>{{$contact->mobile_number}}</td>
                        <td>{{ substr($contact->address, 0, 20) }}{{ strlen($contact->address) > 20 ? "..." : ""}}</td>
                        <td>{{ substr($contact->notes, 0, 20)}}{{ strlen($contact->notes) > 20 ? "..." : ""}}</td>
                        <td>
                            @if(!Auth::guest())
                                @if(Auth::user()->id == $contact->user_id)
                                    <a class="btn btn-link" href="contacts/{{$contact->id}}">View</a>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if(!Auth::guest())
                                @if(Auth::user()->id == $contact->user_id)
                                    <a  class="btn btn-link" href="contacts/{{$contact->id}}/edit">Edit</a>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if(!Auth::guest())
                                @if(Auth::user()->id == $contact->user_id)
                                    {!!Form::open(['action' => ['ContactsController@destroy', $contact->id,'method' => 'POST','class' => 'form-inline']])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete', ['class' => ' btn btn-link'])}}
                                    {!!Form::close()!!}
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach

            @else
            <tr> <td><p>No post found</p></td></tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-4">
            @if(!Auth::guest())
                <a class="btn btn-primary" href="contacts/create">Create Contact</a>
            @endif
        </div>
        <div class="col-2 ml-auto">{{ $contacts->links() }}</div>
    </div>

</div>

@endsection

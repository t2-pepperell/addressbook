@extends('layouts.app')

@section('content')
         <div class="container pt-lg-3">
         <div class="card" >
         <div class="card-header">
            <h4 class="card-title">{{$contact->title}} {{$contact->name}}</h4>
         </div>
            <div class="row m-4">
                <div class=" col">
                    <div>
                    <h5 class="card-subtitle">Company Name</h5>{{$contact->company_name}}<br>
                    <h5 class="card-subtitle mt-3">Job Title</h5>{{$contact->job_title}}<br>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                    <div class="col-6"><h5 class="card-subtitle">Email</h5>{{$contact->email}}</div>
                    <div class="col-6"><h5 class="card-subtitle">Phone Number</h5>{{$contact->phone_number}}</div>
                    <div class="col-6"><h5 class="card-subtitle mt-3">Address</h5>{{$contact->address}}</div>
                    <div class="col-6"><h5 class="card-subtitle mt-3">Mob Number</h5>{{$contact->mobile_number}}</div>
                    </div>
                </div>
            </div>
            <div class="row m-4">
                   <div class="col"> <h5 class="card-subtitle">Notes</h5><br><p>{{$contact->notes}}</p></div>
            </div>

            
            </div>
            @if(!Auth::guest())
                @if(Auth::user()->id == $contact->user_id)
                    <a href="/contacts/{{$contact->id}}/edit" class="btn btn-primary">Edit</a>

                    {!!Form::open(['action' => ['ContactsController@destroy', $contact->id,'method' => 'POST']])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
            @endif
            </div>
      
@endsection
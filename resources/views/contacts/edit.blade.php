@extends('layouts.app')

@section('content')
 <div class="container pt-lg-3">
       <div class="jumbotron">
            <h1 class="text-center">Edit contact</h1>
            {!! Form::open(['action' => ['ContactsController@update', $contact->id], 'method' => 'POST']) !!}
                 <form>
                 <div class="form-group">
                        {{Form::label('title','Title')}}
                        {{Form::text('title', $contact->title, ['class' => 'form-control', 'placeholder' => 'Mr, Mrs, Miss, Master'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::text('name', $contact->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('company_name','Company Name')}}
                        {{Form::text('company_name',$contact->company_name , ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('job_title','Job Title')}}
                        {{Form::text('job_title', $contact->job_title, ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email','Email')}}
                        {{Form::text('email', $contact->email, ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}
                    </div>
                     <div class="form-group">
                        {{Form::label('phone_number','Phone Number')}}
                        {{Form::number('phone_number', $contact->phone_number, ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('mobile_number','Mobile Number')}}
                        {{Form::number('mobile_number', $contact->mobile_number, ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                     <div class="form-group">
                        {{Form::label('address','Address')}}
                        {{Form::textarea('address', $contact->address, ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('notes','Notes')}}
                        {{Form::textarea('notes', $contact->notes, ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                 </form>
            {!! Form::close() !!}
            </div>
</div>
       
      
@endsection


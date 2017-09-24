@extends('layouts.app')

@section('content')
 <div class="container pt-lg-3">
       <div class="jumbotron">
            <h1 class="text-center">Create a contact</h1>
            {!! Form::open(['action' => 'ContactsController@store', 'method' => 'POST']) !!}
                 <form>
                 <div class="form-group">
                        {{Form::label('title','Title (required)')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Mr, Mrs, Miss, Master'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('name','Name (required)')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('company_name','Company Name')}}
                        {{Form::text('company_name', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('job_title','Job Title')}}
                        {{Form::text('job_title', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email','Email (required)')}}
                        {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}
                    </div>
                     <div class="form-group">
                        {{Form::label('phone_number','Phone Number')}}
                        {{Form::tel('phone_number', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('mobile_number','Mobile Number')}}
                        {{Form::tel('mobile_number', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                     <div class="form-group">
                        {{Form::label('address','Address (required)')}}
                        {{Form::textarea('address', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('notes','Notes')}}
                        {{Form::textarea('notes', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                 </form>
            {!! Form::close() !!}
            </div>

       </div>
      
@endsection


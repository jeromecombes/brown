@extends('layouts.md8')

@section('panel-heading')
  New student
@endsection

@section('content')

<p>Please fill the form below ...</p>

{!! Form::open(array('route' => 'students.create', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
{!! Form::hidden('semester', session('semester')) !!}

<div class='form-group'>
      {!! Form::label('gender', 'Gender:', ['class' => 'col-md-4 control-label']) !!}
      
      <div class="col-md-6">
        {!! Form::select('gender', array(null => '', 'F'=>'Female', 'M'=>'Male') , null, ['class' => 'form-control', 'required' => 'required']) !!}
      </div>
    </div>

    <div class='form-group'>
      {!! Form::label('name', 'Lastname:', ['class' => 'col-md-4 control-label']) !!}
      
      <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
      </div>
    </div>

    <div class='form-group'>
      {!! Form::label('firstname', 'Firstname:', ['class' => 'col-md-4 control-label']) !!}
      
      <div class="col-md-6">
        {!! Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) !!}
      </div>
    </div>

    <div class='form-group'>
      {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
      
      <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
      </div>
    </div>

    <div class='form-group'>
      <div class="col-md-8 col-md-offset-4">
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
      </div>
    </div>

{!! Form::close() !!}

@endsection



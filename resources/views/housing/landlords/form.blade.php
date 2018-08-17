@extends('layouts.md12')

@section('panel-heading')
  @if(isset($landlord))
    {{ $landlord->firstname }} {{$landlord->lastname}}
  @else
    New landlord
  @endif
@endsection

@section('content')

<p>Please fill the form below ...</p>

@if(isset($landlord))
  {!! Form::open(array('route' => array('landlords.update', $landlord->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
@else
  {!! Form::open(array('route' => 'landlords.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
@endif

{!! Form::hidden('semester', session('semester')) !!}

<div style='display:inline-block; width:50%; vertical-align:top;' id='column1'>
    <div class='form-group'>
        {!! Form::label('lastname', 'Lastname:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('lastname', old('lastname', isset($landlord->lastname) ? $landlord->lastname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname', 'Firstname:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('firstname', old('firstname', isset($landlord->firstname) ? $landlord->firstname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('street', 'Street:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('street', old('street', isset($landlord->street) ? $landlord->street: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('zip', 'Zip code:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('zip', old('zip', isset($landlord->zip) ? $landlord->zip : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('city', old('city', isset($landlord->city) ? $landlord->city : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
</div>

<div style='display:inline-block; width:49%; vertical-align:top;' id='column2'>
    <div class='form-group'>
        {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('email', old('email', isset($landlord->email) ? $landlord->email : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cellphone', 'Cellphone:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('cellphone', old('cellphone', isset($landlord->cellphone) ? $landlord->cellphone : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('landline', 'Landline:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('landline', old('landline', isset($landlord->landline) ? $landlord->landline: null), ['class' => 'form-control']) !!}
        </div>
    </div>


</div>


<div class='form-group'>
    <div class="col-md-12 center">
        {!! Form::button('Back',['class' => 'btn btn-primary', 'onclick' => 'javascript:window.location.href = "/housing/landlords";']) !!}
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection
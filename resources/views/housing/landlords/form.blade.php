@extends('layouts.md12')

@section('panel-heading')
  @if(isset($landlord))
    {{ $landlord->firstname }} {{$landlord->lastname}}
  @else
     @lang('general.new_landlord')
  @endif
@endsection

@section('content')

<p>@lang('general.fill')</p>

@if(isset($landlord))
  {!! Form::open(array('route' => array('landlords.update', $landlord->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
@else
  {!! Form::open(array('route' => 'landlords.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
@endif

{!! Form::hidden('semester', session('semester')) !!}

<div style='display:inline-block; width:50%; vertical-align:top;' id='column1'>
    <div class='form-group'>
        {!! Form::label('lastname', trans('general.lastname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('lastname', old('lastname', isset($landlord->lastname) ? $landlord->lastname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname', trans('general.firstname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('firstname', old('firstname', isset($landlord->firstname) ? $landlord->firstname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('street', trans('general.street'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('street', old('street', isset($landlord->street) ? $landlord->street: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('zip', trans('general.zip_code'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('zip', old('zip', isset($landlord->zip) ? $landlord->zip : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('city', trans('general.city'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('city', old('city', isset($landlord->city) ? $landlord->city : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
</div>

<div style='display:inline-block; width:49%; vertical-align:top;' id='column2'>
    <div class='form-group'>
        {!! Form::label('email', trans('general.email'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::email('email', old('email', isset($landlord->email) ? $landlord->email : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cellphone', trans('general.cellphone'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('cellphone', old('cellphone', isset($landlord->cellphone) ? $landlord->cellphone : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('landline', trans('general.landline'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('landline', old('landline', isset($landlord->landline) ? $landlord->landline: null), ['class' => 'form-control']) !!}
        </div>
    </div>


</div>


<div class='form-group'>
    <div class="col-md-12 center">
        {!! Form::submit(trans('general.submit'), ['class' => 'btn btn-primary']) !!}
        {!! Form::button(trans('general.cancel'), ['class' => 'btn btn-primary', 'onclick' => 'javascript:window.location.href = "/housing/landlords";']) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection
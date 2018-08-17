@extends('layouts.md12')

@section('panel-heading')
  @if(isset($landlord))
    {{ $landlord->firstname }} {{$landlord->lastname}}
  @else
     @lang('general.new_landlord')
  @endif
@endsection

@section('content')

<p>@lang('general.main_contact')</p>

@if(isset($landlord))
  {!! Form::open(array('route' => array('landlords.update', $landlord->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
@else
  {!! Form::open(array('route' => 'landlords.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
@endif

{!! Form::hidden('semester', session('semester')) !!}

<div style='display:inline-block; width:50%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('lastname', trans('general.lastname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('lastname', old('lastname', isset($landlord->lastname) ? $landlord->lastname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname', trans('general.firstname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('firstname', old('firstname', isset($landlord->firstname) ? $landlord->firstname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('email', trans('general.email'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::email('email', old('email', isset($landlord->email) ? $landlord->email : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:49%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('cellphone', trans('general.cellphone'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('cellphone', old('cellphone', isset($landlord->cellphone) ? $landlord->cellphone : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('landline', trans('general.landline'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('landline', old('landline', isset($landlord->landline) ? $landlord->landline: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<hr/>

<p>@lang('general.address')</p>

<div style='display:inline-block; width:50%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('street', trans('general.street'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('street', old('street', isset($landlord->street) ? $landlord->street: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:50%; vertical-align:top;'>

    <div class='form-group'>
        {!! Form::label('zip', trans('general.zip_code'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('zip', old('zip', isset($landlord->zip) ? $landlord->zip : null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:49%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('city', trans('general.city'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('city', old('city', isset($landlord->city) ? $landlord->city : null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<hr/>

<p>@lang('general.housing_info')</p>

<div style='display:inline-block; width:50%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('type', trans('general.type'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('type',
              array(
                null => '',
                'studio' => trans('general.studio'),
                'room_apartment' => trans('general.room_apartment'),
                '2rooms' => trans('general.2rooms'),
                '3rooms' => trans('general.3rooms'),
                ),
              old('type', isset($landlord->type) ? $landlord->type: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('subway', trans('general.subway'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('subway', old('subway', isset($landlord->subway) ? $landlord->subway: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('borough', trans('general.borough'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('borough',
              array(
                null => '',
                '1' => trans('general.1st'),
                '2' => trans('general.2nd'),
                '3' => trans('general.3rd'),
                '4' => trans('general.4th'),
                '5' => trans('general.5th'),
                '6' => trans('general.6th'),
                '7' => trans('general.7th'),
                '8' => trans('general.8th'),
                '9' => trans('general.9th'),
                '10' => trans('general.10th'),
                '11' => trans('general.11th'),
                '12' => trans('general.12th'),
                '13' => trans('general.13th'),
                '14' => trans('general.14th'),
                '15' => trans('general.15th'),
                '16' => trans('general.16th'),
                '17' => trans('general.17th'),
                '18' => trans('general.18th'),
                '19' => trans('general.19th'),
                '20' => trans('general.20th'),
                ),
              old('borough', isset($landlord->borough) ? $landlord->borough: null), ['class' => 'form-control']) !!}

        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('rental', trans('general.rental'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('rental', old('rental', isset($landlord->rental) ? $landlord->rental: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:49%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('kitchen', trans('general.kitchen'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('kitchen',
              array(
                null => '',
                'kitchenette' => trans('general.kitchenette'),
                'separated' => trans('general.separated'),
                'shared' => trans('general.shared'),
                ),
            old('kitchen', isset($landlord->kitchen) ? $landlord->kitchen: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('bathroom', trans('general.bathroom'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('bathroom',
              array(
                null => '',
                'private' => trans('general.private'),
                'shared' => trans('general.shared'),
                ),
              old('bathroom', isset($landlord->bathroom) ? $landlord->bathroom: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('internet', trans('general.internet'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('internet',
              array(
                null => '',
                'yes' => trans('general.yes'),
                'no' => trans('general.no'),
                ),
              old('internet', isset($landlord->internet) ? $landlord->internet: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('heater', trans('general.heater'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('heater',
              array(
                null => '',
                'included' => trans('general.included'),
                'additional' => trans('general.additional'),
                ),
              old('heater', isset($landlord->heater) ? $landlord->heater: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('charge', trans('general.charge'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('charge', old('charge', isset($landlord->charge) ? $landlord->charge: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:50%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('notes', trans('general.notes'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::textarea('notes', old('notes', isset($landlord->notes) ? $landlord->notes: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:49%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('deposit', trans('general.deposit'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('deposit', old('deposit', isset($landlord->deposit) ? $landlord->deposit: null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('boy_girl', trans('general.boy_girl'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('boy_girl',
              array(
                null => '',
                'girl' => trans('general.girl'),
                'boy' => trans('general.boy'),
                'indifferent' => trans('general.indifferent'),
                ),
              old('boy_girl', isset($landlord->boy_girl) ? $landlord->boy_girl: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('smoker', trans('general.smoker'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('smoker',
              array(
                null => '',
                'yes' => trans('general.yes'),
                'no' => trans('general.no'),
                ),
              old('smoker', isset($landlord->smoker) ? $landlord->smoker: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('pets', trans('general.pets'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('pets',
              array(
                null => '',
                'yes' => trans('general.yes'),
                'no' => trans('general.no'),
                ),
              old('pets', isset($landlord->pets) ? $landlord->pets: null), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('children', trans('general.children'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::select('children',
              array(
                null => '',
                'yes' => trans('general.yes'),
                'no' => trans('general.no'),
                ),
              old('children', isset($landlord->children) ? $landlord->children: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<hr/>

<p>@lang('general.secondary_contact')</p>

<div style='display:inline-block; width:50%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('lastname2', trans('general.lastname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('lastname2', old('lastname2', isset($landlord->lastname2) ? $landlord->lastname2 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname2', trans('general.firstname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('firstname2', old('firstname2', isset($landlord->firstname2) ? $landlord->firstname2 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('email2', trans('general.email'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::email('email2', old('email2', isset($landlord->email2) ? $landlord->email2 : null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:49%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('cellphone2', trans('general.cellphone'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('cellphone2', old('cellphone2', isset($landlord->cellphone2) ? $landlord->cellphone2 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('landline2', trans('general.landline'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('landline2', old('landline2', isset($landlord->landline2) ? $landlord->landline2: null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<hr/>

<p>@lang('general.tertiary_contact')</p>

<div style='display:inline-block; width:50%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('lastname3', trans('general.lastname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('lastname3', old('lastname3', isset($landlord->lastname3) ? $landlord->lastname3 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname3', trans('general.firstname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('firstname3', old('firstname3', isset($landlord->firstname3) ? $landlord->firstname3 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('email3', trans('general.email'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::email('email3', old('email3', isset($landlord->email3) ? $landlord->email3 : null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div style='display:inline-block; width:49%; vertical-align:top;'>
    <div class='form-group'>
        {!! Form::label('cellphone3', trans('general.cellphone'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('cellphone3', old('cellphone3', isset($landlord->cellphone3) ? $landlord->cellphone3 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('landline3', trans('general.landline'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-7">
            {!! Form::text('landline3', old('landline3', isset($landlord->landline3) ? $landlord->landline3: null), ['class' => 'form-control']) !!}
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
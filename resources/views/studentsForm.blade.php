@extends('layouts.md12')

@section('panel-heading')
  New student
@endsection

@section('content')

<p>Please fill the form below ...</p>

{!! Form::open(array('route' => 'students.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
{!! Form::hidden('semester', session('semester')) !!}

<div style='display:inline-block; width:50%; vertical-align:top;' id='column1'>
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
        {!! Form::label('dob', 'Date of birth:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('dob', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('place_of_birth', 'Place of birth:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('place_of_birth', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('citizenship', 'Citizenship:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('citizenship', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('photo', 'Photo', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('photo') !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('student_id', 'Student id:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('student_id', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('concentration', 'Concentration:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('concentration', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('university', 'University:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('university', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    


</div>

<div style='display:inline-block; width:49%; vertical-align:top;' id='column2'>

    <div class='form-group'>
        {!! Form::label('host', 'Host:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('host', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('host_notes', 'Notes:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('host_notes', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('status', ['', 'Complete', 'Pending'], null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('notes1', 'Notes', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('notes1', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('courses', 'Courses', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::checkbox('courses', '1') !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('deposit', 'Deposit', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('deposit', ['', 'OK', 'Waived'], null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('sa_approval', 'SA Approval', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('sa_approval', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('leave', 'Leave', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::checkbox('leave', '1') !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cf_registration', 'CF Registration', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('cf_registration', ['', 'OK', 'N/A'], null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('notes2', 'Notes', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('notes2', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<div class='form-group'>
    <div class="col-md-12 col-md-offset-5">
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection
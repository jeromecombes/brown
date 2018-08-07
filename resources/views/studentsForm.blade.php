@extends('layouts.md12')

@section('panel-heading')
  @if(isset($student))
    {{ $student->firstname }} {{$student->name}}
  @else
    New student
  @endif
@endsection

@section('content')

<p>Please fill the form below ...</p>

@if(isset($student))
  {!! Form::open(array('route' => array('students.update', $student->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
@else
  {!! Form::open(array('route' => 'students.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
@endif

{!! Form::hidden('semester', session('semester')) !!}

<div style='display:inline-block; width:50%; vertical-align:top;' id='column1'>
    <div class='form-group'>
        {!! Form::label('gender', 'Gender:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('gender', array(null => '', 'F'=>'Female', 'M'=>'Male') , old('gender', isset($student->gender) ? $student->gender : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', 'Lastname:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('name', old('name', isset($student->name) ? $student->name : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname', 'Firstname:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('firstname', old('firstname', isset($student->firstname) ? $student->firstname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('dob', 'Date of birth:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('dob', old('dob', isset($student->dob) ? $student->dob : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('place_of_birth', 'Place of birth:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('place_of_birth', old('place_of_birth', isset($student->place_of_birth) ? $student->place_of_birth : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('citizenship', 'Citizenship:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('citizenship', old('citizenship', isset($student->citizenship) ? $student->citizenship : null), ['class' => 'form-control']) !!}
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
            {!! Form::email('email', old('email', isset($student->email) ? $student->email : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('student_id', 'Student id:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('student_id', old('student_id', isset($student->student_id) ? $student->student_id : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('concentration', 'Concentration:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('concentration', old('concentration', isset($student->concentration) ? $student->concentration : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('university', 'University:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('university', old('university', isset($student->university) ? $student->university : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    


</div>

<div style='display:inline-block; width:49%; vertical-align:top;' id='column2'>

    <div class='form-group'>
        {!! Form::label('host', 'Host:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('host', old('host', isset($student->host) ? $student->host : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('host_notes', 'Notes:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('host_notes', old('host_notes', isset($student->host_notes) ? $student->host_notes : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('status', ['', 'Complete', 'Pending'], old('status', isset($student->status) ? $student->status : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('notes1', 'Notes', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('notes1', old('notes1', isset($student->notes1) ? $student->notes1 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('courses', 'Courses', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::checkbox('courses', '1', old('courses', isset($student->courses) ? $student->courses : null)) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('deposit', 'Deposit', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('deposit', ['', 'OK', 'Waived'], old('deposit', isset($student->deposit) ? $student->deposit : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('sa_approval', 'SA Approval', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('sa_approval', old('sa_approval', isset($student->sa_approval) ? $student->sa_approval : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('leave', 'Leave', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::checkbox('leave', '1', old('leave', isset($student->leave) ? $student->leave : null)) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cf_registration', 'CF Registration', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('cf_registration', ['', 'OK', 'N/A'], old('cf_registration', isset($student->cf_registration) ? $student->cf_registration : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('notes2', 'Notes', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('notes2', old('notes2', isset($student->notes2) ? $student->notes2 : null), ['class' => 'form-control']) !!}
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
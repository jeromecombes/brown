@extends('layouts.md12')

@section('panel-heading')
  @if(isset($student))
    {{ $student->firstname }} {{$student->name}}
  @else
    @lang('general.new_student');
  @endif
@endsection

@section('content')

<p>@lang('general.fill')</p>

@if(isset($student))
  {!! Form::open(array('route' => array('students.update', $student->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}
@else
  {!! Form::open(array('route' => 'students.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
@endif

{!! Form::hidden('semester', session('semester')) !!}

<div style='display:inline-block; width:50%; vertical-align:top;' id='column1'>
    <div class='form-group'>
        {!! Form::label('gender', trans('general.gender'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('gender', array(null => '', 'F'=>'Female', 'M'=>'Male') , old('gender', isset($student->gender) ? $student->gender : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', trans('general.lastname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('name', old('name', isset($student->name) ? $student->name : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('firstname', trans('general.firstname'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('firstname', old('firstname', isset($student->firstname) ? $student->firstname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('dob', trans('general.dob'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('dob', old('dob', isset($student->dob) ? $student->dob : null), ['class' => 'form-control datepicker']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('place_of_birth', trans('general.place_of_birth'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('place_of_birth', old('place_of_birth', isset($student->place_of_birth) ? $student->place_of_birth : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('citizenship', trans('general.citizenship'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('citizenship', old('citizenship', isset($student->citizenship) ? $student->citizenship : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class='form-group'>
        {!! Form::label('photo', trans('general.photo'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('photo') !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('email', trans('general.email'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::email('email', old('email', isset($student->email) ? $student->email : null), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('student_id', trans('general.student_id'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('student_id', old('student_id', isset($student->student_id) ? $student->student_id : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('concentration', trans('general.concentration'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('concentration', old('concentration', isset($student->concentration) ? $student->concentration : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('university', trans('general.university'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('university', old('university', isset($student->university) ? $student->university : null), ['class' => 'form-control']) !!}
        </div>
    </div>
    


</div>

<div style='display:inline-block; width:49%; vertical-align:top;' id='column2'>

    <div class='form-group'>
        {!! Form::label('host', trans('general.host'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('host', old('host', isset($student->host) ? $student->host : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('host_notes', trans('general.notes'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('host_notes', old('host_notes', isset($student->host_notes) ? $student->host_notes : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('status', trans('general.status'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('status', ['', 'Complete', 'Pending'], old('status', isset($student->status) ? $student->status : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('notes1', trans('general.notes'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('notes1', old('notes1', isset($student->notes1) ? $student->notes1 : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('courses', trans('general.courses'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::checkbox('courses', '1', old('courses', isset($student->courses) ? $student->courses : null)) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('deposit', trans('general.deposit'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('deposit', ['', 'OK', 'Waived'], old('deposit', isset($student->deposit) ? $student->deposit : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('sa_approval', trans('general.sa_approval'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('sa_approval', old('sa_approval', isset($student->sa_approval) ? $student->sa_approval : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('leave', trans('general.leave'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::checkbox('leave', '1', old('leave', isset($student->leave) ? $student->leave : null)) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cf_registration', trans('general.cf_registration'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('cf_registration', ['', 'OK', 'N/A'], old('cf_registration', isset($student->cf_registration) ? $student->cf_registration : null), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('notes2', trans('general.notes'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('notes2', old('notes2', isset($student->notes2) ? $student->notes2 : null), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<div class='form-group'>
    <div class="col-md-12 center">
        {!! Form::submit(trans('general.submit'),['class' => 'btn btn-primary']) !!}
        {!! Form::button(trans('general.cancel'),['class' => 'btn btn-primary', 'onclick' => 'javascript:window.location.href = "/students";']) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection
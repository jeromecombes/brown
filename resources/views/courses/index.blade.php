@extends('layouts.md12')

@section('panel-heading')
  @lang('general.courses') - {{ session('semester_name') }}
@endsection

@section('content')
@if($students->count() > 0)
  <table class='table table-bordered table-striped' id='students-table'>
    <thead>
      <tr>
        <th> &nbsp; </th>
        <th> @lang('general.lastname') </th>
        <th> @lang('general.firstname') </th>
        <th> @lang('general.email') </th>
        <th> @lang('general.student_id') </th>
      </tr>
    </thead>

  </table>
@else
  <p>@lang('general.no_student')</p>
@endif
@endsection
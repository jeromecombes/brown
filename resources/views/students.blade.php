@extends('layouts.md12')

@section('panel-heading')
  Students - {{ session('semester_name') }}
@endsection

@section('content')

@if($students->count() > 0)
  <table class='table table-bordered table-striped' id='students-table'>
    <thead>
      <tr>
        <th> Lastname </th>
        <th> Firstname </th>
        <th> Email </th>
      </tr>
    </thead>

    <tbody>

      @foreach($students as $student)
        <tr>
          <td> {{$student->name}} </td>
          <td> {{$student->firstname}} </td>
          <td> {{$student->email}} </td>
        </tr>
      @endforeach

    </tbody>
  </table>
@else
  <p>No student found.</p>
@endif

<a class="btn btn-primary" href="{{ route('students.create') }}"> Add </a>

@endsection
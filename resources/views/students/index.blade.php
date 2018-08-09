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
        <th> Student ID </th>
      </tr>
    </thead>

  </table>
@else
  <p>No student found.</p>
@endif

<a class="btn btn-primary" href="{{ route('students.create') }}"> Add </a>

@stop

@push('scripts');
<script>

$(function() {
    $('#students-table').DataTable({
        processing: true,
        serverSide: true,
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
        ajax: '{!! url('students/data') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'firstname', name: 'firstname' },
            { data: 'email', name: 'email' },
            { data: 'student_id', name: 'student_id' },
        ]
    });
});
</script>
@endpush
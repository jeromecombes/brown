@extends('layouts.md12')

@section('panel-heading')
  Students - {{ session('semester_name') }}
@endsection

@section('content')

@if($students->count() > 0)
  <table class='table table-bordered table-striped' id='students-table'>
    <thead>
      <tr>
        <th> &nbsp; </th>
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
            { data: null, name: 'id', render: function ( data, type, row ) { 
              return '<a href="/students/'+data.id+'/edit"><span class="icon icon-edit"></span></a> <a href="javascript:delete_student('+data.id+');"><span class="icon icon-delete"></span></a>' }},
            { data: 'name', name: 'name' },
            { data: 'firstname', name: 'firstname' },
            { data: 'email', name: 'email' },
            { data: 'student_id', name: 'student_id' },
        ]
    });
});

function delete_student(id){
  if(confirm('Do you really want to delete this student ?')){
    $.ajax({
      type: 'DELETE',
      url: '/students/'+id,
      dataType: 'json',
      success: function(){
        alert('The student has been deleted !');
      }
    });
  }
}

</script>
@endpush
@extends('layouts.md12')

@section('panel-heading')
  @lang('general.students') - {{ session('semester_name') }}
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
        <th> @lang('general.university') </th>
        <th> @lang('general.student_id') </th>
      </tr>
    </thead>

  </table>
@else
  <p>@lang('general.no_student')</p>
@endif

<a class="btn btn-primary" href="{{ route('students.create') }}"> Add </a>


<!-- Delete student dialog box -->
<div id="dialog-confirm" title="@lang('general.delete_student_title')">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>@lang('general.delete_student')</p>
</div>

<!-- Delete student form -->
{!! Form::open(array('route' => array('students.destroy', 0), 'method' => 'DELETE', 'class' => 'form-horizontal', 'id' => 'delete_form')) !!}
{!! Form::close() !!}

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
              return '<a href="/students/'+data.id+'/edit"><span class="icon icon-edit"></span></a> <a href="javascript:delete_item('+data.id+');"><span class="icon icon-delete"></span></a>' }},
            { data: 'name', name: 'name' },
            { data: 'firstname', name: 'firstname' },
            { data: 'email', name: 'email' },
            { data: 'university', name: 'university' },
            { data: 'student_id', name: 'student_id' },
        ]
    });
    
    $( "#dialog-confirm" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        @lang('general.delete'): function() {
          $('#delete_form').submit();
        },
        @lang('general.cancel'): function() {
          $( this ).dialog( "close" );
        }
      }
    });

});

function delete_item(id){
  $('#delete_form').attr('action', '/students/'+id);
  $("#dialog-confirm" ).dialog('open');
}

</script>
@endpush
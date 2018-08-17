@extends('layouts.md12')

@section('panel-heading')
  @lang('general.landlords') - {{ session('semester_name') }}
@endsection

@section('content')

@if($landlords->count() > 0)
  <table class='table table-bordered table-striped' id='landlords-table'>
    <thead>
      <tr>
        <th> &nbsp; </th>
        <th> @lang('general.lastname') </th>
        <th> @lang('general.firstname') </th>
        <th> @lang('general.street') </th>
        <th> @lang('general.zip_code') </th>
        <th> @lang('general.city') </th>
        <th> @lang('general.email') </th>
        <th> @lang('general.cellphone') </th>
        <th> @lang('general.landline') </th>
      </tr>
    </thead>

  </table>
@else
  <p>@lang('general.no_landlord')</p>
@endif

<a class="btn btn-primary" href="{{ route('landlords.create') }}"> Add </a>

<!-- Delete student dialog box -->
<div id="dialog-confirm" title="@lang('general.delete_landlord_title')">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>@lang('general.delete_landlord')</p>
</div>

<!-- Delete student form -->
{!! Form::open(array('route' => array('landlords.destroy', 0), 'method' => 'DELETE', 'class' => 'form-horizontal', 'id' => 'delete_form')) !!}
{!! Form::close() !!}

@stop

@push('scripts');
<script>

$(function() {
    $('#landlords-table').DataTable({
        processing: true,
        serverSide: true,
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
        ajax: '{!! url('housing/landlords/data') !!}',
        columns: [
            { data: null, name: 'id', render: function ( data, type, row ) {
              return '<a href="/housing/landlords/'+data.id+'/edit"><span class="icon icon-edit"></span></a> <a href="javascript:delete_item('+data.id+');"><span class="icon icon-delete"></span></a>' }},
            { data: 'lastname', name: 'lastname' },
            { data: 'firstname', name: 'firstname' },
            { data: 'street', name: 'street' },
            { data: 'zip', name: 'zip' },
            { data: 'city', name: 'city' },
            { data: 'email', name: 'email' },
            { data: 'cellphone', name: 'cellphone' },
            { data: 'landline', name: 'landline' },
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
  $('#delete_form').attr('action', '/housing/landlords/'+id);
  $("#dialog-confirm" ).dialog('open');
}

</script>
@endpush
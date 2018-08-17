@extends('layouts.md12')

@section('panel-heading')
  Landlords - {{ session('semester_name') }}
@endsection

@section('content')

@if($landlords->count() > 0)
  <table class='table table-bordered table-striped' id='landlords-table'>
    <thead>
      <tr>
        <th> &nbsp; </th>
        <th> Lastname </th>
        <th> Firstname </th>
        <th> Street</th>
        <th> Zip code</th>
        <th> City</th>
        <th> Email </th>
        <th> Cellphone</th>
        <th> Landline</th>
      </tr>
    </thead>

  </table>
@else
  <p>No landlord found.</p>
@endif

<a class="btn btn-primary" href="{{ route('landlords.create') }}"> Add </a>

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
            { data: null, name: 'id', render: function ( data, type, row ) { return '<a href="/housing/landlords/'+data.id+'/edit"><span class="icon icon-edit"></span></a>' }},
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
});
</script>
@endpush
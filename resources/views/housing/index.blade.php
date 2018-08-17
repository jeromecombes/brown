@extends('layouts.md8')

@section('panel-heading')
  Housing - {{ session('semester_name') }}
@endsection

@section('content')
Housing

<p>
  <a href='/housing/landlords'>/housing/landlords</a>
</p>
@endsection

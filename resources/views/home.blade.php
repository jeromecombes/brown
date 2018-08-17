@extends('layouts.md8')

@section('panel-heading')
  @lang('general.welcome_database')
@endsection

@section('content')
  @lang('general.you_are_login')
  <br/>
  @lang('general.you_choosed_semester', ['name' => $semester ])
@endsection

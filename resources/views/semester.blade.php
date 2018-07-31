@extends('layouts.container')

@section('panel-heading')
  Welcome to the Brown in France Database
@endsection

@section('content')
Please choose a semester
{!! Form::open(array('route' => 'semester_session', 'method' => 'POST', 'class' => 'form-horizontal')) !!}

    <div class='form-group'>
    {!! Form::label('semester', 'Semester:', ['class' => 'col-md-4 control-label']) !!}
    
    <div class="col-md-6">
    {!! Form::select('semester', $semesters, ['class' => 'from-control', 'id' => $current_id]) !!}
    </div>
    </div>

    <div class='form-group'>
    <div class="col-md-8 col-md-offset-4">
    {!! Form::submit(null,['class' => 'btn btn-primary']) !!}
    </div>
    </div>

{!! Form::close() !!}

@endsection
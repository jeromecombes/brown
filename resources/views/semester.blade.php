@extends('layouts.md8')

@section('panel-heading')
  Welcome to the Brown in France Database
@endsection

@section('content')

<p>Please select a semester to continue ...</p>

{!! Form::open(array('route' => 'semesters.session', 'method' => 'POST', 'class' => 'form-horizontal')) !!}

    <div class='form-group'>
      {!! Form::label('semester', 'Semester:', ['class' => 'col-md-4 control-label']) !!}
      
      <div class="col-md-6">
        {!! Form::select('semester', $semesters, $current_id, ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class='form-group'>
      <div class="col-md-8 col-md-offset-4">
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
      </div>
    </div>

{!! Form::close() !!}

@endsection



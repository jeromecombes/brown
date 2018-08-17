@extends('layouts.md8')

@section('panel-heading')
  @lang('general.welcome_database');
@endsection

@section('content')

<p>@lang('general.select_semester')</p>

{!! Form::open(array('route' => 'semesters.session', 'method' => 'POST', 'class' => 'form-horizontal')) !!}

    <div class='form-group'>
      {!! Form::label('semester', trans('general.semester'), ['class' => 'col-md-4 control-label']) !!}
      
      <div class="col-md-6">
        {!! Form::select('semester', $semesters, $current_id, ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class='form-group'>
      <div class="col-md-8 col-md-offset-4">
        {!! Form::submit(trans('general.submit'), ['class' => 'btn btn-primary']) !!}
      </div>
    </div>

{!! Form::close() !!}

@endsection



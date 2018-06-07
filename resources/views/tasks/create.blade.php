@extends('layouts.app')

@section('content')

<h1>New Task</h1>
   {!! Form::model($task, ['route' => 'tasks.store']) !!}
             <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                 {!! Form::model($task, ['route' => 'tasks.store']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('POST', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
@endsection
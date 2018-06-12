@extends('layouts.app')

@section('content')
    <h3 class="page-title">Edit</h3>
    {!! Form::model($tournament, ['method' => 'PUT', 'route' => ['admin.tournaments.update', $tournament->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('season', 'Season', ['class' => 'control-label']) !!}
                    {!! Form::text('season', old('season'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('season'))
                        <p class="help-block">
                            {{ $errors->first('season') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('number_of_teams', 'Number_of_teams', ['class' => 'control-label']) !!}
                    {!! Form::text('number_of_teams', old('number_of_teams'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('number_of_teams'))
                        <p class="help-block">
                            {{ $errors->first('number_of_teams') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('teams[]', 'Team', ['class' => 'control-label']) !!}
                    {!! Form::select('teams[]', $teams, old('teams[]'), ['class' => 'form-control js-example-basic-multiple', 'multiple' => true]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('team_id'))
                        <p class="help-block">
                            {{ $errors->first('team_id') }}
                        </p>
                    @endif
                </div>
            </div>            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
@extends('layouts.app')

@section('title', '| Edit Permission')

@section('content')

<!-- //Main content page. -->
<div class='col-lg-8 col-md-8 col-lg-offset-4' style="padding: 20px 0px 20px 0px;">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="pull-left">Edit Permission</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
            <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
            <br><br>
        </div>
    </div>

    {{-- @include ('errors.list') --}}

    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Module') }}
        {{ Form::text('module', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Update', array('class' => 'btn btn-block btn-primary')) }}

    {{ Form::close() }}

</div>
<!-- End main content page -->

@endsection

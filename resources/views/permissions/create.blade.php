@extends('layouts.app')

@section('title', '| Create Permission')

@section('content')

 <!-- //Main content page. -->
<div class='col-lg-8 col-md-8 col-lg-offset-4 content' style="padding-top: 40px">
    <div class="row" style="padding-bottom: 20px">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="pull-left">Add Permission</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
            <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
            <br><br>
        </div>
    </div>
    {{-- @include ('errors.list') --}}
    {{ Form::open(array('url' => 'permissions')) }}
    <div class="form-group">
        <label for="first_name"> Permission Name
            <small>(Required)</small>
        </label>
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>
    <br>
    <div class="form-group">
        <label for="first_name"> Module
            <small>(Required)</small>
        </label>
        <div>
            <select name="module" class="form-control">
                @if ($permissions)
                    @foreach ($permissions as $permission)
                        <option value="{{$permission->module}}">
                            {{$permission->module}}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <br>
    <h5><b>Assign Permission to Role</b></h5>
    <div class="row pb-2">
        @foreach ($roles as $role)
            <div class="col-md-2 col-lg-2">
                {{ Form::checkbox('roles[]',  $role->id) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}
            </div>
        @endforeach
    </div>
    {{ Form::submit('Save', array('class' => 'btn btn-block btn-primary')) }}
    {{ Form::close() }}
</div>
<!-- End main content page -->
@endsection

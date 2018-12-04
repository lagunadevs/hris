 @extends('layouts.app')

@section('title', '| Permissions')

@section('content')

 <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <!-- //Main content page. -->
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row" style="padding-bottom: 20px">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h4 class="pull-left">Permissions</h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
                        <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                        <br><br>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Permissions</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->module.' '.$permission->name }}</td> 
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-info btn-block" href="{{ URL::to('permissions/'.$permission->id.'/edit') }}">
                                              Edit
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['method' => 'DELETE', 'route' =>   ['permissions.destroy', $permission->id] ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn w-sm btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ URL::to('permissions/create') }}">
                    <button class="btn btn-success btn-custom waves-effect w-md waves-light m-b-5 pull-left"> <i class="fa fa-plus"> </i> Add Permission</button>
                </a>
            </div>
            <!-- End main content page -->
        </div>
    <!-- end content -->
    </div>


</div>

@endsection

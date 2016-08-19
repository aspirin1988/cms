@extends('admin.dashboard')

@section('content')
<div class="container" ng-contoller="adminCtrl">
    <div class="row">
        [[Menus]]
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


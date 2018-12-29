@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br> <br>

                    <h3>Manage Roles</h3>
                    @if(count($roles) > 0)
                    <table>
                        <thead>
                        <th>Role Name</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>
                                    {{$role->name}}
                                <td>
                            </tr>
                            @endforeach
                        <tbody>
                    @else
                        <p>No roles found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

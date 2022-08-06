@extends('master')

@section('content')
<form action="/users/update" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Personal Info
                </div>
                <div class="card-body">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group">
                        <input value="{{$user->first_name}}" type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input value="{{$user->last_name}}" type="text" class="form-control" name="last_name"  id="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input value="{{$user->username}}" type="text" class="form-control" name="username"  id="username" placeholder="Username">
                    </div>
                    
                    <div class="form-group">
                        <input value="{{$user->password}}" type="password" class="form-control" name="password"  id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password"  id="confirm_password" placeholder="Confirm password">
                    </div>

                    <div class="form-group mb-2">
                        <select name="gender" class="form-control" >
                            <option value="{{$user->gender}}" selected>{{$user->gender}}</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select name="user_type" class="form-control" >
                            <option value="{{$user->user_type}}" selected>{{$user->user_type}}</option>
                            <option value="admin">Admin</option>
                            <option value="employee">Employee</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        {{-- block button to submit form --}}
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection


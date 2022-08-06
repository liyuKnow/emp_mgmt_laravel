@extends('master')

@section('content')
<form action="/users/store" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Personal Info
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name"  id="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username"  id="username" placeholder="Username">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control" name="password"  id="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password"  id="confirm_password" placeholder="Confirm password">
                    </div>

                    <div class="form-group mb-2">
                        <select name="gender" class="form-control" >
                            <option value="">Gender</option>
                            <option value="female" selected>Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <select name="user_type" class="form-control" >
                            <option value="">User Type</option>
                            <option value="female" selected>Admin</option>
                            <option value="male">Employee</option>
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


@extends('master')

@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Personal Info
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <input type="file" class="form-control" name="emp_image"  id="" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="middle_name"  id="middle_name" placeholder="Middle Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name"  id="last_name" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" id="date_employed" placeholder="Date_employed">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job_title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary">
                    </div>
                    
                    <p>Address Info</p>
                    <div class="form-group">
                        <input type="phone" class="form-control" name="phone_no_1" id="phone_no_1" placeholder="Phone No">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" name="phone_no_2" id="phone_no_2" placeholder="Phone No 2">
                    </div>

                    <div class="form-group">
                        <select name="subcity">
                            <option value="">Select Subcity</option>
                            @foreach ($subcities as $subcity)
                                <option class="form-control" value="{{ $subcity->id }}">{{ $subcity->name }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control" id="state" placeholder="State">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="zip" placeholder="Zip">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="country" placeholder="Country">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                   Address Info
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</form>
@endsection


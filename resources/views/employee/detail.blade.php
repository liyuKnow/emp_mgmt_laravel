@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header bg-info text-white">
                Employee Detail
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        {{-- employee image --}}
                        <img src="{{ asset($employee->emp_img) }}" alt="employee image" style="width:230px; height:230px" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Full Name</p>
                                <h4>{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}</h4>
                                <p>Job Title</p>
                                <h4>{{ $employee->job_title }}</h4>
                                <p>Date Employeed</p>
                                <h5>{{ $employee->date_employed }}</h5>
                            </div>
                            <div class="col-md-6">
                                <p>Salary</p>
                                <h5>{{ $employee->salary }}</h5>
                                <p>Gender</p>
                                <h5>{{ $employee->gender}}</h5>
                                <p>Status</p>
                                <h5>{{ $employee->status }}</h5>
                                <p>Leaave Status</p>
                                <h5>{{ $employee->leave_status }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- block button to submit form --}}
    <div class="col-md-12 col-sm-12">
        {{-- <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div> --}}
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header bg-info text-white">
                Employee Adress
            </div>
            <div class="card-body">
                <p>Phone No 1</p>
                <h6>{{ $employee_address->phone_no_1 }}</h6>
                <p>Phone No 2</p>
                <h6>{{ $employee_address->phone_no_2 }}</h6>
                <p>Sub City</p>
                <h6>{{ $employee_address->sub_city}}</h6>
                <p>Woreda</p>
                <h6>{{ $employee_address->woreda }}</h6>
                <p>House No</p>
                <h6>{{ $employee_address->house_no }}</h6>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header bg-info text-white">
                Employee Id
            </div>
            <div class="card-body">
                <img src="{{ asset($employee_id->employee_id_image) }}" alt="employee image" style="width:380px; height:230px" class="img-fluid">
                <p>Id Type</p>
                <h6>{{ $employee_id->employee_id_type}}</h6>
                <p>In No</p>
                <h6>{{ $employee_id->employee_id_no }}</h6>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header bg-info text-white">
            Employee Kin detail and address
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="{{ asset($kin->kin_img) }}" alt="employee image" style="width:380px; height:230px" class="img-fluid">
                        <p>Full Name</p>
                        <h6>{{ $kin->first_name}} {{ $kin->last_name }}</h6>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p>Phone No 1</p>
                        <h6>{{ $kin_address->phone_no_1 }}</h6>
                        <p>Phone No 2</p>
                        <h6>{{ $kin_address->phone_no_2 }}</h6>
                        <p>Sub City</p>
                        <h6>{{ $kin_address->sub_city}}</h6>
                        <p>Woreda</p>
                        <h6>{{ $kin_address->woreda }}</h6>
                        <p>House No</p>
                        <h6>{{ $kin_address->house_no }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection

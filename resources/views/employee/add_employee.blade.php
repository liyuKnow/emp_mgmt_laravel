@extends('master')

@section('content')
<form action="/employees/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Personal Info
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <input type="file" class="form-control" name="emp_image" >
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

                    <div class="form-group mb-2">
                        <select name="subcity" class="form-control" >
                            <option value="">Select Subcity</option>
                            @foreach ($subCities as $subcity)
                                {{ $no_of_woreda = $subcity->woredas }}
                                <option value="{{ $subcity->id }}">{{ $subcity->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="number" class="form-control" name="woreda" id="address" placeholder="Woreda">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="house_no" id="house_no" placeholder="House Number">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Personal Info
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <input type="file" class="form-control" name="kin_image"  id="" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="kin_first_name" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kin_last_name"  id="last_name" placeholder="Last Name">
                    </div>
                    
                    <p>Address Info</p>
                    <div class="form-group">
                        <input type="phone" class="form-control" name="kin_phone_no_1" id="phone_no_1" placeholder="Phone No">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" name="kin_phone_no_2" id="phone_no_2" placeholder="Phone No 2">
                    </div>

                    <div class="form-group mb-2">
                        <select name="kin_subcity" class="form-control" >
                            <option value="">Select Subcity</option>
                            @foreach ($subCities as $subcity)
                                {{ $no_of_woreda = $subcity->woredas }}
                                <option value="{{ $subcity->id }}">{{ $subcity->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="number" class="form-control" name="kin_woreda" id="address" placeholder="Woreda">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="kin_house_no" id="house_no" placeholder="House Number">
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


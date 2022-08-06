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
                        <img src="{{ asset($employee->emp_img) }}" alt="employee image" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <p>Full Name</p>
                        <h4>{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}</h4>
                        <p>Job Title</p>
                        <h4>{{ $employee->job_title }}</h4>
                    </div>
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
@endsection

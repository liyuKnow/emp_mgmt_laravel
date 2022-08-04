@extends('master')

@section('content')
    
<h3>Stats</h3>

<!-- Content Row -->
@include('home.stat_cards')

{{-- Employee and users tables --}}

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                @include('home.employees_table')
            </div>
            <div class="col-md-6">
                @include('home.users_table')
            </div>
        </div>
    </div>
</div>

@endsection
@extends('master')

@section('content')
    <div class="d-flex justify-content-between align-items-center p-2">
        <h3>Employees List</h3>
        <a href="{{route('add_employee')}}" class="badge badge-pill badge-info p-2 text-center">Add New Employee</a>
    </div>

    @include('employee.employees_table')
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset( 'vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset( 'vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset( 'js/demo/datatables-demo.js') }}"></script>
    
@endsection
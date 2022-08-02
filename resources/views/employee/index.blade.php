@extends('master')

@section('content')
    <h3>Employees List</h3>

    @include('employee.employees_table')
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset( 'vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset( 'vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset( 'js/demo/datatables-demo.js') }}"></script>
    
@endsection
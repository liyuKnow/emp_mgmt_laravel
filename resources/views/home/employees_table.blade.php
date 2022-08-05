<div class="card">
    <div class="card-header d-flex justify-content-between text-center align-items-center">
            <h3>Employees</h3>
            <a href="{{route('add_employee')}}" class="badge badge-pill badge-info p-2 text-center">Add New Employee</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Job Title</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($paginated_employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                        <td>{{$employee->job_title}}</td>
                        <td>{{$employee->status}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-3 px-4">No employees found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer clearfix"> --}}
        {{-- laravel paginated links --}}
        {{-- $paginated_users->links() --}}
    {{-- </div> --}}
</div>
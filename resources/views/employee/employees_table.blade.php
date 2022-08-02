
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Employee Id</th>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Date Employeed</th>
                        <th>Job</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> -->
                <tbody>
                    @if(count($employees) > 0)
                    @foreach($employees as $employee)
                    <tr>
                        <td >{{$employee->id}}</td>
                        <td >
                                {{-- avatar --}}
                                <img src="{{$employee->emp_img}}" class="rounded-circle shadow-2" style="width: 120px;" />
                        </td>
                        <td >{{$employee->first_name}} {{$employee->last_name}}</td>
                        <td >{{$employee->date_employed}}</td>
                        <td >{{$employee->job_title}}</td>
                        <td >
                            @if ($employee->status == "active")
                                <span class="badge rounded-pill p-2 badge-success">Active</span>
                            @else
                                <span class="badge rounded-pill p-2 badge-danger">Former</span>
                            @endif
                        </td>
                        <td >
                            <i class="fa fa-eye text-green-400"></i>           
                            <i class="fa fa-edit text-blue-400"></i>
                            <i class="fa fa-trash text-red-400"></i>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center py-3 px-4">No employees found</td>
                </tr>
            @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
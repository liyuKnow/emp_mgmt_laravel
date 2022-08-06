
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>User Type</th>
                        <th>Gender</th>
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
                    @if(count($users) > 0)
                    @foreach($users as $user)
                    <tr>
                        <td >{{$user->id}}</td>
                        <td >{{$user->first_name}} {{$user->last_name}}</td>
                        <td >{{$user->username}}</td>
                        <td >
                            @if ($user->user_type == "admin")
                                <span class="badge rounded-pill p-2 badge-success">Admin</span>
                            @else
                                <span class="badge rounded-pill p-2 badge-danger">Employee</span>
                            @endif
                        </td>
                        <td >
                            <a href={{"/users/edit/".$user->id}}>
                                <i class="fa fa-edit text-blue-400"></i>
                            </a> 
                            <a href={{"/users/delete/".$user->id}}>
                                <i class="fa fa-trash text-red-400"></i>
                            </a>      
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center py-3 px-4">No users found</td>
                </tr>
            @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
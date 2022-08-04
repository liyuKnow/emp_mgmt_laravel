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
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($paginated_users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->user_type}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-3 px-4">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{-- laravel paginated links --}}
        {{-- {{$paginated_users->links()}} --}}
    </div>
</div>
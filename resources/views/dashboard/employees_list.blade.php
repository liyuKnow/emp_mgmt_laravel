{{-- extends mater --}}
@extends('dashboard.master')

{{-- title --}}
@section('title')
    {{$page_title}}
@endsection

    
    {{-- content --}}   
@section('content')
{{-- Employee mgmt table --}}
<div class="w-full mt-4">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> All employees
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full table-auto bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Employee Id</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Image</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Full Name</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Date Employeed</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Job</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                {{-- check if there are employees with for else empty --}}
                @if(count($employees) > 0)
                    @foreach($employees as $employee)
                        <tr>
                            <td class="w-1/6 text-left py-3 px-4">{{$employee->id}}</td>
                            <td class="w-1/6 text-left py-3 px-4">
                                    {{-- avatar --}}
                                    <img src="{{$employee->emp_img}}" class="rounded-[50px] h-12 w-12" />
                            </td>
                            <td class="w-1/6 text-left py-3 px-4">{{$employee->first_name}} {{$employee->last_name}}</td>
                            <td class="w-1/6 text-left py-3 px-4">{{$employee->employed_date}}</td>
                            <td class="w-1/6 text-left py-3 px-4">{{$employee->job_title}}</td>
                            <td class="w-1/6 text-left py-3 px-4">
                                @if ($employee->status == "active")
                                    <span class="bg-green-300 text-white px-2 py-1 rounded-full">Active</span>
                                @else
                                    <span class="bg-red-300 text-white px-2 py-1 rounded-full">Former</span>
                                @endif
                            </td>
                            <td class="w-1/6 py-3 px-4">
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
    {{-- PAGINATION --}}
    <div class="flex justify-right">
        {{$employees->links()}}
    </div>
</div>
@endsection
    
    {{-- script --}}    
@section('script')

@endsection
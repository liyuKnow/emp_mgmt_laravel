{{-- extends mater --}}
@extends('dashboard.master')

{{-- title --}}
@section('title')
    Home
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
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Date Employeed</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Job</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="w-1/6 text-left py-3 px-4">Emp001</td>
                    <td class="w-1/6 text-left py-3 px-4">Jean Lian Smith</td>
                    <td class="w-1/6 text-left py-3 px-4">02-08-2015</td>
                    <td class="w-1/6 text-left py-3 px-4">Developer</td>
                    <td class="w-1/6 text-left py-3 px-4">Current</td>
                    <td class="w-1/6 py-3 px-4">
                        <i class="fa fa-eye m-1 text-green-400"></i>           
                        <i class="fa fa-edit m-1 text-blue-400"></i>
                        @if(session('user') && session('user')->user_type == "admin")
                        <i class="fa fa-trash m-1 text-red-400"></i>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
    
    {{-- script --}}    
@section('script')

@endsection
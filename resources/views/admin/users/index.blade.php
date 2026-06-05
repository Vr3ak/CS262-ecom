@extends('admin.layout-admin')
@section('content')
    <div class="row justify-content-start">
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="col-12 mt-5">
            <div class="card shadow-sm border-2">
                <div class="card-header text-center py-3 text-success border border-light">
                    <i class="bi bi-person-square fs-3 d-block mb-2"></i>
                    <h4 class="mb-2">Admin Users</h4>
                </div>
                <div class="card-body p-4 text-center">
                    <div class="text-success fw-bold border border-2 rounded overflow-hidden">
                        <table class="table mb-0">
                            <thead>
                                <tr class="text-success">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('users.edit', ['user' => $user])}}" class="btn p-1 text-success fw-bold bg-lighttext-decoration-none border-success rounded border-2">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('users.destroy', ['user' => $user])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn p-1 text-danger fw-bold bg-light border-danger rounded border-2 ">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center mt-4 mb-4">
                        <a href="{{ url('/admin/dashboard') }}" class="btn border-success border-2 text-success fw-bold bg-light">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

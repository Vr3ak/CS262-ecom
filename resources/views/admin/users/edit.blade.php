@extends('admin.layout-admin')
@section('content')
<div class="row justify-content-start">
        <div class="col-12 mt-5">
            <div class="card shadow-sm border-2">
                <div class="card-header text-center py-3 text-success border border-light">
                    <i class="bi bi-person-square fs-3 d-block mb-2"></i>
                    <h4 class="mb-2">Edit User</h4>
                    <div class="text-danger">
                        @if($errors->any())
                            @foreach($errors->all() as $errors)
                                <p>{{$errors}}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="card-body p-4 text-center">
                    <div class="text-success fw-bold border border-2 rounded overflow-hidden p-2">
                        <form method="post" action="{{route('users.update', ['user' => $user])}}">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-center m-1">
                                <label class="col-1">Full Name</label>
                                <input type="text" name="name" class="col-3" value="{{$user->name}}"/>
                            </div>
                            <div class="row justify-content-center m-1">
                                <label class="col-1">Email</label>
                                <input type="text" name="email" class="col-3" value="{{$user->email}}"/>
                            </div>
                            <div>
                                <input type="submit" value="Update" class="btn border-success border-2 text-success fw-bold bg-light">
                            </div>
                            </div>
                        </form>
                        
                        <div class="d-flex align-items-center mt-4 mb-4">
                        <a href="{{  route('users.index')  }}" class="btn border-success border-2 text-success fw-bold bg-light">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                    </div>
                    </div>
                   
            </div>
        </div>
    </div>
    </div>
@endsection
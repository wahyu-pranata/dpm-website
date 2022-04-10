@extends('layouts.app')

@section('content')
	<div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ 'Profile ' . Auth::user()->name }}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <img src="{{ (Auth::user()->image_path) ? asset(Auth::user()->image) : asset('img/no-profile.png') }}" class="img-thumbnail rounded mx-auto d-block" alt="dpm-no-profile">
                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name : </label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="input your name ..." value="{{ Auth::user()->name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="input your email ..." value="{{ Auth::user()->email }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control-file @error('email') is-invalid @enderror">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@extends('layouts.app')

@section('styles')
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ Auth::user()->name . ' Activity ' }}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ ($userActivity ?? null) ? route('admin.activity.update', [$userActivity->id]) : route('admin.activity.store') }}" method="POST">
                            @csrf
                            @isset($userActivity)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label for="activity">Activity : </label>
                                <input type="text" name="activity" id="activity" class="form-control @error('activity') is-invalid @enderror" placeholder="input your activity ..." value="{{ $userActivity->activity ?? null }}">
                                @error('activity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="activity_role">Role : </label>
                                <input type="text" name="activity_role" id="activity_role" class="form-control @error('activity_role') is-invalid @enderror" placeholder="input your activity_role ..." value="{{ $userActivity->activity_role ?? null }}">
                                @error('activity_role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description : </label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{ $userActivity->description ?? null }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="held_at">Held at : </label>
                                <input type="text" name="held_at" id="held_at" class="form-control @error('held_at') is-invalid @enderror"  value="{{ $userActivity->held_at ?? null }}">
                                @error('held_at')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                        </form>
                        <hr class="my-3">
                        @if(Auth::user()->activities)
                            <div class="list-group">
                                @foreach(Auth::user()->activities as $userActivity)
                                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                                        <small>{{ $userActivity->held_at }}</small>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{ $userActivity->activity }}</h5>
                                            <div class="d-flex">
                                                <a href="{{ route('admin.activity.edit', [$userActivity->id]) }}" class="btn btn-primary mr-2">Edit</a>
                                                <form action="{{ route('admin.activity.destroy', [$userActivity->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </div>
                                        <p class="mb-1">{{ $userActivity->description }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#held_at').datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
@endsection
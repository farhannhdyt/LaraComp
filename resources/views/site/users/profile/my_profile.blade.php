@extends('site.layouts.app')

@section('title')
    My Profile
@endsection

@section('page-title')
    Profile Management
@endsection

@section('content-page')

@if ( session('success') )
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('success') }}
    </div>
@endif

<div class="card border-primary">
        <div class="card-header text-white bg-primary mb-3">
            <div class="card-title pull-left">
                <div class="float-left">
                    Change Your Profile
                </div>
                <div class="float-right">
                    <a href="{{ route('home') }}" class="btn btn-outline-warning"><span class="oi oi-home"></span> Home</a>
                </div>
            </div>
            
        </div>

<div class="card-body bg-secondary-lighter">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('update-profile', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name"><strong> Name </strong></label>
                    <input type="text" value="{{ $user->name }}" class="form-control {{ $errors->first('name') ? "is-invalid": "" }}" name="name" placeholder="Full Name">
                    
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="email"><strong> Email </strong></label>
                    <input type="text" value="{{ $user->email }}" class="form-control {{ $errors->first('email') ? "is-invalid": "" }}" name="email" placeholder="Email">
                    
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone"><strong> Phone </strong></label>
                    <input type="number" value="{{ $user->phone }}" class="form-control {{ $errors->first('phone') ? "is-invalid": "" }}" name="phone" placeholder="+62">
                    
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address"><strong> Address </strong></label>
                    <textarea class="form-control {{ $errors->first('address') ? "is-invalid": "" }}" name="address" placeholder="Address">{{ $user->address }}</textarea>
                
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="image"><strong> Image </strong></label>
                    <br>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset('images/users_images/' .$user->image) }}" width="100" style="margin-top: 10px;" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="float-right btn btn-outline-primary">Save</button>
            
            <a class="btn btn-outline-danger" href="{{ route('my-password', Auth::user()->id) }}">Change Password</a>
        </form>
    </div>
</div>
@endsection
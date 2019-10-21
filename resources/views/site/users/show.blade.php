@extends('site.layouts.app')

@section('title')
    Users Show
@endsection

@section('page-title')
    User Management Show
@endsection

@section('content-page')
<br>
<div class="card border-primary">
		<div class="card-header text-white bg-primary mb-3">
            <div class="card-title pull-left">
                <div class="float-left">
                   Show User
                </div>
                <div class="float-right">
                    <a href="{{ route('users.index') }}" class="btn btn-outline-warning"><span class="oi oi-home"></span> Home</a>
                </div>
			</div>
            
        </div>

    <div class="card-body bg-secondary-lighter">
            <div class="row">
                <div class="col-md-6">
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

                    <div class="form-group">
                        <label for="address"><strong> Address </strong></label>
                        <textarea class="form-control {{ $errors->first('address') ? "is-invalid": "" }}" name="address" placeholder="Address">{{ $user->address }}</textarea>
                    
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->first('level') ? 'is-invalid' : '' }}">
                        <label for="level"><strong> Level </strong></label>
                        <select name="level" id="level" class="form-control">
                            <option value="">Choose Level</option>
                            <option value="ADMIN" {{ $user->level == 'ADMIN' ? 'selected' : '' }}>Admin</option>
                            <option value="ADMIN_BERITA" {{ $user->level == 'ADMIN_BERITA' ? 'selected' : '' }}>Admin Berita</option>
                            <option value="ADMIN_PROFILE" {{ $user->level == 'ADMIN_PROFILE' ? 'selected' : '' }}>Admin Profile</option>
                        </select>
            
                        <div class="help-block">
                            {{ $errors->first('level') }}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->first('status') ? 'is-invalid' : '' }}">
                        <label for="status"><strong> Status </strong></label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Choose Status</option>
                            <option value="ACTIVE" {{ $user->status == 'ACTIVE' ? 'selected' : '' }}>ACTIVE</option>
                            <option value="INACTIVE" {{ $user->status == 'INACTIVE' ? 'selected' : '' }}>INACTIVE</option>
                        </select>

                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image"><strong> Image </strong></label>
                        
                        <img src="{{ asset('images/users_images/' . $user->image) }}" class="form-control" style="width:150px;">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection